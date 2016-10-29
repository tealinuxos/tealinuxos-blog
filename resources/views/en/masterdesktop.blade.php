<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <title>TeaLinuxOS</title>

    <link rel="shortcut icon" href="{{asset ('images/tealinuxos.png')}}" />
    <!-- Page styles -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Lato:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en')}}" rel="stylesheet">
    <link href="{{url ('http://fonts.googleapis.com/css?family=Open+Sans')}}" rel='stylesheet' type='text/css'>
    <link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('blog-css/material.min.css')}}">
    <link rel="stylesheet" href="{{asset ('blog-css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('blog-css/styles.css')}}">
    <link rel="stylesheet" href="{{asset ('css/card.css')}}">
    <link rel="stylesheet" href="{{url ('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
    @yield('header')
</head>



@yield('content');





<script src=" {{asset('/js/vendor/jquery-2.1.1.min.js')}}"></script>
<script src="{{asset('/js/vendor/material.min.js')}}"></script>
<!-- // <script src="http://isotope.metafizzy.co/beta/isotope.pkgd.js"></script> -->
<script src="{{asset('/js/vendor/isotope.js')}}"></script>
<script src="{{asset ('/js/plugin.js')}}"></script>
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</div>
</div>
</div>
</body>
</html>
