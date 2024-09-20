<x-layout>
    <body class="login_body">
<main class="main-content">
    <div class="form-container">
       
        <form class="registration-form" id="registration-form" action="login" method="post">
            <h2 class="form-title">Login</h2>
        @csrf
        <label for="email"></label>
        <input type="text" class="" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required><br>
        @error('email')
        <span style="color: red;">{{$message}}</span> @enderror
        <label for="password"></label>
            <input type="password" class="" name="password" id="password" placeholder="Wachtwoord" value="{{ old('password') }}" required><br>
            @error('password')
            <span style="color: red;">{{$message}}</span><br> @enderror
            <div class="register_href">
                <p>Heb je geen account?
                <a href="{{url('signup')}}">Registreren</a></p>
            </div>
            <input type="submit" class="login_button" id="submit">


        </form>
    </div>
   
</main>
</body>
</html>

</x-layout>

