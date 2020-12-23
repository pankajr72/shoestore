@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Product Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.update',$category->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="">Parent Id</label>
                                <select name="parent_id" class="form-control">
                                    <option value="">Select Parent Id</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                        {{ $cat->id == $category->parent_id ?  'selected' : ''}}>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            </div>

                            <div class="form-group">
                                <label for="">Category Description</label>
                                <textarea name="description" class="form-control">{{ $category->description }}</textarea>
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
