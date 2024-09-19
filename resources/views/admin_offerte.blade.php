<x-layout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
    </head>



    <body class="admin_offerte">

        <div class="sidebar">

            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
            <a href="{{ url('/admin_change') }}">Producten bewerken</a>
            <a href="{{ url('/admin_list') }}">Bestellingen</a>
        </div>

        <div class="content1">
            <h2>Offertes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefoonnummer</th>
                        <th scope="col">Serienummer</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($offertes as $offerte)
                    <tr>
                        <th scope="row">{{ $offerte->id }}</th>
                        <td>{{ $offerte->name }}</td>
                        <td>{{ $offerte->achternaam }}</td>
                        <td>{{ $offerte->email }}</td>
                        <td>{{ $offerte->phonenumber }}</td>
                        <td>{{ $offerte->serialnumber }}</td>
                        <td>{{ $offerte->details }}</td>
                        <td><input type="submit" value="verwijderen"> </td>
                        <td><input type="submit" value="voltooien"> </td>
                    </tr>
                    @endforeach

            </table>

        </div>

    </body>

    </html>
</x-layout>