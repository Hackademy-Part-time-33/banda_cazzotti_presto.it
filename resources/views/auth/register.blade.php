<x-main>
  <form class="p-5 border rounded" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email </label>
      <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" aria-describedby="emailHelp">
    </div>
    
    @error('email')
    <span>{{ $message }}</span>
    @enderror
    
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="name" class="form-control" value="{{ old('name') }}" name="name" id="name">
    </div>
    
    @error('name')
    <span>{{ $message }}</span>
    @enderror
    
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="passsword">
    </div>
    
    @error('password')
    <span>{{ $message }}</span>
    @enderror
    
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Ripeti Password</label>
      <input type="password" class="form-control" name="password_confirmation" id="passsword_confirmation">
    </div>
    
    <button type="submit" class="btn btn-dark">Registrati</button>
    <a href="{{ route('login') }}" class="btn btn-outline-dark">Gia registrato? Accedi?</a>
    <a href="{{ route('google.redirect') }}" class="btn custom-button"><img src="{{asset('immagini-progetto/googleicon.png')}}" style="width: 1.5rem" alt="Logo di Google"> Accedi Con Google </a>
  </form>
</x-main>