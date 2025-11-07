@extends('layout.login_layout')

@section('login_right_content')

<div class="right-box">
    <h3>Login</h3>

    <div class="login-form">
        <div class="form-elements">
            <label for="email">Email: </label><br />
            <input
            type="text"
            name="name"
            id=""
            placeholder="Email"
            size="25"
            /><br />

            <label for="password">Password: </label><br />
            <input
            type="password"
            name="password"
            id=""
            placeholder="Password"
            size="25"
            /><br />
        </div>
        <button type="submit" class="btn">Login</button><br />
    </div>
    <p>
    Don't have an account?
    <a href="sign_up.html">Sign Up</a>
    </p>
    <p>Forgot password? <a href="reset_password.html">Click here</a></p>

</div>

@endsection