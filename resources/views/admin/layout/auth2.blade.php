<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    
    <!--<link href="/css/app.css" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/admin.css" rel="stylesheet">
    <link href="/admin/css/my.css" rel="stylesheet">
    <link href="/admin/css/font-awesome.css" rel="stylesheet">
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
       
        <!--header end-->
        <!--sidebar start-->
        
  
    @yield('content')
    </section>
    <!-- Scripts -->
    
    <script src="/admin/js/app.js"></script>
    <script src="/admin/js/admin.js"></script>
    @yield('js')
</body>
</html>
