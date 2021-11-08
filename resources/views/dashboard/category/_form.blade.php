

    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input class="form-control" type="text" id="title" name="title" value="{{ old('title', $category->title) }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input class="form-control" type="text" id="url_clean" name="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
            @error('url_clean')
                    <small class=" text-danger">{{ $message }}</small>
        @enderror
    </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
