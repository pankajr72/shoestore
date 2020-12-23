@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Product
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="">Product Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ $cat->id == $product->category_id ? 'selected' : '' }}
                                        >{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            </div>

                            <div class="form-group">
                                <label for="">Product Description</label>
                                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="">Product Price</label>
                                <input type="Number" name="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            
                            
                            

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" value="Create" class="btn btn-success btn-block my-2">
                                </div>
                                <div class="col-md-6">
                                    <input type="reset" value="Reset" class="btn btn-primary btn-block my-2">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
