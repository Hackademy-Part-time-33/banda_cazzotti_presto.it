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

    @for ($i=1; $i<6; $i++)

      <div class="col-6 col-md-4 mb-4 text-center">
        <img src="{{asset("immagini-progetto/prodotto$i.webp")}}" class="img-fluid rounded shadow" alt="immaginesegna">

      </div>

    @endfor

 </div>
</div>
</div>

<div class="row d-flex justify-content-center">
<div class="col-md-4 ps-4 d-flex flex-column justify-content-between mt-5 ">
    <div>
        <h1>{{$article_to_check->title}}</h1>
        <h3>Autore: {{$article_to_check->user->name}}</h3>
        <h4>{{$article_to_check->price}}£</h4>
        <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
        <p class="h6"> {{$article_to_check->description}}</p>
    </div>

    <div class="d-flex pb-4 justify-cointent-around ">
      <form action="{{route('reject',['article'=>$article_to_check])}}" method="post">
        @csrf
        @method('PATCH')
        <button class="btn btn-danger py-2 px-5 fw-bold m-2">Rifiuta</button>
      </form>

      <form action="{{route('accept',['article'=>$article_to_check])}}" method="post">
        @csrf
        @method('PATCH')
        <button class="btn btn-danger py-2 px-5 fw-bold m-2">Accetta</button>
      </form>
    </div>
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