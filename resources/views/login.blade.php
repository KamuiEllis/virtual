<x-logLayout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    @if (session()->has('error'))
                        <div class='alert alert-danger'>
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="/login" method='POST'>  
                            @csrf
                            <div class="form-group mb-2">
                                <label class='mb-2' for="username">Email:</label>
                                <input type="text" name='email' required class="form-control" id="username"
                                    placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label class='mb-2' for="password">Password:</label>
                                <input type="password" name='password' required class="form-control" id="password"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-logLayout>