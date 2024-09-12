<x-main>
    <div class="container-fluid">
        <h1 class="text-center mt-4">Lista prodotti</h1>
       {{--  <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{__('ui.name')}}</th>
                    <th>{{__('ui.description')}}</th>
                    <th>{{__('ui.price')}}</th>
                    <th>{{__('ui.category')}}</th>
                    <th>{{__('ui.added_the')}}</th>
                    <th>{{__('ui.author')}}</th>
                    
                    @auth

                        @if (auth()->user()->is_revisor)

                        <th>{{__('ui.approval')}}</th>
                        

                        
                        @endif

                        @endauth     

                        <th>{{__('ui.action')}}</th>   

                </tr>
            </thead>
            <thead>
                
            </thead>
            <tbody class="">
            </tbody>
        </table> --}}

      {{--   <div class="container"></div>
        <div class="row"></div> --}}
        <div class="d-flex flex-row justify-content-center  flex-wrap">
                @forelse($articles as $article)
               <div class="m-5">
                <x-showcard :article="$article" :width=300 :height=450/>
            </div>
             {{--    <tr>
                    <td >{{ Str::ucfirst($article->title) }}</td>
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
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">{{__('ui.view')}}</a>
                        </td> --}}
                        
                        
                        
                        
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
                               
                {{-- </tr> --}}
                @empty
                @endforelse
            </div>
        {{--     </tbody>
        </table> --}}
        {{ $articles->links() }}
    </div>
</x-main>
