<!DOCTYPE html>
<html lang="en">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite (['resources/css/app.css'])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<title>Document</title>
</head>
 
<body>
<nav id="navbar">
    <div id="logonav">
    <img src="{{ Vite::asset('resources/assets/cropped-logo UNEED-IT.png') }}">
    </div>
    <div id="logoptions">
        <ul>
            <li class="redc"> <a href="{{ url('/index')}}">Home</a> </li>
            <li class="redc"> <a href="OverOns.html">Over ons </a></li>
            <li class="redc"> <a href="service.html">Service </a></li>
            <li class="redc"> <a href="{{ url('/webshop') }}">Webshop </a> </li>
            <li class="redc"> <a href="{{ url('/offerte') }}">Offerte </a></li>
            <li class="redc"><a href="{{ url('/login_signup') }}">Account</a></li>
            
        </ul>
    </div>
</nav>
 
 
{{ $slot }}
 
 
<footer class="bg-body-tertiary text-center text-lg-start" id="footer">
<!-- Grid container -->
<div class="container p-4">
<!--Grid row-->
<div class="row">
<!--Grid column-->
<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
<h5 class="text-uppercase">Footer text</h5>
 
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
</p>
</div>
<!--Grid column-->
 
      <!--Grid column-->
<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
<h5 class="text-uppercase">Footer text</h5>
 
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
</p>
</div>
<!--Grid column-->
</div>
<!--Grid row-->
</div>
<!-- Grid container -->
 
  <!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
<a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
</div>
<!-- Copyright -->
</footer>
</body>
</html>