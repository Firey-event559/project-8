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
        <title>Document</title>
        <style>
            body {
                margin: 0;
                padding-top: 100px;
                font-family: "Lato", sans-serif;
            }

            .sidebar {
                color: white;
                margin: 0;
                padding: 0;
                width: 200px;
                background-color: #212529;
                position: fixed;
                height: 100%;
                overflow: auto;
            }

            .sidebar a {
                display: block;
                color: white;
                padding: 16px;
                text-decoration: none;
            }

            .sidebar a.active {
                background-color: #212529;
                color: white;
            }

            .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
            }

            div.content1 {
                margin-left: 200px;
                padding: 1px 16px;
                height: 1000px;
            }

            @media screen and (max-width: 700px) {
                .sidebar {
                    width: 100%;
                    height: auto;
                    position: relative;
                }

                .sidebar a {
                    float: left;
                }

                div.content {
                    margin-left: 0;
                }
            }

            @media screen and (max-width: 400px) {
                .sidebar a {
                    text-align: center;
                    float: none;
                }
            }
        </style>
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
            <form>
                <!-- 2 column grid layout with text inputs for the Productnaam en Productnummer -->
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Productnaam</label>
                            <input type="text" id="form6Example1" class="form-control" />

                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Productnummer</label>
                            <input type="text" id="form6Example2" class="form-control" />

                        </div>
                    </div>
                </div>

                <!-- Number input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example6">Voorraad</label>
                    <input type="number" id="form6Example6" class="form-control" />

                </div>

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Beschrijving</label>
                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>

                </div>

                <!-- Photo input -->
                <div class=" mb-4">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>


                </div>

                <!-- Submit button -->
                <button data-mdb-ripple-init type="button" class="btn btn-danger btn-block mb-4">Product toevoegen</button>
            </form>

        </div>

    </body>

    </html>
</x-layout>