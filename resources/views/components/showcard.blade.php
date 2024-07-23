<div>
    <div class="card" style="width: {{$width ?? 20}}; ">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
          <h5 class="card-title">{{ Str::ucfirst($article->title) }}</h5>
          <div class="d-flex align-items-center flex-row me-1">
          <label for="price" class="">Prezzo:</label>
          <h6 class="  text-body-secondary card-subtitle mt-0" id="price">{{ "€".Str::replace('.', ',', sprintf("%.2f", $article->price))}}</h6>
          </div>
          <p class="card-text">{{ Str::limit($article->description,20) }}</p>

          <label for="approved">Approvato :</label>
          <h6 class="card-subtitle" id="approved">{{ $article->created_at->locale(app()->getLocale())->translatedFormat('d F Y, H:i') }}</h6>

          <div class="d-flex justify-content-between align-items-center mt-3">
          <label for="autor" class="me-1"> Autore:</label>
          <h6 class="card-subtitle mt-0" id="autor">{{Str::ucfirst($article->user->name)}}</h6>
          </div>

          <label for="category" class="float-start mt-2">Categoria</label>
          <a href="{{route('byCategory', ['category'=>$article->category])}}" class="card-link" id="category">{{ $article->category->name }}</a>
             </div>
         
          @auth

          @if (auth()->user()->is_revisor)
         
          <div>
             <h3> {{$article->is_accepted ? 'Articolo accettato' : 'Articolo rifiutato'}}</h3>
              <form action="{{ route('cancella-operazione', $article->id) }}" method="POST" >
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn btn-success">Annulla</button>
              </form>
            </div>
          
          @endif

          @endauth
          <a href="{{ route('articles.show', $article->id) }}" class="card-button btn btn-primary">{{__('ui.view')}}</a>
        
        </div>
      </div>
</div>