@extends('layouts.app')
@section('title', 'edituser')

@section('content')
    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Edit User</h5>
            </div>
            <form method="POST" action="{{ url('user/update/' . $user->iduser) }}">
                <div class="mb-3">
                    <label for="common" class="form-label">commonname</label>
                    <input value="{{ $user->commonname }}" type="text" id="common" name="commonname"
                        class="form-control" placeholder="common name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}" type="email" id="email" name="email" class="form-control"
                        placeholder="type email">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nickname</label>
                    <input value="{{ $user->nickname }}" type="text" id="name" name="name" class="form-control"
                        placeholder="type name">
                </div>
                <div class="mb-3">
                    <label for="pw" class="form-label">Password</label>
                    <input value="{{ $user->password }}" type="password" id="pw" name="pw" class="form-control"
                        placeholder="type name">
                </div>
                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>

        </div>

    </div> <!-- end card-->
@endsection
