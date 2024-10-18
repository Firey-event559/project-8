<x-layout>

    <main class="justify-content-center">
        @if(session('success'))
        <div class="alert alert-success" style="width: 1000px; margin-left: 250px;">{{ session('success') }}</div>
        @endif
        <div class="d-flex justify-content-center">

            <div class="offerte_img">
                <img src="{{ Vite::asset('resources/assets/repair.png') }}" alt="Laptop reparatie image"><br>
            </div>
            <form class="" action="{{ url('offerte') }}" method="post">

                <div class="container-offerte">
                    <h2>Reparatie Aanvragen</h2>
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" name="name" id="naam" class="form-control" placeholder="Naam"
                                value="{{ old('name') }}" required>
                            @error('name')
                            <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                value="{{ old('email') }}" required>
                            @error('email')
                            <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Number Input -->
                    <div class="mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" name="phonenumber" id="telefoonnummer" class="form-control"
                                placeholder="Telefoonnummer" value="{{ old('phonenumber') }}" required>
                            @error('phonenumber')
                            <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <!-- product dropdown-->
                    <div class="col-12 mb-4">
                        <div class="input-group">
                            <select data-mdb-select-init class="select form-control" id="productSelect"
                                name="productselect" required>
                                <option value="{{ old('productselect') }}">Select Preference</option>
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('productSelect'))
                        <div class="text-danger mt-2">
                            {{ $errors->first('productSelect') }}
                        </div>
                        @endif
                    </div>


               



                <!-- Additional Information -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" name="details" id="details" rows="4"
                        placeholder="Beschrijf zo goed mogelijk">{{ old('details') }}</textarea>
                    @error('details')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button class="btn btn-danger btn-block mb-4" type="submit" name="aanvragen">Aanvragen</button>
                </div>
        </div>
        </div>
        </form>

        </div>



    </main>

</x-layout>