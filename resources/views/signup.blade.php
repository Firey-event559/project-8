<x-layout>
    <body class="login_body">
        <main class="main-content">
            <div class="form-container">
                <form class="registration-form" id="registration-form" action="signup" method="post">
                    <h2 class="form-title">Registreren</h2>
                    @csrf
                    <label for="name"></label>
                    <input type="text"  name="name" id="name" placeholder="naam" value="{{ old('email') }}" required><br>
                    @error('naam')

                    <span style="color: red;">{{$message}}</span> @enderror
                    <label for="phonenumber"></label>
                    <input type="text" name="phonenumber" id="phonenumber" placeholder="Telefoonnummer" value="{{ old('phonenumber') }}" required><br>
                    @error('phonenumber')

                    <span style="color: red;">{{$message}}</span> @enderror
                    <label for="Email"></label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required><br>
                    @error('email')

                    <span style="color: red;">{{$message}}</span> @enderror
                    <label for="adress"></label></label>
                    <input type="text" name="adress" id="email" placeholder="Adress" value="{{ old('adress') }}" required><br>
                    @error('adress')
                    <span style="color: red;">{{$message}}</span> @enderror
                     <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Wachtwoord" value="{{ old('password') }}" required><br>
                    @error('password')

                    
                    <span style="color: red;">{{$message}}</span> @enderror
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