<x-main>
    
    <h1>Prima di poter accedere alla tua area cliente devi prima verificare la tua mail!</h1>
    <form action="{{route('verification.send')}}" method="POST">
        @csrf
        <div class="w-100 my-5 d-flex text-center">
            <button type="submit" class="btn btn-outline-success">Rimandami la mail di conferma</button>
        </div>
        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
        @endif
    </form>
</x-main>