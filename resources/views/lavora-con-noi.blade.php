<x-main>
    <form class="p-5 border rounded" action="{{ route('become.revisor') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" id="email" aria-describedby="emailHelp" placeholder="email" readonly>
            <div class="my-5">
                <label for="message" class="form-label">Messaggio</label>
                <textarea name="message" class="form-control" cols="30" rows="10" placeholder="inserisci un messaggio..." minlength="10" maxlength="1000"></textarea>
            </div>
        </div>
        
        @error('email')
        <span>{{ $message }}</span>
        @enderror
        
        
        
        <button type="submit" class="btn btn-dark">Invia richiesta</button>
        
    </form>
</x-main>
