<x-layout>
<img src="{{ Vite::asset('resources/assets/bannercolor.jpg') }}" alt="webshopbanner" width="100%" ><br>
    <h1 class="Product_webshop_tekst">Producten</h1>
    

    @if(session('success'))
        <div class=" alert alert-success message" role="alert">
            {{ session('success') }}
    </div> @endif

    @if(session('error'))
        <div class=" alert alert-danger" role="alert">
            {{ session('error') }}
    </div> @endif

    @foreach ($products as $product)


        <div class="Product_webshop">
            <div class="Product_info">
                <a href="{{ route('products', $product->id) }}"><img src="{{ $product->Image }}" class="Image_product"
                        alt="foto product"></a>
                <div class="Product_details">
                    <h5 class="product_name">{{ $product->Name }}</h5>
                    <p class="product_price">€ {{ $product->Price }}</p>

                    <form action="add_to_cart" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1" min="1" required>
                        <input class="winkelmand" type="submit" value="In winkelwagen">
                    </form>
                    </form>
                </div>
            </div>
        </div>


    @endforeach








</x-layout>