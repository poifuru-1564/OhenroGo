@extends('auth.login_layout')

@section('login_right_content')

<h3>Login</h3>

@if(session()->has('message'))
    <div class="message">
        {{ session('message') }}
    </div>
@endif

<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-elements">
            {{-- <label for="email">Email </label><br /> --}}
            <input
            type="email"
            name="email"
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

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="errorMessage">{{ $error }}</p> 
        @endforeach      
    @endif

</div>
<p>
Don't have an account?
<a href="{{ route('showRegister') }}">Sign Up</a>
</p>
<p>Forgot password? <a href="{{ route('resetPassword') }}">Click here</a></p>


@endsection