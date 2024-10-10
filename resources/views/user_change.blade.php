<x-layout>
    <body class="login_body">
        <main class="main-content">
        <div class="form-container">
            <form class="registration-form" id="registration-form" action="{{ route('Updateaccount', $user->id) }}" method="POST">
            <h2 class="form-title">Accountgegevens aanpassen</h2>
                @csrf
                @method('PUT')
                
                
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" placeholder="Naam" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                

                
                    <label for="phonenumber">Telefoonnummer</label>
                    <input type="text" id="phonenumber" name="phonenumber" placeholder="Telefoonnummer" value="{{ old('phonenumber', $user->phonenumber) }}" required>
                    @error('phonenumber')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                


                
                    <label for="adress">Adres</label>
                    <input type="text"  id="adress" name="adress"  placeholder="Adres" value="{{ old('adress', $user->adress) }}" required>
                    @error('adress')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                

                <button type="submit" class="btn btn-primary">Updaten</button>
            </form>
        </div>
        <main>
</body>

    </html>
    </x-layout>