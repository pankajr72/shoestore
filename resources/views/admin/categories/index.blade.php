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
                    

                </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
