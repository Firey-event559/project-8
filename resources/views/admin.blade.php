<x-layout>

   @auth
    <p>Ingelogd als: {{ Auth::user()->email; }}</p>
    @endauth    


</x-layout>