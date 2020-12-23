@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <a href=" {{ route('products.create') }} " class="btn btn-success">Add Product +</a>
        <div class="row">
            <div class="col-md-12 py-3">

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ $product->image }}" width="100px"></td>
                            <td>{{ App\Models\Category::find($product->category_id)->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-light">Edit</a>
                                <form action="{{ route('products.destroy',$product->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
