<x-layout>
<main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Offerte aanvragen</h1>
            <form id="registration-form" action="/" method="post">
                @csrf
                <label for="naam">volledige naam:</label>
                <input type="text" name="name" id="naam" placeholder="naam" required><br>
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Telefoonnummer" required><br>
                <label for="email">Email:</label>
                <input type="text" name="adress" id="adres" placeholder="Adres" required><br>
                <label for="details">vraag/opmerking:</label>
            <textarea id="details" name="details" rows="4" placeholder="srfdfrr"></textarea>
                <input type="submit" value="Registreren" name="Register">
            </form>
        </div>
    </main>

</x-layout>