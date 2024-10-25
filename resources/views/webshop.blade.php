<x-layout>
<main id="mainhome" style="padding-bottom: 0px;">
    <div class="p-5 bg-image" style="
     background-image: url('{{ Vite::asset('resources/assets/laptopbanner.avif') }}');
    ">
      <div class="mask row p-5">
        <div class="d-flex align-items-stretch h-10 p-5">
          <div class="text-white">
          <img src="{{ Vite::asset('resources/assets/copilot.avif') }}">
            <h4 class="mb-3">Een nieuw tijdperk van AI-aangedreven innovatie begint</h4>
            <a data-mdb-ripple-init class="btn btn-light btn-lg" role="button" href="#section1">Koop nu</a>
          </div>
        </div>
      </div>
    </div>
  </main><br>
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


        <div class="Product_webshop" id="section1">
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