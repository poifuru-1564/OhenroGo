@extends('layout.login_layout')
@push('styles') 
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('login_right_content')


<h3>Login</h3>
@if (session('status'))
    <span>{{ session('status') }}</span>
    
@endif


<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        <div class="form-elements">
            {{-- <label for="email">Email </label><br /> --}}
            <input
            type="text"
            name="name"
            id=""
            placeholder="Email"
            required
            /><br />

            {{-- <label for="password">Password </label><br /> --}}
            <input
            type="password"
            name="password"
            id=""
            placeholder="Password"
            required
            /><br />
        </div>
        <button type="submit" class="btn">Login</button><br />
    </form>
</div>
<p>
Don't have an account?
<a href="{{ route('showRegister') }}">Sign Up</a>
</p>
<p>Forgot password? <a href="{{ route('showRequestReset') }}">Click here</a></p>


@endsection