        
@extends('layouts.app')
@section('title', 'Product List')       
@section('content')
    <div class="container">     
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                                                
                        <h3>{{ $data['action'] }} Products</h3>
                    </div>
                    {{-- q: i want to add form to add products here --
                    with   'name' => 'required|string|max:255',     
                           'price' => 'required|numeric|min:0',     
                           'description' => 'nullable|string',              
                    --}}
                    <div class="card-body">             
                                        <form method="POST" action="{{ route('products.store') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" name="description"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Product</button>          

                                        </form>         
                                                        

                </div>
            </div>
        </div>          
    </div>
@endsection
