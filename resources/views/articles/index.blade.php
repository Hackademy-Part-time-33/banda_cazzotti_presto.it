<x-main>
    <div class="container-fluid">
        <h1>Lista prodotti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Categoria</th>
                    <th>Aggiunto il</th>
                    <th>Azioni</th>              
                </tr>
            </thead>
            <thead>
                
            </thead>
            <tbody>
                @forelse($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->price }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->created_at }}</td>  
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Visualizza</a>
                        {{-- <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifica</a>
                        
                        <!-- Form per l'eliminazione -->
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo prodotto?')">Elimina</button>
                        </form> --}}
                    </td>              
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>
</x-main>