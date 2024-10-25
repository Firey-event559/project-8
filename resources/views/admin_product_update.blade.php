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

        <div class="content3">
            <h2>Producten Bewerken</h2>
            <form action="{{ route('update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Productnaam</label>
                            <input type="text" id="form6Example1" class="form-control" name="Name"
                                value="{{ $product->Name }}" required />
                            @error('Name')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example2">Productnummer</label>
                            <input type="text" id="form6Example2" class="form-control" name="Productnumber"
                                value="{{ $product->Productnumber }}" required />
                            @error('Productnumber')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Number input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example6">Voorraad</label>
                    <input type="number" id="form6Example6" class="form-control" name="Stock"
                        value="{{ $product->Stock }}" required />
                    @error('Stock')
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example6">Prijs</label>
                    <input type="number" id="form6Example6" class="form-control" name="Price"
                        value="{{ $product->Price }}" required />
                    @error('Price')
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Beschrijving</label>
                    <textarea name="Description" class="form-control" id="form6Example7" rows="4"
                        required>{{ old('Description', $product->Description) }}</textarea>
                    @error('Description')
                        <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="form-group">
                        <input name="Image" type="file" class="form-control-file" id="exampleFormControlFile1"
                            value="{{ $product->Image }}">
                        @error('Image')
                            <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <!-- Submit button -->
                <input type="submit" name="Product_insert" data-mdb-ripple-init class="btn btn-danger btn-block mb-4"
                    value="Product Bewerken">
            </form>

        </div>
    </body>
</x-layout>