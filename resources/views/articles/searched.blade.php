<head>
    @vite(['resources/js/searched.js'])
    <head>

<x-main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2 text-center my-5">
                    {{ $query? "Risultati per \"".$query."\"" :"Ricerca senza testo" }}
                    {{$price? " e prezzo minore di ".$price : "" }}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3">
                <form action="{{route('articles.search')}}" method="GET">

               
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          Categorie
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="form-check">
                                @forelse ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $category->name }}" name="categories[]"
                                        value="{{ $category->id }}">
                                    <label class="form-check-label" for="{{ $category->name }}">{{ $category->name }}</label>
                                </div>
                                @empty
                                Nessuna categoria
                            @endforelse
                      
                               
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          Prezzo
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <input id="inputPrice" class="w-100" name="price" type="range" value="1000" min="0" max="1000">
                            <p id="priceNumber"></p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          Ricerca testuale
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <input id="inputWord" type="search" value="{{ $query?? "" }}" name="query" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                <button class="btn btn-secondary m-4" type="submit" >Applica filtri</button>
                <button class="btn btn-secondary m-4 ms-2" id="clearButton" >CLEAR FILTERS</button>
            </form>
            </div>
            <div id="cardWrapper" class="col-12 col-md-9 d-flex justify-content-evenly flex-wrap">
                <!-- card prodotti creati con JS  -->
                  @forelse ($articles as $article)
                <div class="col-12 col-lg-3  col-md-6">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12 ">
                    <h3 class="text-center">
                        Nessun Articolo Corrispondente alla ricerca
                    </h3>
                    <p class="text-center">prova a cambiare i parametri di ricerca</p>
                </div>
            @endforelse
            </div>    
          
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{-- {{ $articles->links() }} --}}
        </div>
    </div>
</x-main>



