@extends('layouts.app')
@section('title', 'tambahuser')

@section('content')
    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Tambah User</h5>
            </div>
            <form method="POST" action="{{ url('user/store') }}">
                <div class="mb-3">
                    <label for="common" class="form-label">commonname</label>
                    <input type="text" id="common" name="commonname" class="form-control" placeholder="common name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="type email">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nickname</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="type name">
                </div>
                <div class="mb-3">
                    <label for="pw" class="form-label">Password</label>
                    <input type="password" id="pw" name="pw" class="form-control" placeholder="type name">
                </div>
                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Tambah</button></div>
            </form>

        </div>

    </div> <!-- end card-->
@endsection
