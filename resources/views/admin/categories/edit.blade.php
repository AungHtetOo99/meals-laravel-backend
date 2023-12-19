@extends('admin.layouts.master')

@section('content')
    <div class="main-content overflow-hidden">

        <div class="page-content">
            <div class="container-fluid">
              <form action="{{url('category/'.$category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name='name' value="{{$category->name}}" class="form-control" id="staticEmail">
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
