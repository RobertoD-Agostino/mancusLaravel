<x-layout>

  @if(session('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

      <!-- FORM -->
    <div class="container">
      <form class="d-flex justify-content-center contact-form" method="POST" name="emailContact" action="{{ Route('emailSubmit') }}" id="contact-form" enctype="multipart/form-data">
        @csrf
        <div class="row formRow justify-content-center">

          <div class="col-12 col-sm-3 colForm">
            <!-- nome - cognome -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.nome')}}</label>
              <input type="text" class="form-control  @error('nome') is-invalid @enderror" id="nome" name="nome">
              @error('nome') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>

            <!-- email -->
            <div class= "col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.email')}}</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" name="email">
              @error('email') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>

            <!-- età -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.età')}}</label>

              <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Questo è un messaggio di aiuto o informazioni aggiuntive per il campo.">
                <i class="fas fa-info-circle"></i>
            </span>

              <input type="number" class="form-control  @error('age') is-invalid @enderror" id="age" name="age">
              @error('age') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>


            <!-- allergie -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.allergie')}}</label>

              <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Hai qualche malattia o infezione cronica? Fai uso regolare di medicinali? Hai qualche allergia?">
                <i class="fas fa-info-circle"></i>
              </span>

              <input type="text" class="form-control" id="allergie" name="allergie">
            </div>
            
            <!-- Box descrizione idea -->
            <span>
              <p class="titoli mb-1 mt-2">{{__('ui.idea')}}             <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Descrivi la tua idea includendo ogni elemento che per te e’ importante che venga incluso nel design, una descrizione del look che ti aspetti (molto scuro, molto dettagliato, piu’ grezzo etc)">
                <i class="fas fa-info-circle"></i>
            </span></p>
            </span>
            <div>            
              <textarea class="form-control @error('textArea') is-invalid @enderror" id="textArea" name="textArea" ></textarea>
              
              @error('textArea') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>

            <!-- Campo immaggini corpo -->
            <span>
              <p class="titoli mb-1 mt-3">{{__('ui.primaImg')}}             <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Questo è un messaggio di aiuto o informazioni aggiuntive per il campo.">
                <i class="fas fa-info-circle"></i>
            </span></p>
            </span>
            <div class="input-group mt-1">
              <input type="file" class="form-control  @error('primaImg') is-invalid @enderror" id="inputImg1" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="primaImg">
              @error('primaImg') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>   
            
            <!-- Campo immaggini idea -->
            <span>
              <p class="titoli mb-1 mt-3">{{__('ui.secondaImg')}}             <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Questo è un messaggio di aiuto o informazioni aggiuntive per il campo.">
                <i class="fas fa-info-circle"></i>
            </span></p>
            </span>
            <div class="input-group mt-1">
              <input type="file" class="form-control  @error('secondaImg') is-invalid @enderror" id="inputImg2" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="secondaImg" >       
              @error('secondaImg') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div> 

            <!-- budget -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.budget')}}</label>
              <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Questo è un messaggio di aiuto o informazioni aggiuntive per il campo.">
                <i class="fas fa-info-circle"></i>
            </span>
              <input type="number" class="form-control @error('budget') is-invalid @enderror" id="budget" name="budget">
              @error('budget') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>

            <!-- città -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.città')}}</label>
              <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Questo è un messaggio di aiuto o informazioni aggiuntive per il campo.">
                <i class="fas fa-info-circle"></i>
            </span>
              <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" >
              @error('city') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>

            <!-- appuntamento -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.data')}}</label>
              <span class="icon-info" data-toggle="tooltip" data-placement="top" title="Questo è un messaggio di aiuto o informazioni aggiuntive per il campo.">
                <i class="fas fa-info-circle"></i>
            </span>
              <input type="text" class="form-control  @error('appointment') is-invalid @enderror" id="appuntamento" name="appointment">
              @error('appointment') 
                <div class="text-danger">{{ $message }}</div>                
              @enderror
            </div>

            <div class="col-12 text-center mt-4">
              <button type="submit" class="submit" value="Send message" name="send">
                <span class="box">
                  {{__('ui.invia')}}
                </span>
              </button>
            </div>

          </div>
        </div>
      </form>
    </div>


</x-layout>