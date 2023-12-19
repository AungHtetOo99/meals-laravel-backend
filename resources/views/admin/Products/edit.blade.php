@extends('admin.layouts.master')

@section('content')
    <div class="main-content overflow-hidden">

        <div class="page-content">
            <div class="container-fluid">
              <form action="{{url('products/'.$product->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name='name' value="{{$product->name}}" class="form-control-plaintext" id="staticEmail">
                    </div>

                </div>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Category_Id</label>

                    <select name="category_id" class="form-select" name="category_id" id="">
                        @forelse ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                        @endforelse

                    </select>

                </div>

                <div class="mb-3 row rounded-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" name='price' value="{{$product->price}}" class="form-control" id="staticEmail">
                    </div>
                </div>



                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name='description' value="{{$product->description}}" class="form-control" id="staticEmail">
                    </div>

                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Update Info</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    </div>
@endsection
