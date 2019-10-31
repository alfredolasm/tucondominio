<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('plugins/bootstrap/css/bootstrap.css' )}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('plugins/bootstrap/css/style.css' )}}">
    <script src="https://kit.fontawesome.com/b946f7fd3e.js"></script>
    
     
</head>

<body>

        @include('admin.template.partials.nav')
    <section>
    <div class="row mt-5"></div>
        <div class="container">
        <div class="row justify-content-md-center">
            <div class="card text-center">
            <div class="card-header">
                @yield('title')
            </div>
            @include('flash::message')
            <div class="card-body text-left">
                @yield('content')
            </div>
            <div class="card-footer text-muted">
                Todos los derechos reservados 2019
            </div>
            </div>
        </div>
        </div>
    </section>
    <footer>
        @include('admin.template.partials.footer')
    </footer>
    
    <script src="{{asset ('plugins/jquery/jquery-3.4.1.js') }}"> </script>  
    <script src="{{asset ('plugins/bootstrap/js/bootstrap.js') }}"></script>   
  
</body>

</html>







