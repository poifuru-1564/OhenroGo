<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
  </head>
  <body>
    <div class="overlay"></div>

    <div class="container">
      <div class="left-box">
        <h1>Ohenro GO!</h1>
      </div>
      <div class="right-box">
        <div class="right-box-container">

          {{-- Right box content --}}
          @yield('login_right_content')
        </div>
      </div>
    </div>
  </body>
</html>

