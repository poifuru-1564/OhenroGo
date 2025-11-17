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

  </head>

  <body>
     <!-- navigation -->
    <div class="navigation-bar">
        <ul>
            <li class="nav-icon">Ohenro GO</li>
            <li>
                <form method='POST' action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Logout</a>
                </form>
            </li>
            <li><a href="{{ route('posts.create') }}">Create</a></li>
            <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
    </div>
    
    
    <!-- Page content-->
    @yield('content')

    <!-- Footer-->
    <div class="footer">
      <p>Ohenro GO</p>
    </div>
  </body>
</html>
