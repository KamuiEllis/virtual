<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Add Zone</p>
    <hr/>
    
    @if (session('success'))
    <div class='alert alert-success mt-5' role='alert'>
        {{ session('success') }}
    </div>
    @endif

    <div class='tablets'>
    <small class='mb-5'>Enter information about new zone.</small>

    <img id="previewImage" src="#" alt="Image Preview"  style="display: none; max-width: 100%; width:200px; margin-top:10px;"/>
    <form action='/addZone' method="POST" class="mb-3 mt-3">
        @csrf
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input required type="text" name='address' class="form-control" id="exampleFormControlInput1" placeholder="Area's Address">
            @error('address')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>


        <div class='mb-3'>
            <label for="exampleFormControlInput1" class="form-label">Type of Area</label>
            <select required class="form-control" name='type'>
                <option selected>Area Type</option>
                <option value="regular">Regular</option>
                <option value="rural">Rural</option>
                <option value="remote">Remote</option>
            </select>
            @error('type')
            <small class='' style='color:red;'>{{$message}}</small>
        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Courier</label>
            <input required type="text" name='courier' class="form-control" id="exampleFormControlInput1" placeholder="Courier">
            @error('courier')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Parish</label>
            <select required class="form-control" name='parish'>
                <option value="">Select Parish</option>
                <option value="clarendon">Clarendon</option>
                <option value="hanover">Hanover</option>
                <option value="kingston">Kingston</option>
                <option value="manchester">Manchester</option>
                <option value="portland">Portland</option>
                <option value="saintAndrew">Saint Andrew</option>
                <option value="saintAnn">Saint Ann</option>
                <option value="saintCatherine">Saint Catherine</option>
                <option value="saintElizabeth">Saint Elizabeth</option>
                <option value="saintJames">Saint James</option>
                <option value="saintMary">Saint Mary</option>
                <option value="saintThomas">Saint Thomas</option>
                <option value="trelawny">Trelawny</option>
                <option value="westmoreland">Westmoreland</option>
            </select>
                
                @error('parish')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Services</label>
            <select required class="form-control" name='services'>
                <option value="">Select Service</option>
                <option value="Door to Door">Door to Door</option>
                <option value="Pick Up">Pick Up</option>
                <option value="Delivery">Delivery</option>
                <option value="Pick Up & Delivery">Pick Up & Delivery</option>
            </select>
                
                @error('services')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input required type="number" name='price' class="form-control" id="exampleFormControlInput1" placeholder="Cost of delivering to that area">
            @error('price')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Cost Per Pound</label>
            <input required type="number" name='perPound' class="form-control" id="exampleFormControlInput1" placeholder="Cost of delivering to that area">
            @error('perPound')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        

        

        <button type='submit' class='btn' style='background-color:rgb(21, 43, 99); color:white;' >Save Admin</button>
    </form></div>
    </div>


</x-layout>