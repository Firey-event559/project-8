<?php

use Illuminate\Support\Facades\Auth;
?>
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
    <title>Uneed-IT</title>
</head>

<body>
    <nav id="navbar">
        <div id="logonav">
            <a href="{{ url('/index') }}">
                <img src="{{ Vite::asset('resources/assets/cropped-logo UNEED-IT.png') }}">
            </a>
        </div>
        <div id="logoptions">
            <ul>
                @guest
                <li class="redc"><a href="{{ url('/webshop') }}">Webshop</a></li>
                <li class="redc"><a href="{{ url('/offertes.offerte') }}">Reparatie</a></li>
                <li class="redc"><a href="{{ url('/services') }}">Service</a></li>
                <li class="redc"><a href="{{ url('/login') }}">Account</a></li>
                <a href="{{url('shopping_cart')}}"><img class="shopping_cart" src="{{ Vite::asset('resources/assets/cart.svg') }}"></a>
                @endguest

                @auth

                @if (Auth::user()->isUser() || Auth::user()->isAdmin())
                <li class="redc"><a href="{{ url('/webshop') }}">Webshop</a></li>
                <li class="redc"><a href="{{ url('offertes.offerte') }}">Reparatie</a></li>
                <li class="redc"><a href="{{ url('/services') }}">Service</a></li>
                <a href="{{url('shopping_cart')}}"><img class="shopping_cart" src="{{ Vite::asset('resources/assets/cart.svg') }}"></a>
                <div class="profile-container">
                    <img class="person_circle" src="{{ Vite::asset('resources/assets/person-circle.svg') }}"
                        alt="Profile">
                        
                        

                        <div class="account_info">
                     <p class="button_uitloggen">{{ Auth::user()->name }}</p>
                     <p class="button_uitloggen"><a href="{{ route('user_change', Auth::user()->id) }}">user bewerken</a></p>
    <form method="POST" action="layout" class="signout-form">
        @csrf
        <button type="submit" class="button_uitloggen">Uitloggen</button>
    </form>
</div>
                </div>


                @endif

                @if (Auth::user()->isAdmin())
                <a href="{{ url('/admin') }}"><img src="{{ Vite::asset('resources/assets/person-gear.svg') }}"></a>
                @endif

                @endauth
            </ul>
        </div>
    </nav>



    {{ $slot }}


    <footer class="bg-dark text-white text-center text-lg-center" id="footer">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Grid row -->
            <div class="row row-cols-1 row-cols-md-3 g-4" id="footer_text">
                <!-- Grid column 1 -->
                <div class="col">
                    <h5 class="text-uppercase">Openingstijden</h5>
                    <p>
                        MA T/M VRIJ, 09:00 - 23:00 <br>
                        Telefonisch bereikbaar voor abonnementhouders
                    </p>
                </div>
                <!-- Grid column 2 -->
                <div class="col">
                    <h5 class="text-uppercase">Telefoonnummer</h5>
                    <p>
                        Servicenummer +316 30 985 409 <br>
                        Kantoor +3118 28 202 18 <br>
                        Bereikbaar 09:00-18:00
                    </p>
                </div>
                <!-- Grid column 3 -->
                <div class="col">
                    <h5 class="text-uppercase">Locatie</h5>
                    <p>
                        Zuidbaan 514, 2841MD <br>
                        Moordrecht
                    </p>
                </div>
            </div>
            <!-- Grid row -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-light" href="#">UNEED-IT</a>
        </div>
        <!-- Copyright -->
    </footer>