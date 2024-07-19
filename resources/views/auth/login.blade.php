<x-main>

    <form class="p-5 border rounded" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">* Email </label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="email">
            
        </div>
        
        @error('email')
        <span>{{ $message }}</span>
        @enderror
        
        
        <div class="mb-3">
            <label for="password" class="form-label">* Password</label>
            <input type="password" class="form-control" name="password" id="passsword" placeholder="password">
        </div>
        
        @error('password')
        <span>{{ $message }}</span>
        @enderror
        
        
        <button type="submit" class="btn btn-dark">{{__('ui.login')}}</button>
        <a href="{{ route('register') }}" class="btn btn-outline-dark me-1">{{__('ui.not_registered')}}</a>
            <a href="{{ route('google.redirect') }}" class="btn custom-button"><img src="{{asset('immagini-progetto/googleicon.png')}}" style="width: 1.5rem" alt="Logo di Google"> Accedi Con Google </a>

  </form>
  <h6><span class="text-danger">*</span> <u>contrassegna un campo obbligatorio</u></h6>

    </form>
    
                
</x-main>