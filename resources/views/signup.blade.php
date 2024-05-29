<x-layout>
<main class="main-content">
    <div class="form-container">
        <h1 class="form-title">Registeren</h1>
        <form id="registration-form" action="check.php" method="post">
            <label for="naam">Naam:</label>
            <input type="text" name="naam" id="naam" placeholder="Name" required><br>
            <label for="achternaam">Achternaam:</label>
            <input type="text" name="achternaam" id="achternaam" placeholder="Last Name" required><br>
            <label for="telefoonnummer">telefoonnummer:</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer" placeholder="Phone Number" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <button type="submit">Registeren</button>
        </form>
    </div>
</main>
</x-layout>

