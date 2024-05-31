<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Registreren</h1>
            <form id="registration-form" action="signup" method="post">
                @csrf
                <label for="naam">Naam:</label>
                <input type="text" name="name" id="naam" placeholder="naam" required><br>
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Telefoonnummer" required><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required><br>
                <label for="adres">Adres:</label>
                <input type="text" name="adress" id="adres" placeholder="Adres" required><br>
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required><br>

                <input type="submit" value="Registreren" name="Register">
            </form>
        </div>
    </main>
</x-layout>