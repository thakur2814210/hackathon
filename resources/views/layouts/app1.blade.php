<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{$page_title}}</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link id="theme-sheet" rel="stylesheet" href="{{asset('assets/css/core.css')}}">
</head>


<body class="is-theme-core">
   
    @yield('main')

    
     <!-- /Chat widget -->
     <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
     <script src="{{asset('assets/js/app.js')}}"></script>
     <script src="{{asset('assets/js/core.js')}}"></script>

     @yield('scripts')

    
 </body>
 
 </html>