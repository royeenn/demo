@extends('layouts.app')
@section('title', 'Category')

@section('content')

    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Table Category</h5>
            </div>
            <div class="col-3 d-flex justify-content-end"><a href="{{ url('category/create') }}" type="button"
                    class="btn btn-primary">ADD</a></div>
        </div>
        <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->position }}</td>
                        <td class="table-action">
                            <a href="{{ url('category/edit/' . $category->idcategory) }}" class="action-icon"> <i
                                    class="mdi mdi-pencil"></i></a>
                            <a href="{{ url('category/delete/' . $category->idcategory) }}" class="action-icon"> <i
                                    class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> <!-- end card-->
@endsection
