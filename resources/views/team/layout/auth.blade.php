<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/assets/images/yaslogo.png" />
    <title>
        یاس: تیم
        {{Auth::guard('team')->user()->name}}
    </title>

    <!-- Styles -->
    
    <!--<link href="/css/app.css" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/admin.css" rel="stylesheet">
    <link href="/admin/css/my.css" rel="stylesheet">
    <!--<link href="/admin/css/font-awesome.css" rel="stylesheet">-->
    <link href="/admin/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://cdn.font-store.ir/yekan.css" type="text/css" />
    <style>
        body{
            font-family: 'BYekan',"Raleway", sans-serif !important; 
        }
        .sidebar a{
            font-size:15px !important;
        }
        
    </style>
    @yield('style')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-color:#F8F8F8">
    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="{{route('home')}}" class="logo">
                ادمین
                <span>
                یاس
            </span></a>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">
                                 {{Auth::guard('team')->user()->name}}
                                </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up text-center"></div>
                            <li><a href="{{ url('/team/logout') }}"
                                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="icon-key"></i>خروج</a></li>
                                     <form id="logout-form" action="{{ url('/team/logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                    </form>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse " style="font-family:BYekan !important;">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="">
                        <a class="" href="{{route('team_home')}}">
                            <i class="fa fa-tasks"></i>
                            <span>
                                فعالیت ها
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{route('uploads.index')}}">
                            <i class="fa fa-upload"></i>
                            <span>
                               آپلود فایل ها
                            </span>
                        </a>
                    </li>
                    
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
  
    @yield('content')
    </section>
    <!-- Scripts -->
    
    <script src="/admin/js/app.js"></script>
    <script src="/admin/js/admin.js"></script>
    <script
  src="http://code.jquery.com/ui/1.9.2/jquery-ui.min.js"
  integrity="sha256-eEa1kEtgK9ZL6h60VXwDsJ2rxYCwfxi40VZ9E0XwoEA="
  crossorigin="anonymous"></script>
  <script src="/admin/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker.fa.min.js"></script>
    
    @yield('js')
</body>
</html>
