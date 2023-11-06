<x-logLayout>
    <div class="register-container">
        <div>
            <h2 class="mb-5 heading">Register</h2>
        </div>
        <div>
            
            <form action='/register' method="POST">  
                @if (session()->has('error'))
            <p class='lead' style='color:rgb(222, 117, 117)18, 151, 151)'>
                {{ session('error') }}
            </p>
        @endif
                @csrf
                <div class="input-container">
                    <input class="input-field" type="text" placeholder="Firstname" name="firstname">
                    @error('firstname')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="input-container">
                    <input class="input-field" type="text" placeholder="Lastname" name="lastname">
                    @error('lastname')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="input-container">
                    <input class="input-field" type="text" placeholder="Email" name="email">
                    @error('email')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="input-container">
                    <input class="input-field" type="password" placeholder="Password" name="password">
                   
                  </div>
                  @error('password')
                  <small class='' style='color:red;'>{{$message}}</small>
              @enderror
                  <div class="input-container">
                    <input class="input-field" type="password" placeholder="Confirm Password" name="password_confirmation">

                  </div>
                <button type="submit" style='height:10%;' class="buttons">Register</button>
            </form>
        </div>

</div>
</x-logLayout>