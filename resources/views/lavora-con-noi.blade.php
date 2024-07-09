<x-main>
    <form class="p-5 border rounded" action="{{ route('lavora-con-noi') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="email">
        </div>

        @error('email')
        <span>{{ $message }}</span>
        @enderror



        <button type="submit" class="btn btn-dark">Invia richiesta</button>
        
    </form>
</x-main>
