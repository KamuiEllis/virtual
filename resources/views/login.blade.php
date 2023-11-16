<x-logLayout>
                
                <div class="login-container">
                    <div>
                        <div style='width:100%; text-align:center;'>
                        <img src='{{ asset('/logo.png') }}' class='logo' width='200'/>
                    </div>
                        <h2 class="mb-5 heading" style='color:rgb(21, 43, 99)'>Login</h2>
                    </div>
                    <div>
                        
                        <form action="/login" method='POST'>  
                            @if (session()->has('error'))
                        <p class='lead' style='color:rgb(222, 117, 117)18, 151, 151)'>
                            {{ session('error') }}
                        </p>
                    @endif
                            @csrf
                            <div class="input-container">
                                
                                <input class="input-field" type="text" placeholder="Email" name="email">
                               
                              </div>
                            <div class="input-container">
                       
                                <input type="password" name='password' required class="input-field" id="password"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="buttons">Login</button>
                        </form>
                    </div>
       
        </div>

</x-logLayout>