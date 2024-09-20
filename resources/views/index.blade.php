<x-layout>

  <main id="mainhome">
    <div class="p-5 bg-image" style="
     background-image: url('{{ Vite::asset('resources/assets/banner.png') }}');
      
      
    ">
      <div class="mask row p-5">
        <div class="d-flex align-items-stretch h-10 p-5">
          <div class="text-white">
            <h1 class="mb-3">Welkom bij Uneed-IT</h1>
            <h4 class="mb-3">Opzoek naar een laptop? bezoek onze webshop!</h4>
            <a data-mdb-ripple-init class="btn btn-light btn-lg" href="{{ url('/webshop') }}" role="button">Webshop</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="container text-center p-5">
    
    <div class="col-md-6 text-start">
      <h4>De beste hulp voor u.</h4>
      <h4 class="subheading">skibidi gyatt rizzler</h4>
      <p class="text-muted">Send and receive files. Deliver digital assets in a secure environment.
        Share feedback in real time. Use GetLance Messages to communicate via text, chat, or video.
        Use our mobile app. Many features can be accessed on your mobile phone when on the go.</p>
    </div>
    <div class="col-md-6 ">
      <img src="{{ Vite::asset('resources/assets/winkel.jpg') }}" width="450px" height="300px" >
    </div>
  </div>


  <div class="container text-center p-5">
    <div class="col-md-6 how-img">
      <img src="{{ Vite::asset('resources/assets/engineer.jpg') }}" width="450px" height="300px">
    </div>
    <div class="col-md-6 text-start">
      <h2>Over ons</h2>
      <h4 class="subheading">10 jaar ervaring in de reparatiediensten.</h4>
      <p class="text-muted">Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it streven
          we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid
          en excellentie in kwaliteit. Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie
          opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu
          gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons
          team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat
          te herstellen.</p>
    </div>
  </div>


</x-layout>