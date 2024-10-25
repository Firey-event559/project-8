<x-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body class="admin_change">
        <div class="sidebar">
            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
            <a href="{{ url('/admin_change') }}">Producten bewerken</a>
            <a href="{{ url('/admin_list') }}">Bestellingen</a>
            <a href="{{ url('/admin_it-nieuws') }}">IT Nieuws</a>
            <a href="{{ url('/admin_it-nieuws-verwijder') }}">IT Nieuws verwijderen</a>
        </div>

        <div class="content9">
            <h2>Producten bewerken</h2>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @foreach($products as $product)
                <div class="Product_webshop">
                    <div class="Product_info">
                        <img src="{{ asset($product->Image) }}" class="Image_product" alt="foto product">
                        <div class="Product_details">
                            <h5 class="product_name">{{ $product->Name }}</h5>
                            <p class="product_price">€ {{ $product->Price }}</p>
                            <p>{{ $product->Description }}</p>

                            <form action="{{ route('edit', $product->id) }}" method="GET">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input class="edit btn btn-primary" type="submit" value="Bewerken">
                            </form>

                            <form id="delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}"
                                method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input class="winkelmand btn btn-danger" type="submit" value="Verwijderen">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</x-layout>
