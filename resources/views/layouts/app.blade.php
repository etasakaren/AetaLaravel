<html>

<head>
    <meta charset="utf-8">
    <title>Aeta Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    @include('inc.navbar')
    <div class = "container">
        @if(Request::is('/'))
            @include('inc.showcase')
            @include('inc.messages')        
                @yield('content') 
        @else
            @include('inc.showcasearticles')
                @yield('content') 
        @endif


    </div> 
    <footer class="footer mt-auto py-3 bg-dark text-center">
  <div class="container">
    <span class="text-muted">Copyright 2020 &copy;AetaLaravel</span>
  </div>
</footer>
</body>

</html>