<x-main>
<div class="container-fluid">
    <div class='row'>
        <div class="col-3">
            <div class="rounded shadow bg-body-secondary m-3">
                <h1>
                    Revisor Dashboard
                </h1>
            </div>
        </div>
    </div>
</div>


@if( $article_to_check)
<div class="row justify-content-center pt-5">
<div class="col-md-8">
 <div class="row justify-content-center">

    @for ($i=0; $i<6; $i++)

      <div class="col-6 col-md-4 mb-4 text-center">
        <img src="immagini-progetto/prodotto1.webp" class="img-fluid rounded shadow" alt="immaginesegna">

      </div>

    @endfor

 </div>
</div>
</div>


<div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
    <div>
        <h1>{{$article_to_check->title}}</h1>
        <h3>Autore: {{$article_to_check->user->name}}</h3>
        <h4>{{$article_to_check->price}}£</h4>
        <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
        <p class="h6"> {{$article_to_check->description}}</p>
    </div>

    <div class="d-flex pb-4 justify-cointent-around">
      <form action="" method="post">
        @csrf
        <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
      </form>

      <form action="" method="post">
        <button class="btn btn-danger py-2 px-5 fw-bold">Accetta</button>
      </form>
    </div>
</div>
@else 
<div class="row justify-content-center align-items-center height-custom text-center">
    
    <div class="col-12">
        <h1 class="fst-italic display-4">
            Nessun articolo da revisionare
        </h1>
        <a href="{{route('homepage')}}" class="mt-5 btn btn-success">Torna alla Homepage</a>
    </div>

</div>
@endif
</div>

</x-main>