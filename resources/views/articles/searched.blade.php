<x-main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">
                    Risultati per la ricerca {{ $query }}
                </h1>
            </div>
        </div>
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-lg-3  col-md-6">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Nessun Articolo Corrispondente alla ricerca
                    </h3>
                    <p>prova a cambiare i parametri di ricerca</p>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-main>



