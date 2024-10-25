<x-layout>

<div class="sidebar">
    <a href="{{ url('/admin') }}">Producten toevoegen</a>
    <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
    <a href="{{ url('/admin_change') }}">Producten bewerken</a>
    <a href="{{ url('/admin_list') }}">Bestellingen</a>
    <a href="{{ url('/admin_it-nieuws') }}">IT Nieuws</a>
</div>

<div class="content7">
    @foreach($it_nieuws as $it_nieuw)
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <img src="{{ $it_nieuw->Image }}" class="Image_product" alt="foto product" width="300px" height="300px">
                <h5 class="card-title">{{ $it_nieuw->title }}</h5>
                <p class="card-text">{{ $it_nieuw->description }}</p>
                <a href="{{ url('/admin_it-nieuws-verwijder', $it_nieuw->id) }}" class="btn btn-danger">Verwijderen</a>
            </div>
        </div> 
    @endforeach
</div>

</x-layout>
