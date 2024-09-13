<?php

use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite (['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Uneed-IT</title>
</head>

<body>
    <nav id="navbar">
        <div id="logonav">
         <img src="{{ Vite::asset('resources/assets/cropped-logo UNEED-IT.png') }}">
        </div>
        <div id="logoptions">
            <ul>
                @guest
                <li class="redc"><a href="{{ url('/index') }}">Home</a></li>
                <li class="bluec"><a href="{{ url('/about_us') }}">Over ons</a></li>
                <li class="redc"><a href="{{ url('/services') }}">Service</a></li>
                <li class="redc"><a href="{{ url('/webshop') }}">Webshop</a></li>
                <li class="redc"><a href="{{ url('/offertes.offerte') }}">Reparatie</a></li>
                <li class="redc"><a href="{{ url('/login') }}">Account</a></li>
                @endguest

                @auth

                @if (Auth::user()->isUser() || Auth::user()->isAdmin())
                <li class="redc"><a href="{{ url('/index') }}">Home</a></li>
                <li class="bluec"><a href="{{ url('/about_us') }}">Over ons</a></li>
                <li class="redc"><a href="{{ url('/services') }}">Service</a></li>
                <li class="redc"><a href="{{ url('/webshop') }}">Webshop</a></li>
                <li class="redc"><a href="{{ url('offertes.offerte') }}">Reparatie</a></li>
                <li class="redc"><a href="{{ url('/login') }}">Account</a></li>
                @endif

                
                @if (Auth::user()->isAdmin())
                <li class="redc"><a href="{{ url('/admin') }}">Admin Dashboard</a></li>
                @endif

                <li>
                    <form method="POST" action="layout">
                        @csrf
                        <button type="submit" class="button_uitloggen">Uitloggen</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>



    {{ $slot }}


    <footer class="bg-dark text-center text-lg-start" id="footer">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                <!--Grid column-->
                <div class="col">
                    <h5 class="text-uppercase ">Openingstijden</h5>

                    <p>
                        MA T/M VRIJ, 09:00 - 23:00

                        <br>Telefonisch bereikbaar voor abonnementhouders


                    </p>
                </div>
                <!--Grid column-->
                <div class="col">
                    <h5 class="text-uppercase">Telefoonnummer</h5>

                    <p>
                        Servicenummer +316 30 985 409 <br>Kantoor +3118 28 202 18 <br>Bereikbaar 09:00-18:00

                    </p>
                </div>
                <!--Grid column-->
                <div class="col">
                    <h5 class="text-uppercase">Locatie</h5>

                    <p>
                        Zuidbaan 514, 2841MD

                        Moordrecht
                    </p>
                </div>

                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-light" href="">UNEED-IT</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>