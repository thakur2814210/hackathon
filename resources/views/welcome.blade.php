<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Welcome</title>

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('particles/demo/css/style.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('assets/css/core.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kreon&display=swap" rel="stylesheet">
<style>
body{
    font-family:'Kreon' !important;
}

    </style>
</head>

<body>


<!-- particles.js container -->
<div id="particles-js"> 
        <div style="position:absolute;width:100%;" id="main-hero" class="hero-body ">
            <div class="container has-text-centered">
            
            <img style="height:300px;width:300px"src="{{asset('assets/img/logo.png')}}"/>
                        
                <div class="columns is-vcentered">
                    <div class="column is-12 has-text-centered">
                        <h1 style="font-size:100px">
                            Hack with iSwitch 
                        </h1>
                        <h2 style="font-size:60px" class="subtitle is-2">
                            Join Our Team
                        </h2>
                        <br>
                        
                    </div>
                </div>
            </div>
         </div>
         </div>   
         <script src="{{asset('particles/particles.js')}}"></script>
<script src="{{asset('particles/demo/js/app.js')}}"></script>



    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/core.js') }}"></script>
</body>

</html>