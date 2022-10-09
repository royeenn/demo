@extends('layouts.app')
@section('title', 'Menu')

@section('content')

    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Table Menu</h5>
            </div>
            <div class="col-3 d-flex justify-content-end"><a href="{{ url('menu/create') }}" type="button"
                    class="btn btn-primary">ADD</a></div>
        </div>
        <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Rating Count</th>
                    <th>Rating Sum</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $description->description }}</td>
                        <td>{{ $price->price }}</td>
                        <td>{{ $ratingcount->ratingcount }}</td>
                        <td>{{ $ratingsum->ratingsum }}</td>
                        <td class="table-action">
                            <a href="{{ url('menu/edit/' . $menu->idtag) }}" class="action-icon"> <i
                                    class="mdi mdi-pencil"></i></a>
                            <a href="{{ url('menu/delete/' . $menu->idtag) }}" class="action-icon"> <i
                                    class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> <!-- end card-->
@endsection
