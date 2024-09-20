<x-layout>
    <body class="login_body">
<main class="main-content">
    <div class="form-container">
       
        <form class="registration-form" id="registration-form" action="login" method="post">
            <h2 class="form-title">Registreren</h2>
        @csrf
        <label for="name"></label>
        <input type="text" class="" name="email" id="email" placeholder="naam" value="{{ old('email') }}" required><br>
        @error('email')
        <span style="color: red;">{{$message}}</span> @enderror
        <label for="phonenumber"></label>
            <input type="password" class="" name="password" id="password" placeholder="Telefoon" value="{{ old('password') }}" required><br>
            @error('password')
            <span style="color: red;">{{$message}}</span><br> @enderror
            <label for="email"></label>
        <input type="text" class="" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required><br>
        @error('email')
        <span style="color: red;">{{$message}}</span> @enderror
        <label for="password"></label>
        <input type="password" class="" name="password" id="password" placeholder="adres" value="{{ old('password') }}" required><br>
            @error('password')
            <span style="color: red;">{{$message}}</span><br> @enderror
            <label for="email"></label>
            <input type="password" class="" name="password" id="password" placeholder="Wachtwoord" value="{{ old('password') }}" required><br>
            @error('password')
            <span style="color: red;">{{$message}}</span><br> @enderror
            <label for="email"></label>
            <div class="register_href">
                <p>Heb je al een account?
                <a href="{{url('login')}}">Login!</a></p>
            </div>
            <input type="submit" value="Registreer" class="login_button" id="submit" placeholder="Login">


        </form>
    </div>
   
</main>
</body>
</html>

</x-layout>

