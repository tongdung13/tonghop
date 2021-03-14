<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<style>

* {
        margin: 0px;
        padding: 0px;
    }

body {
  font-family: sans-serif;
  font-size: 15px;
}

#menu {
    box-sizing: border-box;
     display: inline-block;
}

#menu ul {
  background-image: url("https://i.pinimg.com/564x/62/ed/6e/62ed6ea71018a57a3ab0c8c959d78cb0.jpg");
  width: 200px;
  height: 575px;
  padding: 0;
  list-style-type: none;
}

#menu ul li {
  width: auto;
  height: 40px;
  line-height: 40px;
  border-bottom: 1px solid #e8e8e8;
  padding: 0 1em;
}

#menu ul li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  display: block;
}

#munu ul li:hover {
  background: #orange;
}

#menu .submenu {
    position: absolute;
    left: 200px;
    top: 94px;
    display: none;
    height: 120px;
}

#menu ul li:hover .submenu {
    display: block;
}

#menu .submenu1 {
    position: absolute;
    left: 200px;
    top: 134px;
    display: none;
    height: 120px;
}

#menu ul li:hover .submenu1 {
    display: block;
}

</style>
</head>
<body>
    <div>
        <nav class="navbar navbar-dark bg-dark">
        <div style="margin-left: 1100px">
            <a class="btn btn-success">Sign Up</a>
            <a class="btn btn-info">Log In</a>
        </div>
      </nav>
    </div>
<div class="row">
    <div class="col-2">
        <div id="menu">
            <ul class="root">
                <li><a href="">Home</a></li>
                <li><a href="">Customer</a>
                    <ul class="submenu">
                        <li><a href="{{ route('customers.create') }}">Create</a></li>
                        <li><a href="{{ route('customers.index') }}">List</a></li>
                        <li><a href="">Details</a></li>
                    </ul>
                </li>
                <li><a href="">House</a>
                    <ul class="submenu1">
                        <li><a href="{{ route('homes.create') }}">Create</a></li>
                        <li><a href="{{ route('homes.index') }}">List</a></li>
                        <li><a href="">Details</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-10" >
        <div>
            @yield('content')
        </div>
    </div>
</div>


</body>
</html>
