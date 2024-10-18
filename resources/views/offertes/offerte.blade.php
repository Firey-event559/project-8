<x-layout>

    <main class="d-flex">
    @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="form-container">
            
        <div class="offerte_img">
        <img src="{{ Vite::asset('resources/assets/repair.png') }}"  alt="Laptop reparatie image"><br>
        </div>
            <form class="registration-form" action="{{ url('offerte') }}" method="post">
                <h2 class="reparatie-h2"> Reparatie Aanvragen</h2>
                <div class="container-offerte">
                @csrf
                <label for="naam"></label>
                @error('name')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="name" id="naam" placeholder="Naam" value="{{ old('name') }}" required ><br>
                <label for="email"></label>
                @error('email')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required><br>
                <label for="telefoonnummer"></label>
                @error('phonenumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Telefoonnummer" value="{{ old('phonenumber') }}"  required><br>
                <label for="serienummer"></label>
                @error('serialnumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="productnumber" id="productnumber"placeholder="Productnummer" value="{{ old('productnumber') }}"  required><br>
                <label for="details"></label>
                @error('details')
                <span style="color: red;">{{$message}}</span> @enderror
                <textarea  class="details" name="details" id="details" rows="4" placeholder=" Beschrijf zo goed mogelijk">{{ old('details') }}</textarea><br>


                
                
                <button class="offerte_button" type="submit" name="aanvragen">Aanvragen</button>
            </div>
            </div>
            
        </form>
        
    </main>

</x-layout>