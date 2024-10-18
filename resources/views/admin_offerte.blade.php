<x-layout>

    <body class="admin_offerte">

        <div class="sidebar">

            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
            <a href="{{ url('/admin_change') }}">Producten bewerken</a>
            <a href="{{ url('/admin_list') }}">Bestellingen</a>
        </div>

        <div class="content4">
            <h2>Offertes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefoonnummer</th>
                        <th scope="col">Productnummer</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($offertes as $offerte)
                        <tr>
                            <th scope="row">{{ $offerte->id }}</th>
                            <td>{{ $offerte->name }}</td>
                            <td>{{ $offerte->email }}</td>
                            <td>{{ $offerte->phonenumber }}</td>
                            <td>{{ $offerte->productnumber }}</td>
                            <td>{{ $offerte->details }}</td>
                            <td>
                                <form id="delete-{{ $offerte->id }}" action="{{ route('offerte.destroy', $offerte->id) }}"
                                    method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-primary" type="submit" value="Remove">
                                </form>
                            </td>
                        </tr>
                    @endforeach

            </table>

        </div>

    </body>

    </html>
</x-layout>