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
            <h2 class="textWhite mt-5">{{__('ui.Welcome')}}</h2>
        </div>
        <div class="vertical"></div>
        <div class="col-12 col-md-6 textWhite">
          <p class="mt-3 ms-2">{{__('ui.presentazione')}}</p>
        </div>
      </div>
    </div>

  </div>
</div>


{{-- SEZIONE CAROSELLO --}}

<div class="container">
  <div class="row wrapper-carousel">
    <div class="col-12">

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/resources/media/quinta_foto.jpg" class="w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
  </div>
</div>






</x-layout>