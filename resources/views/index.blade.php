<x-layout>

<main id="mainhome">
<div
    class="p-5 text-center bg-image"
    style="
     background-image: url('{{ Vite::asset('resources/assets/banner.png') }}');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Heading</h1>
          <h4 class="mb-3">Subheading</h4>
          <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button"
          >Call to action</a
          >
        </div>
      </div>
    </div>
  </div>
</main>
<div class="container overflow-hidden text-center">
  <div class="row gx-5">
    <div class="col">
    @auth
        <p>Ingelogd als: {{ Auth::user()->email }}</p>
    @endauth
     <div class="p-3">Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it streven we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid en excellentie in kwaliteit. Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat te herstellen.</div>
    </div>
    <div class="col">
      <div class="p-3"><img src="{{ Vite::asset('resources/assets/background2.png') }}" width="400px" height="300px"   ></div>
    </div>
  </div>
</div>

</x-layout>

