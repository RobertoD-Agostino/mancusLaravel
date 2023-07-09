<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="/img/LogoNavbar.png" class="logoSito" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           
    <div class="hamburger-menu">
      <div class="bar bar-top"></div>
      <div class="bar bar-mid"></div>
      <div class="bar bar-bottom"></div>
    </div>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link textWhite " aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link textWhite" href="{{ route('gallery') }}">{{ __('ui.galleriaNav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link textWhite" href="{{ route('form') }}">{{ __('ui.prenotazioniNav') }}</a>
          </li>

          {{-- <li class="nav-item dropdown" id="language-select">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Seleziona lingua
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#" value="it" >Italiano</a></li>
              <li><a class="dropdown-item" href="#" value="en" >English</a></li>
            </ul>
            
          </li> --}}

          <li class="nav-item dropdown" id="language-select">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('ui.selettoreNav') }}
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li>
                <form action="{{ route('set-language', 'it') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item" style="background-color: transparent; border:none;" lang="it">
                    {{ __('ui.italiano') }}
                  </button>
                </form>
              </li>
              <li>
                <form action="{{ route('set-language', 'en') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item" style="background-color: transparent; border:none;" lang="en">
                    {{ __('ui.inglese') }}
                  </button>
                </form>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>  
  </nav> 