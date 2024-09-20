<x-layout>



    <h1 class="Product_webshop_tekst">Producten</h1>


    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('added') }}
    </div>


    @endif
    @foreach ($products as $product)



    <div class="Product_webshop">
        <div class="Product_info">
            <img src="{{ $product->Image }}" class="Image_product" alt="foto product">
            <div class="Product_details">
                <h5 class="product_name">{{ $product->Name }}</h5>
                <p class="product_price">€ {{ $product->Price }}</p>
                <input class="winkelmand" type="submit" value="In winkelwagen">
            </div>
        </div>
    </div>


    @endforeach








</x-layout>