<x-main>
    <div class="container-fluid">
        <h1>Lista prodotti</h1>
        <table class="table table-striped"">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Categoria</th>
                    <th>Aggiunto il</th>
                    <th>Autore</th>
                    
                    @auth

                        @if (auth()->user()->is_revisor)

                        <th>Approvazione</th>
                        

                        
                        @endif

                        @endauth     

                        <th>Azioni</th>   

                </tr>
            </thead>
            <thead>
                
            </thead>
            <tbody>
                @forelse($articles as $article)
                <tr>
                    <td>{{ Str::ucfirst($article->title) }}</td>
                    <td>{{ Str::limit($article->description,20) }}</td>
                    <td>{{ "€".Str::replace('.', ',', sprintf("%.2f", $article->price))}}</td>
                    <td><a href="{{route('byCategory', ['category'=>$article->category])}}">{{ $article->category->name }}</a></td>
                    <td>{{ $article->created_at->locale(app()->getLocale())->translatedFormat('d F Y, H:i') }}</td>  
                    <td>{{Str::ucfirst($article->user->name)}}</td>
                    
                        
                        @auth

                        @if (auth()->user()->is_revisor)
                        <td>
                            {{$article->is_accepted ? 'Articolo accettato' : 'Articolo rifiutato'}}
                        </td>
                        
                        <td>
                            <form action="{{ route('cancella-operazione', $article->id) }}" method="POST" >
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Annulla</button>
                            </form>
                        </td>
                        
                        @endif

                        @endauth
                        
                        
                        
                        
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Visualizza</a>
                        </td>
                        
                        
                        
                        
                        {{--  @if ($article->is_accepted === null)
                        <form action="{{ route('accept', $article->id) }}" method="POST" >
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">Accetta</button>
                        </form>
                        <form action="{{ route('reject', $article->id) }}" method="POST" >
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger">Rifiuta</button>
                        </form>
                        @endif --}}
                        
                        {{-- <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifica</a>
                        
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo prodotto?')">Elimina</button>
                        </form> --}}
                               
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>
</x-main>