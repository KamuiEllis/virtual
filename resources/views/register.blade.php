<x-logLayout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center">Register</h2>
                    </div>
                    <div class="card-body">
                        <form action='/register' method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label class='mb-2' for="username">Firstname:</label>
                                <input required type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your firstname">
                                @error('firstname')
                                    <small class='' style='color:red;'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label class='mb-2' for="username">Lastname:</label>
                                <input required type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your lastname">
                                @error('lastname')
                                    <small class='' style='color:red;'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label class='mb-2' for="username">Email:</label>
                                <input required type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                @error('email')
                                    <small class='' style='color:red;'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label class='mb-2'  for="password">Password:</label>
                                <input required type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                @error('password')
                                    <small class='' style='color:red;'>{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class='mb-2'  for="password">Confirm Password:</label>
                                <input required type="password" name='password_confirmation'  class="form-control" id="password" placeholder="Confrim password">
                                
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-logLayout>