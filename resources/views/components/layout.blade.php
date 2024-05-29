
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite (['resources/css/app.css'])
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
            <li class="bluec"> <a href="OverOns.html">Over ons </a></li>
            <li class="redc"> <a href="service.html">Service </a></li>
            <li class="bluec" > <a href="zakelijk.html">Zakelijk </a></li>
            <li class="redc"> <a href="faq.html">Faq </a> </li>
            <li class="bluec"><a href="Bezorgdiensten.html"> Bezorgdiensten </a></li>
            <li class="redc"><a href="{{ url('/login_signup') }}">Account</a></li>
            
        </ul>
    </div>
</nav>

<br>

<footer id="footer">
    <div id="adress">
        <img src="{{ Vite::asset('resources/assets/location.png') }}">
        <p>ZUIDBAAN 514, 2841MD</p>
       <p> MOORDRECHT</p>
    </div>
    <div id="telefoonnnumer">
        <img src="{{ Vite::asset('resources/assets/phone.png') }}">
        <p>+316 30 985 409 SERVICENUMMER</p>
        <p>+3118 28 202 18 KANTOOR </p>
        <p> BEREIKBAAR VAN 09:00-18:00</p>
    </div>
    <div id="tijd">
        <img src="{{ Vite::asset('resources/assets/clock.png') }}">
        <p>MA T/M VRIJ, 09:00 - 23:00</p>
        <p>TELEFONISCH BEREIKBAAR</p>
        <p>VOOR ABONNEMENTHOUDERS</p>
    </div>
</footer>

</body>
</html>