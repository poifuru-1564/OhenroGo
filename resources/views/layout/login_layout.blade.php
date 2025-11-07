<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="overlay"></div>

    <div class="container">
      <div class="left-box">
        <h1>Ohenro Go!</h1>
      </div>

      {{-- Right box content --}}
      @yield('login_right_content')

    </div>
  </body>
</html>

