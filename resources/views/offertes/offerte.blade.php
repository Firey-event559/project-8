<x-layout>
    <main class="main-content">
        <div class="form-container">
            
           
            <form class="registration-form" action="{{ url('offerte') }}" method="post">
                <h2 class="reparatie-h2"> Reparatie Aanvragen</h2>
                <div class="container-offerte">
                @csrf
                <label for="naam"></label>
                @error('name')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="name" id="naam" placeholder="naam" value="{{ old('name') }}" required ><br>
                <label for="email"></label>
                @error('email')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="email" name="email" id="email" placeholder="email" value="{{ old('email') }}" required><br>
                <label for="telefoonnummer"></label>
                @error('phonenumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Telefoonnummer" value="{{ old('phonenumber') }}"  required><br>
                <label for="serienummer"></label>
                @error('serialnumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="serialnumber" id="serienummer" placeholder="serienummer" value="{{ old('serialnumber') }}"  required><br>

                <label for="details"></label>
                @error('details')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" details" name="details" id="details" placeholder="details" value="{{ old('details') }}"  required></input><br>

                
                
                <button class="offerte_button" type="submit" name="aanvragen">Aanvragen</button>
            </div>
            </div>
            
        </form>
        <div class="offerte_img">
        <img src="{{ asset('images/laptop_reparatie.jpg') }}" height="300px" width="340px" alt="Laptop reparatie image"><br>
        </div>
       
    </main>

</x-layout>