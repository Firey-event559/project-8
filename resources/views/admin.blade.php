<x-layout>

    @auth
    <p>Ingelogd als: {{ Auth::user()->email; }}</p>
    @endauth


    <h1 class="admin_dashboard_text">Admin Dashboard</h1>

    <div class="button_admin_container">
        <button class="producten_insert">Producten Toevoegen</button>
        <button class="offerte_search">Offertes inzien </button>
        <button class="producten_update">Producten Bewerken</button>
        <button class="producten_list">Producten lijst</button>
    </div>


</x-layout>