<x-main >

    <div class="container my-5">
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input value="{{ old('email') }}" type="email" name="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cognome</label>
                <input type="text" class="form-control" name="lastname" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="message">Testo Mail</label>
                <textarea name="message" type="text" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mt-5 justify-content-center d-flex">
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </div>
        </form>
    </div>

</x-main>
