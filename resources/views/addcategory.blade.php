@extends('layouts.app')
@section('title', 'tambah Category')

@section('content')
    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Tambah Category</h5>
            </div>
            <form method="POST" action="{{ url('category/store') }}">
                <div class="mb-3">
                    <label for="category" class="form-label">Nama Category</label>
                    <input type="text" id="category" name="category" class="form-control" placeholder="type category">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" id="position" name="position" class="form-control" placeholder="type position">
                </div>

                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">submit</button></div>
            </form>

        </div>

    </div> <!-- end card-->
@endsection
