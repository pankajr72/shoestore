@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <a href=" {{ route('product-attributes.create') }} " class="btn btn-success">Add Product Attribute +</a>
        <div class="row">
            <div class="col-md-12 py-3">

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productAttributes as $productAttribute)
                        <tr>
                            <td>{{ $productAttribute->id }}</td>
                            <td>{{ $productAttribute->product->name }}</td>
                            <td>{{ $productAttribute->size }}</td>
                            <td>{{ $productAttribute->stock }}</td>
                            <td>
                                <a href="{{ route('product-attributes.edit', $productAttribute->id) }}" class="btn btn-light">Edit</a>
                                <form action="{{ route('product-attributes.destroy',$productAttribute->id) }}" method="post" style="display: inline-block">
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
