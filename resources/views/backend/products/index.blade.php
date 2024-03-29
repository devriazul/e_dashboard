@extends('layouts.backend')
@section('main')
<div class="py-3">
  <div class="d-flex justify-content-between">
    <h2>Products Table</h2>
    <div>
      <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary"> + Add Product</a>
    </div>
  </div>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
          <th scope="col">Brand</th>
          <th scope="col">Stock</th>
          <th scope="col">Expiry Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($products as $key => $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->expiry_date }}</td>
            <td>
              <a href="{{ url('products/edit/'.$product->id)}}" class="btn btn-sm btn-primary">Edit</a>
              <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr> 
        
        @empty
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
          <td>text</td>
          <td>text</td>
        </tr>
        @endforelse
        
      </tbody>
    </table>
  </div>
</div>
@endsection