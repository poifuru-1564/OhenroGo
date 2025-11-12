@extends('auth.login_layout')

@section('login_right_content')


<h3 >Forgot Password?</h3>

<div class="login-form">
    <form method="POST" action="{{ route('requestReset') }}" class="request">
        @csrf
        <div class="form-elements">
            <h6>Enter your email and we'll send you a link to reset your password.</h6>
            <input
            type="text"
            name="email"
            id=""
            placeholder="Email"
            required
            /><br />
        </div>
        <button type="submit" class="btn">Send Link</button><br />
    </form>

    {{-- @if (session('status'))
        <span>{{ session('status')}}</span>
    @endif --}}

</div>
<p>
Back to <a href="{{ route('showLogin') }}">Login</a>
</p>


@endsection
