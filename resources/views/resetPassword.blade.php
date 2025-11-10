@extends('layout.login_layout')
@push('styles') 
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('login_right_content')


<h3>Reset Password</h3>

<div class="login-form">
    <form action="{{ route('resetPassword') }}" method="post">
        @csrf

        <input type="hidden" name="token" id="{{ $token }}">

        <div class="form-elements">
            {{-- <label for="email">Email: </label><br /> --}}
            <input
            type="text"
            name="name"
            id=""
            placeholder="Email"
            /><br />

            {{-- <label for="password">Password: </label><br /> --}}
            <input
            type="password"
            name="password"
            id=""
            placeholder="Password"
            /><br />

            {{-- <label for="password">Password: </label><br /> --}}
            <input
            type="password"
            name="password_confirmation"
            id=""
            placeholder="Confirm Password"
            /><br />

        </div>
        <button class="btn">Reset</button><br />
    </form>
</div>
<p>
    Don't have an account?
    <a href="{{ route('showRegister') }}">Sign Up</a>
</p>
<p><a href="{{ route('showLogin') }}">Login</a></p>   


@endsection