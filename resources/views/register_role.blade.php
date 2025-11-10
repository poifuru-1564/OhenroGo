{{-- @extends('layout.login_layout')

@push(`styles`) 
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush


@section('login_right_content')


<h3>Create an Account</h3>

<div class="login-form">
    <div class="form-elements">
        <h4>Select your role:</h4>
        <form action="{{ route('registerRole') }}" method="POST">
            <div class="radio-container">
                <div class="radio_form">
                    <input type="radio" name="" id="pilgrim" value="Pilgrim" />
                    <label for="pilgrim">Pilgrim</label><br />
                    <input type="radio" name="" id="local" value="Local" />
                    <label for="local">Local</label><br />
                    <input
                    type="radio"
                    name=""
                    id="hotel-owner"
                    value="Hotel owner"
                    />
                    <label for="hotel-owner">Hotel owner</label><br />
                </div>
            </div>
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div> 
</div>
<p><a href="{{ route('showRegister') }}">Back</a></p>
<p>Already have an account? <a href="{{ route('showLogin') }}">Login</a></p>


@endsection --}}