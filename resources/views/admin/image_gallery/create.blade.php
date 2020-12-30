@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Product Image
                    </div>
                    <div class="card-body">
                        <form action="{{ route('image-galleries.store') }}" method="post" enctype="multipart/form-data">
                            @csrf                            

                            <div class="form-group">
                                <label for="">Product</label>
                                <select name="product_id" class="form-control">
                                <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Product Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                            

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
