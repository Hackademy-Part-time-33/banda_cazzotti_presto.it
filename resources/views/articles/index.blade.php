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
                    
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->price }}</td>
                    <td>{{ $article->category_id }}</td>
                    <td>{{ $article->created_at }}</td>
                    
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>
</x-main>