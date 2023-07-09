<x-layout>

    <!-- HEADER -->
  
    <header class="container-fluid">

      <div class="row header align-items-center">
        <div class="col-md-12 text-center h-50">
          <h1 class="titoloHeader">Mancus Tattoo</h1>
        </div>
      </div>

    </header>
  
    <!-- SECTION SOTTO HEADER -->
    <div class="container">
      <div class="row sottoHeader mt-5">
        <div class="col-12 col-md-6 divWelcome">
            <h2 class="textWhite mt-5">Welcome to Mancus Tattoo</h2>
        </div>
        <div class="vertical"></div>
        <div class="col-12 col-md-6 textWhite">
          <p class="mt-3 ms-2">{{__('ui.presentazione')}}</p>
        </div>
      </div>
    </div>

<!-- ACCORDION -->
        <div class="container accordion-container">

          <div class="row accordion-row">
            <div class="mt-5 d-flex justify-content-center">
              <h1 class="h1Accordion textWhite">Info e FAQ</h1>
            </div>
        <div class="col-12 col-accordion">
          <div class="tab my-2">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1" data-target="content1"></label>
            <h2>01</h2>
            <h3>Ciao</h3>
            <div class="content" id="content1">
              <p lang="it" id="p1">Ciao mi chiamo Roberto</p>
              <!-- <p lang="en" id="p1">Hello my name is Roberto</p> -->
            </div>
          </div>
          <div class="tab my-3">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2"></label>
            <h2>02</h2>
            <h3>BAu</h3>
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque facere voluptates dolores ea qui ipsum possimus harum minima consectetur commodi quidem minus numquam aliquid libero at quam, hic magnam! Ex?</p>
            </div>
          </div>
          <div class="tab my-3">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3"></label>
            <h2>03</h2>
            <h3>KEk</h3>
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque facere voluptates dolores ea qui ipsum possimus harum minima consectetur commodi quidem minus numquam aliquid libero at quam, hic magnam! Ex?</p>
            </div>
          </div>
        
        
      </div>

    </div>
  </div>

  

</x-layout>