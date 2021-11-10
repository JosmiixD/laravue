@extends('dashboard.master')
@section('content')
    
    <div class="form-group">
        <label for="name">Nombre</label>
        <input readonly class="form-control" type="text" id="name" name="name" value="{{  $user->name  }}">
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input readonly class="form-control" type="text" id="surname" name="surname" value="{{  $user->surname  }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input readonly class="form-control" type="email" id="email" name="email" value="{{  $user->email  }}">
    </div>

@endsection