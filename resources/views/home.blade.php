<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>


</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Laravel Blogs</a>
    </div>
    <ul class="nav navbar-nav">
                        <li class="nav-item">
                        @if (Auth::guest())
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">Login</a>
                        @else
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                        </li>


    </ul>
  </div>
</nav>                        

<div>
    <h2> welcome to laravel blogs website</h2>
    <p> to view blogs u need to login frst </p>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>