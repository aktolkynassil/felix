<?php

namespace App\Http\Controllers;

use App\Models\Knife;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KnifeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $knives = Knife::where('knife_name', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%")
                ->get();
        } else {
            $knives = Knife::all();
        }

        if ($request->wantsJson()) {
            return response()->json($knives);
        }

        return view('knives.index', compact('knives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('knives.create');
//        return response()->json($knives);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        Log::info($request->all());

        $validated = $request->validate([
            'knife_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'nullable|numeric',
            'image' => 'nullable|url|max:255'
        ]);

        $knife = new Knife();
        $knife->knife_name = $validated['knife_name'];
        $knife->description = $validated['description'] ?? '';
        $knife->price = $validated['price'] ?? null;
        $knife->image = $validated['image'] ?? '';
        $knife->save();

        if ($request->wantsJson()) {
            return response()->json($knife);
        }
        else
            return redirect()->route('knives.index')->with('success', 'Knife created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Knife $knife)
    {
        return view('knives.edit', compact('knife'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Knife $knife)
    {
        $validated = $request->validate([
            'knife_name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'image' => 'required|string|max:255',
        ]);

        $knife->update($validated);

        if ($request->wantsJson()) {
            return response()->json($knife);
        }
        else
            return redirect()->route('knives.index')->with('success', 'Knife created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Knife $knife)
    {
        $knife->delete();

        return redirect()->route('knives.index')->with('success', 'Knife deleted successfully!');
    }

}
