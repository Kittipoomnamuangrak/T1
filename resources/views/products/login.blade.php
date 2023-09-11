@extends('master')

@section('title', 'Login Page')
@section('content')

<div style="background-size: cover; background-position: center center; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <h1 class="mb-5 ; mx-5"><p style="color: rgb(255, 255, 255)">Login</h1>
    <div style="width: 50%">
    <form action="{{ url('login') }}" method="post">
        @csrf
        <div class="mb-3">
            <p style="color: rgb(255, 255, 255)">
            <label for="exampleInputEmail">Email Address</label>
            <input type="text" class="form-control" id="email" name="email"
            value="{{old('email')}}">
            @error('email')
                <div class="invalid-feedback
                    d-block">{{ $errors->first('email') }}
                </div>
            @enderror
        </div>
        <div class="mb-2">
            <p style="color: rgb(255, 255, 255)">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
            @error('password')
                <div class="invalid-feedback
                    d-block">{{ $errors->first('password') }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ url('')}}" role="button" class="btn btn-primary">Main Menu</a>

    </form>
    <body style="background-image: url('https://e1.pxfuel.com/desktop-wallpaper/581/154/desktop-wallpaper-backgrounds-for-login-page-login-page.jpg'); background-size: cover; background-repeat: no-repeat;
    background-position: center;"></body>
    </div>
</div>
@endsection
