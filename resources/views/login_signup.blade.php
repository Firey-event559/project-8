<x-layout>
<div class="container">
    <div class="login-signup">
        <h1>Het lijkt erop dat jij niet ingelogd is</h1>
        <button onclick="window.location.href='{{ url('/login') }}'">Log In</button>
        <button onclick="window.location.href='{{ url('/signup') }}'">Sign Up</button>
    </div>
</x-layout>


