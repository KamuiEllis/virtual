<x-layout>
    <div class='p-4'>
        <p class='lead' style='font-size:25px;'>Profile</p>
        <hr/>
        <small class='mb-5'>Edit your profile information.</small>

        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif

        <form action='/admins/profile/{{auth()->user()->id}}' method="POST" class="mb-3 mt-3" enctype="multipart/form-data">
            @method('PUT')
            @csrf
    
            <div class='mb-3'>   
                <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                <input type="text" name='firstname' value="{{auth()->user()->firstname}}" class="form-control" id="exampleFormControlInput1" placeholder="Firstname of admin">
                @error('firstname')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
            </div>
            <div class='mb-3'>   
                <label for="exampleFormControlInput1" class="form-label">Lastname</label>
                <input type="text" name='lastname' value="{{auth()->user()->lastname}}" class="form-control" id="exampleFormControlInput1" placeholder="Lastname of admin">
                @error('lastname')
                                <small class='' style='color:red;'>{{$message}}</small>
                            @enderror
            </div>
    
          <div class='mb-3'>   
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="text" name='email' value="{{auth()->user()->email}}" class="form-control" id="exampleFormControlInput1" placeholder="Email of admin">
              @error('email')
                              <small class='' style='color:red;'>{{$message}}</small>
                          @enderror
          </div>

          <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name='password' class="form-control" id="exampleFormControlInput1" placeholder="Enter password">
            @error('password')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
            <input type="password" name='password_confirmation' class="form-control" id="exampleFormControlInput1" placeholder="Confirm password">
        </div>
    
            <button type='submit' class='btn btn-danger'>Save</button>
        </form>
    </div>
</x-layout>