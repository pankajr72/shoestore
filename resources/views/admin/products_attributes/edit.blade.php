@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Adding Product Attributes
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product-attributes.update', $productAttribute->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Product</label>
                                <select name="product_id" class="form-control">
                                <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}"
                                                {{ $productAttribute->product_id == $product->id ? 'selected' : '' }}
                                        >{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Product Size</label>
                                <input type="text" name="size" value="{{ $productAttribute->size }}" class="form-control">
                            </div>

                            
                            <div class="form-group">
                                <label for="">Product's Stock</label>
                                <input type="number" name="stock" value="{{ $productAttribute->stock }}" class="form-control">
                            </div>
                            
                            

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" value="Update" class="btn btn-success btn-block my-2">
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
