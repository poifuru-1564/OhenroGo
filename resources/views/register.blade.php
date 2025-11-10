@extends('layout.login_layout')


@section('login_right_content')

<div class="login-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="register-1" id="registerForm1">
            <h3>Create an Account</h3><br>
            <div class="form-elements">
                
                {{-- <label for="name">Username: </label><br /> --}}
                <input
                    type="text"
                    name="name"
                    id=""
                    placeholder="Username"
                    required
                /><br />

                {{-- <label for="email">Email: </label><br /> --}}
                <input
                    type="text"
                    name="email"
                    id=""
                    placeholder="Email"
                    required
                /><br />

                {{-- <label for="password">Password: </label><br /> --}}
                <input
                    type="password"
                    name="password_confirmation"
                    id=""
                    placeholder="Password"
                    required
                /><br />
            </div>

            {{-- js >> press button and display:none; the current right box / enable the new right box --}}
            <button
            type="button"
            class="btn"
            id="selectRolebtn"
            onclick= "nextForm()"
            >
            Next</button
            ><br />
        </div>

        {{-- new right box for selecting roles --}}
        <div class="register-2" id="registerForm2">
            <h3>Select your Role:</h3>
                <div class="role-container">
                    <div class="role">
                        <input type="radio" name="role" id="pilgrim" value="{{ DB::table('roles')->where('name', 'Pilgrims')->value('id') }}" />
                        <label for="pilgrim">Pilgrim</label><br />
                        <input type="radio" name="role" id="local" value="{{ DB::table('roles')->where('name', 'Locals')->value('id') }}" />
                        <label for="local">Local</label><br />
                        <input
                        type="radio"
                        name="role"
                        id="hotel-owner"
                        value="{{ DB::table('roles')->where('name', 'Hotel and Inn Owners')->value('id') }}"
                        />
                        <label for="hotel-owner">Hotel owner</label><br />
                    </div>
                </div>
                
            <button type="submit" class="btn registerbtn">Sign Up</button><br> 
            <p><a href="{{ route('showRegister') }}">Back</a></p> 

        </div>
    </form>

    {{-- error --}}
    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        
    @endif

    
</div>
<p>Already have an account? <a href="{{ route('showLogin') }}">Login</a></p>

<script src='{{ asset('js/login.js') }}'></script>
@endsection