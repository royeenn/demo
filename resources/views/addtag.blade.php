@extends('layouts.app')
@section('title', 'tambahtag')

@section('content')
    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Tambah Tag</h5>
            </div>
            <form method="POST" action="{{ url('tag/store') }}">
                <div class="mb-3">
                    <label for="tag" class="form-label">Nama Tag</label>
                    <input type="text" id="tag" name="name" class="form-control" placeholder="type tag">
                </div>

                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Tambah</button></div>
            </form>

        </div>

    </div> <!-- end card-->
@endsection
