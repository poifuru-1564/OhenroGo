@extends('layout.login_layout')

@section('login_right_content')

<div class="right-box">
    <h3>Create an Account</h3>

    <div class="login-form">
        <div class="form-elements">
            <p>Select your role:</p>

            <form action="">
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
                <button type="submit" class="btn">Sign Up</button>
            </form>
        </div>
        <p><a href="sign_up.html">Back</a></p>
    </div>
    <p>Already have an account? <a href="login.html">Login</a></p>
</div>

@endsection