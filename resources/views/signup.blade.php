<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Registreren</h1>
            <form id="registration-form" action="signup" method="post">
                @csrf
                <label for="naam">Naam:</label>
                @error('name')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="name" id="naam" placeholder="naam" value="{{ old('name') }}"  required><br>
                <label for="telefoonnummer">Telefoonnummer:</label>
                @error('phonenumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Telefoonnummer" value="{{ old('phonenumber') }}"  required><br>
                <label for="email">Email:</label>
                @error('email')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"  required><br>
                <label for="adres">Adres:</label>
                @error('adress')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="adress" id="adres" placeholder="Adres" value="{{ old('adress') }}"  required><br>
                <label for="password">Wachtwoord:</label>
                @error('password')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="password" name="password" id="password" placeholder="Wachtwoord" value="{{ old('password') }}"  required><br>

                <input type="submit" value="Registreren" name="Register">
            </form>
        </div>
    </main>
</x-layout>