<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Elmoe - Sistem Rekomendasi Buku UGM</title>
        <link href="{{ URL::asset('img/ugm.png') }}" rel="shortcut icon" />  
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="{{ URL::asset('/css/styles.css') }}" rel="stylesheet">
        @yield('head.style')
    </head>
    <body>
<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}"><b>Elmoe</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="fa fa-navicon"></span>
      </a>
    </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
                    <button type="submit" class="btn btn-default pull-right"><i class="fa fa-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                </form>
             </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
            <ul class="dropdown-menu">
               @if (Auth::guest())
               <li><a href="{{ url('/login') }}">Login</a></li>
               <li><a href="{{ url('/register') }}">Register</a></li>
               @else
              <li><a href="{{ url('/setting') }}">Setting</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/logout') }}">Sign Out</a></li>
              @endif
             </ul>
          </li>
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    
    @yield('body.script')

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <footer style="vertical-align:bottom !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5>© Universitas Gadjah Mada 2016</h5></div>
            </div>
        </div>
    </footer>



    </body>
</html>