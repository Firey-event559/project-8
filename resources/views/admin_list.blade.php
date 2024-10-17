<x-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite (['resources/css/app.css'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
    </head>

    <body class="admin_list">

        <div class="sidebar">

            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
            <a href="{{ url('/admin_change') }}">Producten bewerken</a>
            <a href="{{ url('/admin_list') }}">Bestellingen</a>
        </div>

        <div class="content1">
            <h2>Bestellingen</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Productnaam</th>
                        <th scope="col">Productnummer</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Bezorgopties</th>
                        <th scope="col">Telefoonnummer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderItems as $orderItem)
                    <tr>
                        <th scope="row">{{ $orderItem->order_id }}</th>
                        <td>{{ optional($orderItem->product)->Name }}</td> 
                        <td>{{ optional($orderItem->product)->Productnumber }}</td> <!-- Product number from OrderItem -->
                        <td>{{ $orderItem->quantity }}</td> <!-- Accessing amount from Order -->
                        <td>{{ optional($orderItem->order->user)->name }}</td> <!-- User name from Order -->
                        <td>{{ optional($orderItem->order->user)->adress }}</td>
                        <td>{{ optional($orderItem->order)->delivery_options }}</td>
                        <!-- Delivery options from Order -->
                        <td>{{ optional($orderItem->order->user)->phonenumber }}</td> <!-- User phone number -->
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div>

    </body>

    </html>
</x-layout>