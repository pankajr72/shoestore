@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <a href=" {{ route('image-galleries.create') }} " class="btn btn-success">Add Product Image +</a>
        <div class="row">
            <div class="col-md-12 py-3">

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($imageGalleries as $imageGallery)
                        <tr>
                            <td>{{ $imageGallery->id }}</td>
                            <td>{{ App\Models\Product::find($imageGallery->product_id)->name }}</td>
                            <td><img src="{{ $imageGallery->image }}" width="100px"></td>
                            <td>
                                <a href="{{ route('image-galleries.edit', $imageGallery->id) }}" class="btn btn-light">Edit</a>
                                <form action="{{ route('image-galleries.destroy',$imageGallery->id) }}" method="post" style="display: inline-block">
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
