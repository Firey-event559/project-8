<x-layout>
    <body class="admin_list">
        <div class="sidebar">
            <a href="{{ url('/admin') }}">Producten toevoegen</a>
            <a href="{{ url('/admin_offerte') }}">Offertes inzien</a>
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

            <form action="insert_it_nieuws" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title input -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline" data-mdb-input-init>
                            <label for="form6Example1" class="form-label">Titel</label>
                            <input type="text" id="form6Example1" class="form-control" name="title"
                                   value="{{ old('title') }}" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Description input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                    <label for="form6Example7" class="form-label">Beschrijving</label>
                    <textarea name="description" class="form-control" id="form6Example7" rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image input -->
                <div class="form-group mb-4">
                    <input type="file" name="Image" class="form-control-file" id="exampleFormControlFile1"
                           value="{{ old('Image') }}">
                    @error('Image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit button -->
                <button type="submit" name="it_nieuws_insert" class="btn btn-danger btn-block mb-4-submit_producten">
                    IT Nieuws aanmaken
                </button>
            </form>
        </div>
    </body>
</x-layout>
