<x-layout>


    

<section class="py-5 product_">
    <div class="container px-4 px-lg-2 my-5 product_view">
        <div class="row gx-4 gx-lg-4 align-items-center">
            <!-- Image Column -->
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0 img-fluid" 
                     src="{{ asset($product->Image) }}" 
                     alt="{{ $product->Name }}" 
                     style="width: 1300px; height: auto;">
            </div>
            <!-- Product Details Column -->
            <div class="col-md-6">
                <div class="small mb-1">{{ $product->Productnumber }}</div>
                <h1 class="display-6 fw-bolder">{{ $product->Name }}</h1>
                <div class="fs-5 mb-5">
                    <p>Prijs: €<span>{{ number_format($product->Price, 2) }}</span></p>
                </div>
                <p class="lead">{{ $product->Description }}</p>
                <div class="d-flex">
                    <form action="{{ url('add_to_cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1" min="1" required>
                        <input class="winkelmand btn btn-primary" type="submit" value="In winkelwagen">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>






</x-layout>