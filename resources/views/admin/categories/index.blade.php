@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <a href=" {{ route('categories.create') }} " class="btn btn-success">Add Product Category +</a>
        <div class="row">
            <div class="col-md-12 py-3">

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Parent id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->parent_id != null  ? App\Models\Category::find($category->parent_id)->name : '' }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-light">Edit</a>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="post" style="display: inline-block">
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
