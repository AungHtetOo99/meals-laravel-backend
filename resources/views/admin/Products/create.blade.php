@extends('admin.layouts.master')

@section('content')
    <div class="main-content overflow-hidden">

        <div class="page-content">
            <div class="container-fluid">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ url('products') }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name='name' class="form-control-plaintext" id="staticEmail">
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Category_Id</label>

                        <select name="category_id" class="form-select" name="category_id" id="">
                            @forelse ( $categories as $category )

                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @empty
                            @endforelse

                        </select>

                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name='price' class="form-control-plaintext" id="staticEmail">
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name='description' class="form-control-plaintext" id="staticEmail">
                        </div>

                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3 mb-3">Confirm Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
