<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Add Administrator</p>
    <hr/>
    
    @if (session('success'))
    <div class='alert alert-success mt-5' role='alert'>
        {{ session('success') }}
    </div>
    @endif

    <div class='tablets'>
    <small class='mb-5'>Enter information about new admin.</small>

    <img id="previewImage" src="#" alt="Image Preview"  style="display: none; max-width: 100%; width:200px; margin-top:10px;"/>
    <form action='/addAdmin' method="POST" class="mb-3 mt-3">
        @csrf
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Firstname</label>
            <input type="text" name='firstname' class="form-control" id="exampleFormControlInput1" placeholder="Firstname of admin">
            @error('firstname')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Lastname</label>
            <input type="text" name='lastname' class="form-control" id="exampleFormControlInput1" placeholder="Lastname of admin">
            @error('lastname')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" name='email' class="form-control" id="exampleFormControlInput1" placeholder="Email of admin">
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

        <button type='submit' class='btn' style='background-color:rgb(21, 43, 99); color:white;' >Save Admin</button>
    </form></div>
    </div>


</x-layout>