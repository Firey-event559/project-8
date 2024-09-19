<x-layout>


   
<h1 class="Product_webshop_tekst">Producten</h1>
@foreach ($products as $product)

    <div class="Product_webshop">
    <img src="{{ $product->Image }}" class="Image_product" alt="foto product"> 
     <h5 class="product_title">{{ $product->Name }}</h5>
        <p class="product_price">€ {{ $product->Price }}</p>
     </div>


   @endforeach






</x-loyout>