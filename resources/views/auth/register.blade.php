@extends('auth.login_layout')


@section('login_right_content')

<div class="login-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
            <h3>Create an Account</h3><br>
            <div class="form-elements">

                <label for="role_id">Select your Role: </label><br>
                <select name="role_id" id="" >
                    <option value='1'>Pilgrim</option>
                    <option value='2'>Local</option>
                    <option value='3'>Hotel Owner</option>
                </select> 
                
                {{-- <label for="name">Username: </label><br /> --}}
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Username"
                    value="{{ old('name') }}"

                    required
                /><br />

                {{-- <label for="email">Email: </label><br /> --}}
                <input
                    type="text"
                    name="email"
                    id="email"
                    placeholder="Email"
                    value="{{ old('email') }}"
                    required
                /><br />


                {{-- <label for="password">Password: </label><br /> --}}
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                    required
                /><br />

            </div>

            <button type="submit" class="btn registerbtn">Sign Up</button><br> 

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
<p>Already have an account? <a href="{{ route('showLogin') }}">Login</a></p>

<script src='{{ asset('js/login.js') }}'></script>
@endsection