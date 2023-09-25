<x-layout>

  <!-- HEADER -->
  {{-- SEZIONE SWIPER --}}

<!-- Slider main container -->
<div class="swiper" >
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->

    <div class="swiper-slide swiperImg1 d-flex justify-content-center align-items-center"><img src="./img/quarta_foto.jpg" alt="" class="imgSwiper"></div>

    <div class="swiper-slide swiperImg2 d-flex justify-content-center align-items-center"><img src="./img/secondaImgTattoo.jpg" alt="" class="imgSwiper"></div>

    <div class="swiper-slide swiperImg3 d-flex justify-content-center align-items-center"><img src="./img/terza_foto.jpg" alt="" class="imgSwiper"></div>

  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>


</div>


    {{-- <header class="container-fluid">

      <div class="row header align-items-center">
        <div class="col-md-12 text-center h-50">
          <h1 class="titoloHeader">Mancus Tattoo</h1>
        </div>
      </div>
    </header> --}}

    {{-- <div class="swiper-slide swiperImg1 d-flex justify-content-center align-items-center"><img src="https://picsum.photos/200/300" alt="" class="imgSwiper"></div>

    <div class="swiper-slide swiperImg2 d-flex justify-content-center align-items-center"><img src="https://picsum.photos/200/301" alt="" class="imgSwiper"></div>

    <div class="swiper-slide swiperImg3 d-flex justify-content-center align-items-center"><img src="https://picsum.photos/200/302" alt="" class="imgSwiper"></div> --}}
  
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
</x-layout>