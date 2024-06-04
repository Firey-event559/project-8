<x-layout>
    <body class="login_body">
<main class="main-content">
    <div class="form-container">
        <h2 class="form-title">Login</h2>
        <form id="registration-form" action="login" method="post">
        @csrf
            <input type="text" class="" name="email" id="email" placeholder="Email"><br>
            <input type="password" class="" name="password" id="password" placeholder="Password"><br>
            <input type="submit" class="" id="submit">
        </form>
    </div>
</main>
</body>
</html>

</x-layout>

