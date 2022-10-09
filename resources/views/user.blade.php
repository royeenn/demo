@extends('layouts.app')
@section('title', 'user')

@section('content')

    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Table User</h5>
            </div>
            <div class="col-3 d-flex justify-content-end"><a href="{{ url('user/create') }}" type="button"
                    class="btn btn-primary">ADD</a></div>
        </div>
        <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Email</th>
                    <th>Nickname</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->commonname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nickname }}</td>
                        <td class="table-action">
                            <a href="{{ url('user/edit/' . $user->iduser) }}" class="action-icon"> <i
                                    class="mdi mdi-pencil"></i></a>
                            <a href="{{ url('user/delete/' . $user->iduser) }}" class="action-icon"> <i
                                    class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> <!-- end card-->
@endsection
