@extends('auth.login_layout')
@push('styles') 
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('login_right_content')


<h3>Reset Password</h3>

<div class="login-form">
    <form action="{{ route('resetPassword') }}" method="post">
        @csrf

        {{-- <input type="hidden" name="token" id="{{ $token }}"> --}}

        <div class="form-elements">
            <input
            type="text"
            name="name"
            id=""
            placeholder="Username"
            /><br />

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
            placeholder="New Password"
            /><br />

            {{-- <label for="password">Password: </label><br /> --}}
            <input
            type="password"
            name="password_confirmation"
            id=""
            placeholder="Confirm New Password"
            /><br />

        </div>
        <button class="btn">Reset</button><br />
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="errorMessage">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        
    @endif
</div>
<p>
    Don't have an account?
    <a href="{{ route('showRegister') }}">Sign Up</a>
</p>
<p><a href="{{ route('showLogin') }}">Login</a></p>   


@endsection