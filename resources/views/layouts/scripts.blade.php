
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="http://127.0.0.1:8000/dist/css/adminlte.min.css">

        <link rel="stylesheet" href="http://127.0.0.1:8000/css/styles.css">        

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <!-- jQuery -->
        <script src="http://127.0.0.1:8000/plugins/jquery/jquery.min.js"></script>
        <!-- ChartJS-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
        
    </head>
  @yield('content')
  </body>
</html>
