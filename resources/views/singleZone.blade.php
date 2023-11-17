<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Edit Zone</p>
    <hr/>
    
    @if (session('success'))
    <div class='alert alert-success mt-5' role='alert'>
        {{ session('success') }}
    </div>
    @endif

    <div class='tablets'>
    <small class='mb-5'>Enter information about zone.</small>

    <img id="previewImage" src="#" alt="Image Preview"  style="display: none; max-width: 100%; width:200px; margin-top:10px;"/>
    <form action='/zones/{{$zone->id}}' method="POST" class="mb-3 mt-3">
        @csrf
        @method('PUT')
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input required type="text" value="{{$zone->address}}" name='address' class="form-control" id="exampleFormControlInput1" placeholder="Area's Address">
            @error('address')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>


        <div class='mb-3'>
            <label for="exampleFormControlInput1" class="form-label">Type of Area </label>
            <select required class="form-control" name='type'>
                <option selected value={{$zone->type}}>{{$zone->type}}</option>
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
            <select required class="form-control"  name='courier'>
                <option value={{$zone->courier}} selected>'{{$zone->courier}}'</option>
                <option value="Tara">Tara</option>
                <option value="Knutsford">Knutsford</option>
                <option value="Delivery">Delivery</option>
                <option value="Zip Mail">Zip Mail</option>
            </select>
            @error('courier')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Parish</label>
            <select required class="form-control"  value={{$zone->parish}} name='parish'>
                <option value={{$zone->parish}} selected>{{$zone->parish}}</option>
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
            <select required class="form-control"  value={{$zone->services}} name='services'>
                <option value={{$zone->services}} selected>{{$zone->services}}</option>
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
            <label for="exampleFormControlInput1"  class="form-label">Price</label>
            <input required type="number" name='price'  value={{$zone->price}} class="form-control" id="exampleFormControlInput1" placeholder="Cost of delivering to that area">
            @error('price')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Cost Per Pound</label>
            <input required type="number" name='perPound'  value={{$zone->perPound}} class="form-control" id="exampleFormControlInput1" placeholder="Cost of delivering to that area">
            @error('perPound')
                            <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
        </div>

        

        

        <button type='submit' class='btn' style='background-color:rgb(21, 43, 99); color:white;' >Save Admin</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Delete
          </button>
    </form></div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting {{$zone->address}} from inventory.</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this item?
            </div>
            <form action='/zones/{{$zone->id}}' method='POST' class="modal-footer" >
                @csrf
                @method('DELETE')
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
          </div>
        </div>
        </div>
      </div>

</x-layout>