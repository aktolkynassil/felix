@foreach ($knives as $knife)
    <div>{{ $knife->name }}</div>
    <div>{{ $knife->price }}</div>
    <div>{{ $knife->description }}</div>
@endforeach
