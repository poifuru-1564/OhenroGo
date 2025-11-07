@extends('layout.login_layout')

@section('login_right_content')

<div class="right-box">
    <h3>Create an Account</h3>

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

        <button
        type="submit"
        class="btn"
        onclick="location.href=sign_up_role.html"
        >
        Next</button
        ><br />
    </div>
    <p>Already have an account? <a href="login.html">Login</a></p>
</div>

@endsection