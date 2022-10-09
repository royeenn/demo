@extends('layouts.app')
@section('title', 'edit category')

@section('content')
    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Edit category</h5>
            </div>
            <form method="POST" action="{{ url('category/update/' . $category->idcategory) }}">
                <div class="mb-3">
                    <label for="category" class="form-label">Nama Category</label>
                    <input value="{{ $category->category }}" type="text" id="category" name="category"
                        class="form-control" placeholder="category">

                </div>
                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>

        </div>

    </div> <!-- end card-->
@endsection
