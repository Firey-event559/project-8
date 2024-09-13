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
            <h2>Producten bewerken</h2>
                

        </div>

    </body>

    </html>
</x-layout>