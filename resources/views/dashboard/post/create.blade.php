@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

    <form action="{{  route('post.store')  }}" method="POST">
    
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input class="form-control" type="text" id="title" name="title">
            @error('title')
                <small class="text-danger">{{  $message  }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" id="url_clean" name="url_clean">
            @error('url_clean')
                <small class="text-danger">{{  $message  }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea> 
            @error('content')
                <small class="text-danger">{{  $message  }}</small>
            @enderror
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar">
    
    </form>
    
@endsection