<x-layout>



    <h1 class="Product_webshop_tekst">Producten</h1>


    @if(session('added'))
    <div class="alert alert-success" role="alert">
        {{ session('added') }}
    </div>

    @endif


    @if(session('error'))
    <div class="alert alert-error" role="alert">
        {{ session('error') }}
    </div>
    @endif
    @foreach ($products as $product)



    <div class="Product_webshop">
        <div class="Product_info">
            <img src="{{ $product->Image }}" class="Image_product" alt="foto product">
            <div class="Product_details">
                <h5 class="product_name">{{ $product->Name }}</h5>
                <p class="product_price">€ {{ $product->Price }}</p>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <input class="winkelmand" type="submit" value="In winkelwagen">
        </form>
            </div>
        </div>
    </div>


    @endforeach








</x-layout>