@extends('admin.layouts.master')
@section('content')
    <div class="main-content overflow-hidden">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button> --}}
                                                <a href="{{ url('products/create') }}"
                                                    class="btn btn-success add-btn">Add</a>
                                                <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i
                                                        class="ri-delete-bin-2-line"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">name</th>
                                                        <th scope="col">Category_id</th>

                                                        <th scope="col">Image</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Price</th>





                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($product as $value)
                                                        <tr>
                                                            <th scope="row">{{ $value->id }}</th>
                                                            <td>{{ $value->name }}</td>


                                                            <td>{{ $value->category?
                                                            $value->category->name: "NULL" }}</td>


                                                            <td>image</td>


                                                            <td>{{ $value->description }}</td>


                                                            <td>{{ $value->price }}</td>


                                                            <th>
                                                                <div class="d-flex ">
                                                                    <a href="{{ url('products/' . $value->id . '/edit') }}"><button
                                                                            class="btn btn-warning ms-1">edit</button></a>
                                                                    <a href="{{ url('products/' . $value->id . '/show') }}"><button
                                                                            class="btn btn-info ms-1">show</button></a>

                                                                    <div>
                                                                        <form
                                                                            action="{{ url('products/' . $value->id) }}"method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger ms-1">Delete</button>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </th>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>


                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                        data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteRecordModal">Remove</button>
                                                </div>
                                            </div>
                                            </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                    find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
