<x-layout>

    <body class="admin_list">

        <div class="sidebar">

            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien </a>
            <a href="{{ url('/admin_change') }}">Producten bewerken</a>
            <a href="{{ url('/admin_list') }}">Bestellingen</a>
            <a href="{{ url('/admin_it-nieuws') }}">IT Nieuws</a>
            <a href="{{ url('/admin_it-nieuws-verwijder') }}">IT Nieuws verwijderen</a>
        </div>

        <div class="content6">
            <h2>IT Nieuws</h2>
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

            <form action="insert_it_nieuws" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form6Example1">Titel</label>
                        <input type="text" id="form6Example1" class="form-control" name="title" value="{{ old('title') }}"
                            required />
                        @error('title')
                        <span style="color: red;">{{$message}}</span> @enderror

                    </div>
                </div>
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Beschrijving</label>
                <textarea name="description" class="form-control" id="form6Example7" rows="4"
                    value="" required>{{ old('description') }}</textarea>
                @error('description')
                <span style="color: red;">{{$message}}</span> @enderror

            </div>

            <div class=" mb-4">
                    <div class="form-group">
                        <input name="Image" type="file" class="form-control-file" id="exampleFormControlFile1"
                            value="{{ old('Image') }}">
                        @error('Image')
                        <span style="color: red;">{{$message}}</span> @enderror
                    </div>
                </div>

            <Input type="submit" name="Product_insert" data-mdb-ripple-init
                    class="btn btn-danger btn-block mb-4-submit_producten" value="IT Nieuws aanmaken">
        </form>
       </div>

        



    </body>

</x-layout>