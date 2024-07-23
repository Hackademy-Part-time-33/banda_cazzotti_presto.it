<x-main>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="dispaly-1">Articoli di {{ $user->name }}</h1>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center  py-5">
            @forelse($articles as $article)
                <div class="p-3">
                    <x-card :article="$article" />

                </div>
            @empty
                <div class="col-12 text-center">
                    <h2>Non sono stati ancora caricati dei prodotti.</h2>
                    @auth
                        <a href="{{ route('articles.create') }}">Crea nuovo articolo</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-main>
