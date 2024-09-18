<x-layout>
    <main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Reparatie verzoek</h1>
            <form id="registration-form" action="{{ url('offerte') }}" method="post">
                @csrf
                <label for="naam">Volledige naam:</label>
                @error('name')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="name" id="naam" placeholder="naam" value="{{ old('name') }}" required ><br>
                <label for="email">Emailadres</label>
                @error('email')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="email" name="email" id="email" placeholder="email" value="{{ old('email') }}" required><br>
                <label for="telefoonnummer">Telefoonnummer:</label>
                @error('phonenumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="phonenumber" id="telefoonnummer" placeholder="Telefoonnummer" value="{{ old('phonenumber') }}"  required><br>
                <label for="serienummer">Serienummer:</label>
                @error('serialnumber')
                <span style="color: red;">{{$message}}</span> @enderror
                <input type="text" name="serialnumber" id="serienummer" placeholder="serienummer" value="{{ old('serialnumber') }}"  required><br>

                <label for="details">Details:</label>
                @error('details')
                <span style="color: red;">{{$message}}</span> @enderror
                <textarea id="details" name="details" rows="4" cols="33" placeholder="details" value="{{ old('details') }}"  required></textarea><br>

                <input type="submit" value="Aanvragen" name="aanvragen">
            </form>

        </div>
    </main>

</x-layout>