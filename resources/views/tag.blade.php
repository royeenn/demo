@extends('layouts.app')
@section('title', 'Tag')

@section('content')

    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Table Tag</h5>
            </div>
            <div class="col-3 d-flex justify-content-end"><a href="{{ url('tag/create') }}" type="button"
                    class="btn btn-primary">ADD</a></div>
        </div>
        <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tag->name }}</td>
                        <td class="table-action">
                            <a href="{{ url('tag/edit/' . $tag->idtag) }}" class="action-icon"> <i
                                    class="mdi mdi-pencil"></i></a>
                            <a href="{{ url('tag/delete/' . $tag->idtag) }}" class="action-icon"> <i
                                    class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> <!-- end card-->
@endsection
