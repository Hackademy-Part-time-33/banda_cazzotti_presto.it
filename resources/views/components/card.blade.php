<div class="card mx-auto shadow text-center mb-4">
    <img src="{{asset("LogoLegoNavbar.png")}}" alt="Immagine {{$article->title}}" >
    <div class="card-body">
        <h4 class="card-title">{{$article->title}}</h4>
        <h6 class="card-subtitle ">{{$article->price}} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="" class="btn btn-primary">Dettaglio</a>
            <a href="" class="btn btn-outline-info">Categoria</a>
        </div>
    </div>
</div>