<div>
    <div class="card border {{$article->is_accepted ? 'border-warning'  : 'border-danger'}} border-4" style="width: {{$width ?? 20}}px; height:{{$height ?? 20}}px">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
          <h5 class="card-title text-danger fw-bold">{{ Str::ucfirst(Str::limit($article->title,20)) }}</h5>
          <div class="d-flex align-items-center flex-row me-1">
          <label for="price" class="text-danger fw-bold">Prezzo:</label>
          <h6 class="  text-body-secondary card-subtitle mt-0" id="price">{{ "€".Str::replace('.', ',', sprintf("%.2f", $article->price))}}</h6>
          </div>
          <p class="card-text mt-1">{{ Str::limit($article->description,20) }}</p>

          <label for="approved" class="text-danger fw-bold">Approvato :</label>
          <h6 class="card-subtitle" id="approved">{{ $article->created_at->locale(app()->getLocale())->translatedFormat('d F Y, H:i') }}</h6>

          <div class="d-flex justify-content-between align-items-center mt-3">
          <label for="autor" class="me-1 text-danger fw-bold"> Autore:</label>
          <h6 class="card-subtitle mt-0" id="autor">{{Str::ucfirst($article->user->name)}}</h6>
          </div>

         
          <a href="{{route('byCategory', ['category'=>$article->category])}}" class="card-link text-decoration-none custom-button mt-4" id="category">{{ $article->category->name }}</a>
             
         
          @auth

          @if (auth()->user()->is_revisor)
         <div class="position-absolute bottom-0 mb-4">
            <hr>
          <div class="d-flex justify-content-between align-items-center ">
             <h3 class="fs-5 me-3 mt-1 {{$article->is_accepted ?  : 'text-danger'}}"> {{$article->is_accepted ? 'Articolo accettato' : 'Articolo rifiutato'}}</h3>
              <form action="{{ route('cancella-operazione', $article->id) }}" method="POST" >
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn custom-button">Annulla</button>
              </form>
            </div>
            <hr>
          </div>

          @endif

          @endauth
          <a href="{{ route('articles.show', $article->id) }}" class="card-link text-decoration-none custom-button mt-2" id="category">{{__('ui.view')}}</a>
        
        </div>
    </div>
      </div>
</div>