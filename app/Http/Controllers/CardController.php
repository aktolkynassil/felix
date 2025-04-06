<?php

namespace App\Http\Controllers;

use App\Models\Knife;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function addToCart($id): \Illuminate\Http\RedirectResponse
    {
        $knife = Knife::findOrFail($id);
        $cart = session()->get('cart', []);
        $cart[$id] = $knife;
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }
    public function index(Request $request)
    {
        $knives = Knife::query();

        if ($request->has('search')) {
            $knives->where('knife_name', 'like', '%' . $request->search . '%');
        }

        return view('knives.index', ['knives' => $knives->get()]);
    }

}
