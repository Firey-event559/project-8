<x-layout>

<div class="sidebar">
    <a href="{{ url('/admin') }}">Producten toevoegen</a>
    <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
    <a href="{{ url('/admin_change') }}">Producten bewerken</a>
    <a href="{{ url('/admin_list') }}">Bestellingen</a>
    <a href="{{ url('/admin_it-nieuws') }}">IT Nieuws</a>
    <a href="{{ url('/admin_it-nieuws-verwijder') }}">IT Nieuws verwijderen</a>
</div>



<div class="content-container2">
@if(session('success'))
        <div class=" alert alert-success message2" role="alert">
            {{ session('success') }}
    </div> @endif
    @foreach($it_nieuws as $it_nieuw)
        <div class="card2">
            <div class="card-body">
                <img src="{{ $it_nieuw->Image }}" class="product-image" alt="Product Image">
                <h5 class="card-title">{{ $it_nieuw->title }}</h5>
                <p class="card-description limited-lines">{{ $it_nieuw->description }}</p>
                <a href="{{ url('/admin_it-nieuws-verwijder', $it_nieuw->id) }}" class="btn btn-danger">verwijderen</a>
            </div>
        </div>
    @endforeach
</div>


</x-layout>