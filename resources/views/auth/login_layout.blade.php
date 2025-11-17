<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

        {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  
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

