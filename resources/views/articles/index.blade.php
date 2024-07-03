<x-main>
<div class="container-fluid">
    <h1>Lista prodotti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Prezzo</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($articles as $article)
            <tr>
                <td>{{ $article->name }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->price }}</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</x-main>