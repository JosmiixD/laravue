@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
    <br>
    <form action="{{ route('post.image', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10">
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <div class="col-2">
                <input class="btn btn-primary" type="submit" value="Subir">
            </div>
        </div>
    </form>
@endsection