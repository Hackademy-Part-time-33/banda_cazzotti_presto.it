<x-main>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="dispaly-1">
                @if ( auth()->user()->id == $user->id)
                I tuoi articoli</h1>
                    @else
                    Articoli di {{ $user->name }}</h1>
                @endif
                
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center  py-5">
            @forelse($articles as $article)
                <div class="p-3">
                    <x-card :article="$article" />

                </div>
            @empty
            @if ( auth()->user()->id == $user->id)
                <div class="col-12 text-center">
                    <h2>Non sono stati ancora caricati dei prodotti.</h2>
                    @auth
                        <a href="{{ route('articles.create') }}">Crea nuovo articolo</a>
                    @endauth
                </div>
                @else
                <div class="col-12 text-center">
                    <h2>l'utente non ha ancora caricato dei prodotti.</h2>
                   
                </div>
           @endif
               
              
            @endforelse
        </div>
    </div>
</x-main>
