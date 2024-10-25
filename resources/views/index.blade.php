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
      <h2>De beste hulp voor u</h2>
      <h4 class="subheading">Ook nu hulp aan huis.</h4>
      <p class="text-muted">
        Als u een storing met uw computer of laptop heeft belt u gewoon ons service nummer: 0630985409 ( bereikbaar van
        9:00 tot 23:00 uur) of ons kantoor 0182-820218 en wij lossen het probleem direct voor u op, meestal de zelfde
        dag.

        Morgens brengen en aan het eind van de dag weer klaar!

        Onze deskundige computerhulp monteurs staan dagelijks voor u klaar van 09.00 uur tot 23.00 uur!</p>
    </div>
    <div class="col-md-6 ">
      <img src="{{ Vite::asset('resources/assets/winkel.jpg') }}" width="450px" height="300px">
    </div>
  </div>




  <div class="container mt-5 mb-5">

    <div class="row g-2">
      <div class="col-md-4">
        <div class="card p-3 text-center px-4">

          <div class="user-image">

            <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80">

          </div>

          <div class="user-content">

            <h5 class="mb-0">Bruce Hardy</h5>
            <span>Software Developer</span>
            <p>Ik ben ontzettend tevreden met de service van Uneed-it! Mijn wasmachine ging stuk en binnen 24 uur was er
              al een monteur langsgekomen om het probleem op te lossen. De technicus was vriendelijk, professioneel en
              wist precies wat er moest gebeuren. Binnen een uur werkte mijn wasmachine weer als nieuw.</p>

          </div>

          <div class="ratings">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

          </div>

        </div>
      </div>

      <div class="col-md-4">

        <div class="card p-3 text-center px-4">

          <div class="user-image">

            <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" width="80">

          </div>

          <div class="user-content">

            <h5 class="mb-0">Mark Smith</h5>
            <span>Web Developer</span>
            <p>Geweldige ervaring met Uneed-it. Ik had problemen met mijn laptop en dacht dat ik een nieuwe moest kopen,
              maar dankzij hun snelle diagnose en reparatie werkte mijn laptop weer perfect. Het team was transparant
              over de kosten, en er waren geen verborgen verrassingen. De reparatie duurde iets langer dan verwacht.</p>

          </div>

          <div class="ratings">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card p-3 text-center px-4">

          <div class="user-image">

            <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">

          </div>

          <div class="user-content">

            <h5 class="mb-0">Veera Duncan</h5>
            <span>Software Architect</span>
            <p>Topservice! Mijn koelkast was kapot en Uneed-it heeft hem binnen no-time gerepareerd. De communicatie was
              uitstekend, ze hielden me goed op de hoogte van elke stap in het proces. De prijs was heel redelijk in
              vergelijking met andere bedrijven die ik had geraadpleegd. Ik zou ze zonder twijfel aan iedereen
              aanbevelen!</p>

          </div>

          <div class="ratings">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="container text-center p-5 sectioncolor text-light ">
    <div class="col-md-6 how-img">
      <img src="{{ Vite::asset('resources/assets/engineer.jpg') }}" width="450px" height="300px">
    </div>
    <div class="col-md-6 text-start">
      <h2>Over ons</h2>
      <h4 class="subheading">10 jaar ervaring in de reparatiediensten.</h4>
      <p>Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it
        streven
        we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid
        en excellentie in kwaliteit. Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie
        opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu
        gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons
        team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat
        te herstellen.</p>
    </div>
  </div>
  
  <div class="text-center p-5">
    @foreach($it_nieuws as $it_nieuw)
    <div class="card2">
      <div class="card-body">
      <img src="{{ $it_nieuw->Image }}" class="product-image" alt="Product Image">
      <h5 class="card-title">{{ $it_nieuw->title }}</h5>
      <p class="card-description limited-lines">{{ $it_nieuw->description }}</p>
      </div>
    </div>
  @endforeach
  </div>




</x-layout>