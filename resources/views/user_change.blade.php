<x-layout>

    <body>
        <div class="form-container">
            <h2 class="form-title">Accountgegevens aanpassen</h2>
            
            <form class="registration-form" id="registration-form" action="{{ route('Updateaccount', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="phonenumber">Telefoonnummer</label>
                    <input type="text" id="phonenumber" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}" required>
                    @error('phonenumber')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div>
                    <label for="adress">Adres</label>
                    <input type="text"  id="adress" name="adress" value="{{ old('adress', $user->adress) }}" required>
                    @error('adress')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Updaten</button>
            </form>
        </div>
</body>

    </html>
    </x-layout>