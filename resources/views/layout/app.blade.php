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
    <link rel="stylesheet" href="{{ asset('css/blogListing.css') }}"/>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  
  </head>

  <body>
     <!-- navigation -->
    <div class="navigation-bar">
        <ul>
            <li class="nav-icon">Ohenro GO</li>
            <li>
                <form method='POST' action="{{ route('logout')}}">
                    @csrf
                    <a :href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Logout</a>
                </form>
            </li>
            <li>
              <form action="{{ route('profile')}}" method="GET">
                @csrf
                <a :href="route('profile')" onclick="event.preventDefault();
                                                    this.closest('form').submit()">
                                                    Profile</a>
              </form>
            </li>
            <li><a href="{{ route('posts.create') }}">Create</a></li>
            <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
    </div>
    
    
    <!-- Page content-->
    <div class="main-container">
      @yield('content')
    </div>

    <!-- Footer-->
    <div class="footer">
      <p>Ohenro GO</p>
    </div>

    <script src="{{ asset('js/blogListing.js') }}"></script>
  </body>
</html>
