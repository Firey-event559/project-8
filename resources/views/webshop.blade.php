<x-layout>


   @foreach ($products as $product)

    <div class="Product_webshop">
     <img src="{{ $product->image }}" class="card-img-top" alt="foto product" with="100px" height="100px" >
     <div class="">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">{{ $product->price }}</p>
     </div>


   @endforeach






</x-loyout>