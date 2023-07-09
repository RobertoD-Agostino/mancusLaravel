<x-layout>

      <!-- FORM -->
    <div class="container">
      <form class="d-flex justify-content-center contact-form" method="POST" name="emailContact" action="{{ Route('emailSubmit') }}" id="contact-form">
        @csrf
        <div class="row formRow justify-content-center">

          <div class="col-12 col-sm-3 colForm">
            <!-- nome - cognome -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.nome')}}</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <!-- email -->
            <div class= "col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.email')}}</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            </div>

            <!-- età -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.età')}}</label>
              <input type="text" class="form-control" id="age" name="age">
            </div>

            <!-- allergie -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.allergie')}}</label>
              <input type="text" class="form-control" id="allergie" name="allergie">
            </div>
            
            <!-- Box descrizione idea -->
            <span>
              <p class="titoli mb-1 mt-2">{{__('ui.idea')}}</p>
            </span>
            <div>
              <textarea class="form-control" id="textArea" name="textArea"></textarea>
            </div>

            <!-- Campo immaggini corpo -->
            <span>
              <p class="titoli mb-1 mt-3">{{__('ui.primaImg')}}</p>
            </span>
            <div class="input-group mt-1">
              <input type="file" class="form-control" id="inputImg1" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="primaImg">
            </div>   
            
            <!-- Campo immaggini idea -->
            <span>
              <p class="titoli mb-1 mt-3">{{__('ui.secondaImg')}}</p>
            </span>
            <div class="input-group mt-1">
              <input type="file" class="form-control" id="inputImg2" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="secondaImg" > 
            </div> 

            <!-- budget -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.budget')}}</label>
              <input type="text" class="form-control" id="budget" name="budget">
            </div>

            <!-- città -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.città')}}</label>
              <input type="text" class="form-control" id="city" name="city">
            </div>

            <!-- appuntamento -->
            <div class="col-12">
              <label for="exampleFormControlInput1" class="form-label titoli mb-1 mt-3">{{__('ui.data')}}</label>
              <input type="text" class="form-control" id="appuntamento" name="appointment">
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