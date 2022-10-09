@extends('layouts.app')
@section('title', 'edittag')

@section('content')
    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <h5 class="card-title">Edit Tag</h5>
            </div>
            <form method="POST" action="{{ url('tag/update/' . $tag->idtag) }}">
                <div class="mb-3">
                    <label for="tag" class="form-label">Nama Tag</label>
                    <input value="{{ $tag->name }}" type="text" id="tag" name="tag" class="form-control"
                        placeholder="tag">

                </div>
                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>

        </div>

    </div> <!-- end card-->
@endsection
