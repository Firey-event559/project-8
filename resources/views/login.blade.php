<x-layout>
    <body class="login_body">
<main class="main-content">
    <div class="form-container">
        <h2 class="form-title">Login</h2>
        <form id="registration-form" action="login" method="post">
        @csrf
        <label for="email"></label>
        <input type="text" class="" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required><br>
        @error('email')
        <span style="color: red;">{{$message}}</span> @enderror
        <label for="password"></label>
            <input type="password" class="" name="password" id="password" placeholder="Wachtwoord" value="{{ old('password') }}" required><br>
            @error('password')
            <span style="color: red;">{{$message}}</span><br> @enderror
            <input type="submit" class="" id="submit">
        </form>
    </div>
</main>
</body>
</html>

</x-layout>

