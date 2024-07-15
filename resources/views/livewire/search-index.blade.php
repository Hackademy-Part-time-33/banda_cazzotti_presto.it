<main>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <h1 class="display-2  text-center my-5">
                    {{ $query ? "Risultati per \"" . $query . "\"" : 'Ricerca senza testo' }}
                    {{ $price ? ' e prezzo minore di ' . $price . '€' : '' }}
                </h1>
            </div>{{--  --}}
        </div>
        <div class="row d-flex">
            {{-- <div class="col-12 col-md-3 "></div> --}}
            <div class="col-12 col-md-3">
                {{-- <form wire:submit='search'> --}}
                <div id="filtri_search">

                    <span class="mx-4" style="width:30%">Articoli visualizzati: <select
                            class="d-inline form-select form-select-sm" wire:model.live='paginateNumber'
                            style="width:30%">
                            <option value="5">5</option>
                            <option selected value="10">10</option>
                            <option selected value="15">15</option>
                        </select>
                    </span>
                    <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Categorie
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        @forelse ($categories as $category)
                                            <div class="form-check">
                                                <input class="form-check-input" wire:click="resetpage" type="checkbox"
                                                    id="{{ $category->name }}" wire:model.live='categoriesChecked'
                                                    name="categories[]" value="{{ $category->id }}">
                                                <label class="form-check-label" wire:click="resetpage"
                                                    for="{{ $category->name }}">{{ $category->name }}</label>
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Prezzo
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <input id="inputPrice" wire:model.live='price'class="w-100" type="range"
                                        value="1000" min="0" max="{{ $priceMax }}">
                                    <div class="d-flex justify-content-between ">
                                        <p class="me-1">0</p>
                                        <strong class="text me-auto"
                                            style="margin-left: {{ ($price * 80) / $priceMax }}%">{{ $price }}</strong>
                                        <p class="ms-1">{{ $priceMax }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Ricerca testuale
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <input id="inputWord" wire:model.live='query' class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <button class="btn btn-secondary m-4" type="submit" >Applica filtri</button>
    <button class="btn btn-secondary m-4 ms-2" id="clearButton" >CLEAR FILTERS</button> --}}
                    {{-- </form> --}}
                </div>
            </div>

            <div id="cardWrapper" class="col-12 col-md-9 ">

                <div class="d-flex justify-content-center h3">
                    <select class="d-inline form-select form-select-sm mt-3" wire:model.live='priceOrTitle'
                        style="width:35%">
                        <option value="">Ordinamento:</option>
                        <option value="title">titolo</option>
                        <option selected value="price">prezzo</option>
                        <option selected value="category_id">Categoria</option>
                    </select>
                    <span class="mt-3 ms-2" wire:click="order()">
                        @if ($Direction == 'asc')
                            ↑
                        @else
                            ↓
                        @endif
                    </span>

                    {{-- <p wire:click="orderPrice()">Prezzo @if ($priceDirection == 'asc')
        ↑@else
        ↓
        @endif</p>
        <p wire:click="orderTitle()">Titolo @if ($titleDirection == 'asc')
            ↑@else
            ↓
            @endif</p> --}}
                </div>
                <div class="d-flex justify-content-evenly flex-wrap">
                    <!-- card prodotti creati con JS  -->
                    @forelse ($articles as $article)
                        <div class="mx-auto mx-md-3 mt-4">
                            <x-card :article="$article" :width=18 />
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
                <div class="d-flex justify-content-center">
                    @if ($canLoadMore)
                        <div>
                            {{-- {{ $articles->links() }} --}}
                            <button class="btn btn-secondary" wire:click="loadMore">Mostra più articoli</button>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>


</main>
