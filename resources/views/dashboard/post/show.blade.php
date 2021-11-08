@extends('dashboard.master')
@section('content')
    
    <div class="form-group">
        <label for="title">Titulo</label>
        <input readonly class="form-control" type="text" id="title" name="title" value="{{  $post->title  }}">
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input readonly class="form-control" type="text" id="url_clean" name="url_clean" value="{{  $post->url_clean  }}">
        @error('url_clean')
            <small class="text-danger">{{  $message  }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea readonly class="form-control" name="content" id="content" rows="3">{{  $post->title  }}</textarea> 
    </div>
        
@endsection