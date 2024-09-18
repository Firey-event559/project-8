<x-layout>


   
<h1 class="Product_webshop_tekst">Producten </h1>
@foreach ($products as $product)

    <div class="Product_webshop">
    <img src="{{ $product->Image }}" class="Image" alt="foto product" style="width: 100px; height: 100px;"> 
     <h5 class="card-title">{{ $product->Name }}</h5>
        <p class="card-text">€ {{ $product->Price }}</p>
     </div>


   @endforeach






</x-loyout>