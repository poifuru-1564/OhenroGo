<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Lists</title>
    <!-- Favicon-->

    {{-- fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/blogListing.css') }}"/>

    
    <style>
        /* welcome page */

        .img-container {
        background-image: url("../img/welcome.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50%;
        height: 94vh;
        }

        .message-overlay {
        z-index: -1;
        padding-top: 40vh;
        }

        .message {
        background-color: #2b3426a5;
        padding: 2rem 0;
        text-align: center;
        font-size: 1.5rem;
        color: #d4d6cf;
        font-weight: bold;
        }
        .welcomebtn {
        margin-top: 20px;
        padding: 0.5em;
        border-radius: 0.5em;
        background-color: #2b3426c3;
        color: #d4d6cf;
        display: inline;
        }
        .welcomebtn:hover {
        background-color: #d4d6cfbc;
        cursor: pointer;
        color: #20281b;
        }

        .btn-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        }
    </style>

  </head>


  <body>
     <!-- navigation -->
    <div class="navigation-bar">
        <ul>
            <li class="nav-icon">Ohenro GO</li>
        </ul>
    </div>
    
    
    <!-- Page content-->
    <div class="img-container">
        <div class="message-overlay">
            <div class='message'>
                <p>Welcome to Ohenro GO!</p>
                <p class="sub">- Capture Your Journey. Revisit Every Moment -</p>
                <div class="btn-container">
                    <form action="{{ route('showLogin') }}">
                        <button type="submit" class="welcomebtn">Login</button>
                    </form>
                    <form action="{{ route('showRegister') }}">
                        <button class="welcomebtn">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <div class="footer">
      <p>Ohenro GO</p>
    </div>
  </body>
</html>