<x-main>
    <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email </label>
          <input type="email" class="form-control" name="password" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" name="name" id="name">
          </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="passsword">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="passsword_confirmation">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-main>