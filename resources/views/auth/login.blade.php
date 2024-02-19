@extends('layout')

@section('title', "Login - Login")

@section('body')
    <div class="card-body container">
        <form>
            <form class="w-75 mx-auto my-5 " action="" method="post">
                @csrf
                <x-input name="email" label="Email" type="email" value="{{old('email')}}"></x-input>
                <x-input name="password" label="Mot de passe" type="password" value="{{old('password')}}"></x-input>
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
    </div>
@endsection

