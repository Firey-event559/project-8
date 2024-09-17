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
        <title>Document</title>
    </head>



    <body>

        <div class="sidebar">

            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
            <a href="{{ url('/admin_change') }}">Producten bewerken</a>
            <a href="{{ url('/admin_list') }}">Bestellingen</a>
        </div>

        <div class="content1">
            <h2>Producten toevoegen</h2>
            <form action="Productinsert" method="post" enctype="multipart/form-data">
                @csrf
                <!-- 2 column grid layout with text inputs for the Productnaam en Productnummer -->
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Productnaam</label>
                            <input type="text" id="form6Example1" class="form-control" name="Name" required />

                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Productnummer</label>
                            <input type="text" id="form6Example2" class="form-control" name="Productnumber" required />

                        </div>
                    </div>
                </div>

                <!-- Number input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example6">Voorraad</label>
                    <input type="number" id="form6Example6" class="form-control" name="Stock" required />

                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label " for="form6Example6">Prijs</label>
                    <input type="number" id="form6Example6" class="form-control" name="Price" required />

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Beschrijving</label>
                    <textarea name="Description" class="form-control" id="form6Example7" rows="4" required></textarea>

                </div>

                <!-- Photo input -->
                <div class=" mb-4">
                    <div class="form-group">
                        <input name="Image" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>


                </div>

                <!-- Submit button -->
                <Input type="submit" name="Product_insert" data-mdb-ripple-init class="btn btn-danger btn-block mb-4" value="Product toevoegen">
            </form>

        </div>

    </body>

    </html>
</x-layout>