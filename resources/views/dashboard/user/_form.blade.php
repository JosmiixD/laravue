@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for='surname'>Apellidos</label>
    <input class="form-control" type="text" id='surname' name='surname' value="{{ old('surname', $user->surname) }}">
    @error('surname')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for='email'>Email</label>
    <input class="form-control" type="email" id='email' name='email' value="{{ old('email', $user->email) }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
@if ($pasw)
    <div class="form-group">
        <label for='password'>Password</label>
        <input class="form-control" type="password" id='password' name='password'
            value="{{ old('password', $user->password) }}">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif
<input class="btn btn-primary" type="submit" value="Enviar">
