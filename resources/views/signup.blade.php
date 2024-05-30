<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Register</h1>
            <form id="registration-form" action="signup" method="post">
                @csrf
                <label for="naam">Name:</label>
                <input type="text" name="name" id="naam" placeholder="Name" required><br>
                <label for="telefoonnummer">Phone Number:</label>
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Phone Number" required><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required><br>
                <label for="adres">Address:</label>
                <input type="text" name="adress" id="adres" placeholder="Address" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" required><br>

                <input type="submit" value="Register" name="Register">
            </form>
        </div>
    </main>
</x-layout>