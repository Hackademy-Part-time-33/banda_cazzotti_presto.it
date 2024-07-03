<x-main>
    <form class="p-5 border rounded" action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="email">
       
      </div>
      
      @error('email')
      <span>{{ $message }}</span>
      @enderror
      
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="passsword" placeholder="password">
      </div>
      
      @error('password')
      <span>{{ $message }}</span>
      @enderror
      
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    

  </x-main>