@extends('layouts.backend')
@section('main')
    <div class="mx-auto">
        <div class="card my-3 p-3">
            <div class="card-body">
                <h4 class="pb-3">Edit Product</h4>
                <form class="form-control p-3" action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input class="form-control mb-3" type="text" name="name" id="name" value="{{ $product->name }}">
                    <label for="description">Description</label>
                    <input class="form-control mb-3" type="text" name="description" id="description" value="{{ $product->description }}">
                    <label for="price">Price</label>
                    <input class="form-control mb-3" type="text" name="price" id="price" value="{{ $product->price }}">
                    <label for="category">Category</label>
                    <input class="form-control mb-3" type="text" name="category" id="category" value="{{ $product->category }}">
                    <label for="brand">Brand</label>
                    <input class="form-control mb-3" type="text" name="brand" id="brand" value="{{ $product->brand }}">
                    <label for="stock">Stock</label>
                    <input class="form-control mb-3" type="number" name="stock" id="stock" value="{{ $product->stock }}">
                    <label for="expiry_date">Expiry Date</label>
                    <input class="form-control mb-3" type="date" name="expiry_date" id="expiry_date" value="{{ $product->expiry_date }}">
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
                </form>
        </div>
    </div>
@endsection