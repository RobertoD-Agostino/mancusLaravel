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



    <!-- SECTION SOTTO HEADER -->
    <div class="container">
      <div class="row sottoHeader mt-5">
        <div class="col-12 col-md-6 divWelcome text-center mb-4">
            <h2 class="textWhite mt-5">{{__('ui.Welcome')}}</h2>
            <p class="mt-3 ms-2 textWhite">{{__('ui.presentazione')}}</p>
        </div>
      </div>
    </div>



<!-- GALLERY -->
<div class="wrapper">
    <div class="gallery">
      <div class="image"><span><img src="./img/primaImgTattoo.jpg" alt=""></span></div>
      <div class="image"><span><img src="./img/secondaImgTattoo.jpg" alt=""></span></div>
      <div class="image"><span><img src="./img/terza_foto.jpg" alt=""></span></div>
      <div class="image"><span><img src="./img/quarta_foto.jpg" alt=""></span></div>
      <div class="image"><span><img src="./img/quinta_foto.jpg" alt=""></span></div>
    </div>
  </div>
  <div class="preview-box">
    <div class="details">
      <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
      <div class="slide prev"><i class="fas fa-angle-left"></i></div>
      <div class="slide next"><i class="fas fa-angle-right"></i></div>
      <img src="" alt="">
    </div>
</div>

<div class="shadow"></div>




</x-layout>

