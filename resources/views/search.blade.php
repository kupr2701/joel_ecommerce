@extends('layouts.app')
@section('title', 'Search')
@section('content')

<div class="container">
    <h2 class="lead" style="margin:1em; margin-left:0;">{{ $products->count() }} article pour {{ $query }} de {{ $products->total() }}</h2>
    @if ($products->total() == 0)
        <div class="alert alert-primary">
        Aucun produit trouvé
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">prix</th>
                    <th scope="col">details</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th><a href="{{ route('shop.show', $product->slug) }}" class="text-decoration-none">{{ $product->name }}</a></th>
                        <td>{{ $product->price }} €</td>
                        <td>{{ $product->details }}</td>
                        <td>{{ Str::substr($product->description,0, 70) }}</td>
                        <td><img src="{{ asset('storage/'.$product->image) }}" width="70" height="70"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{ $products->links() }}
</div>

@endsection
