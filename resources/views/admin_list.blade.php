<x-layout>


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
                @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
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
                        <td>{{ optional($orderItem->product)->Productnumber }}</td>
                        <td>{{ $orderItem->quantity }}</td> 
                        <td>{{ optional($orderItem->order->user)->name }}</td> 
                        <td>{{ optional($orderItem->order->user)->adress }}</td>
                        <td>{{ optional($orderItem->order)->delivery_options }}</td>
                        <td>{{ optional($orderItem->order->user)->phonenumber }}</td> 

                        <form action="{{ route('shipping', $orderItem->order) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="order_id" value="{{ $orderItem->order_id }}">
                            <td><input type="submit" class="btn btn-primary" value="bestelling voltooid"></td>
                        </form>
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div>

    </body>

    
</x-layout>