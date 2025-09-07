@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    @if(isset($product))
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $product->name }}</h2>
                <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
            </div>
        </div>
    @else
        <p>Product not found.</p>
    @endif
</div>
@endsection
