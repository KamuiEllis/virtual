<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Edit Product</p>
    <hr/>
    
    @if (session('success'))
    <div class='alert alert-success mt-5' role='alert'>
        {{ session('success') }}
    </div>
    @endif
    <br/>
    <div class='tablets'>
      <small class='mb-5'>Enter information about a product you want to add to your inventory.</small></br/>

    <img id="previewImage" src="/storage/products/{{$product->image}}" alt="Image Preview"  style=" max-width: 100%; width:200px; margin-top:10px;"/>
    <form action='/products/{{$product->id}}' method="POST" class="mb-3 mt-3" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Image of Product</label>
            <input type="file" id="imageInput"  accept="image/*" name='image' class="form-control" id="exampleFormControlInput1" >
            @error('image')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Sku #</label>
            <input type="text" name='sku' value='{{$product->sku}}' class="form-control" id="exampleFormControlInput1" placeholder="Identification #">
            @error('sku')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" name='name' value='{{$product->name}}' class="form-control" id="exampleFormControlInput1" placeholder="Enter name of item">
        @error('name')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
    <div class='mb-3'>   
      <label for="exampleFormControlInput1" class="form-label">Brand</label>
      <input type="text" name='brand' value='{{$product->brand}}' class="form-control" id="exampleFormControlInput1" placeholder="Panasonic, Samsung, etc">
      @error('brand')
                      <small class='' style='color:red;'>{{$message}}</small>
                  @enderror
  </div>

  <div class='mb-3'>   
    <label for="exampleFormControlInput1" class="form-label">Part #</label>
    <input type="text" name='partNumber' value='{{$product->partNumber}}' class="form-control" id="exampleFormControlInput1" placeholder="Panasonic, Samsung, etc">
    @error('partNumber')
                    <small class='' style='color:red;'>{{$message}}</small>
                @enderror
</div>

  <div class='mb-3'>   
    <label for="exampleFormControlInput1" class="form-label">Unboxing Link</label>
    <input type="text" name='unboxing' value='{{$product->unboxing}}' class="form-control" id="exampleFormControlInput1" placeholder="Panasonic, Samsung, etc">
    @error('unboxing')
                    <small class='' style='color:red;'>{{$message}}</small>
                @enderror
  </div>
  <div class='mb-3'>
      <label for="exampleFormControlInput1" class="form-label">Type: {{$product->type}}</label>
      <select class="form-control" value='{{$product->type}}' name='type'>
          <option selected>{{$product->type}}</option>
          <option value="physical">Physical</option>
          <option value="digital">Digital</option>
          <option value="service">Service</option>
      </select>
  </div>

  <div class='mb-3'>
    <label for="exampleFormControlInput1" class="form-label">Category</label>
    <select required class="form-control" name='productType'>
        <option selected>Select Type</option>
        <option value="APPLE ELECTRONICS">APPLE ELECTRONICS</option>
        <option value="Consumer & Enterprise">Consumer & Enterprise</option>
        <option value="Audio & Video">Audio & Video</option>
        <option value="Furniture">Furniture</option>
        <option value="Computer Accessories">Computer Accessories</option>
        <option value="Computer Peripherals">Computer Peripherals</option>
        <option value="Carrying Cases">Carrying Cases</option>
        <option value="Cell Phones">Cell Phones</option>
        <option value="Carrying Cases">Carrying Cases</option>
        <option value="Enterprise Hardware">Enterprise Hardware</option>
        <option value="Computer Parts">Computer Parts</option>
        <option value="Network Cabling Solutions">Network Cabling Solutions</option>
        <option value="UPS">UPS</option>
        <option value="CCTV & Access Control Systems">CCTV & Access Control Systems</option>
        <option value="Cash Registers & Point of Sale Solutions">CCTV & Access Control Systems</option>
        <option value="Drones">Drones</option>
        <option value="Network Services">Network Services</option>
        <option value="Software">Software</option>
        <option value="Wifi Rentals">Wifi Rentals</option>
    </select>
    @error('productType')
                    <small class='' style='color:red;'>{{$message}}</small>
                @enderror
</div>

  <div class='mb-3'>
    <label for="exampleFormControlInput1" class="form-label">Sub Category</label>
    <select required class="form-control" name='subcategory'>
        <option selected>Select Type</option>
        <option value="Computer">Computer</option>
        <option value="Tablets">Tablets</option>
        <option value="Accessories">Accessories</option>
        <option value="Adapters">Adapters</option>
        <option value="Furniture">Furniture</option>
        <option value="Moniters">Moniters</option>
        <option value="Phones">Phones</option>
        <option value="Speakers">Speakers</option>
        <option value="Laptops">Laptops</option>
        <option value="Desktops">Desktops</option>
        <option value="Access Points">Access Points</option>
        <option value="Routers">Routers</option>
        <option value="Network Switches">Network Switches</option>
        <option value="Printers">Printers</option>
        <option value="Ink">Ink</option>
        <option value="Accessories">Accessories</option>
        <option value="Head Phones">Head Phones</option>
        <option value="Batteries and Chargers">Batteries and Chargers</option>
        <option value="Tablet Accessories">Tablet Accessories</option>
        <option value="Misc">Misc</option>
        <option value="Activity Trackers">Activity Trackers</option>
        <option value="Mouse">Mouse</option>
        <option value="Note Books">Note Books</option>
        <option value="All in One">All in One</option>
        <option value="Phone">Phone</option>
    </select>
    @error('productType')
                    <small class='' style='color:red;'>{{$message}}</small>
                @enderror
</div>
  <div class='mb-3'>   
    <label for="exampleFormControlInput1" class="form-label">Available Colors <small>Separate colors using a comma</small> </label>

    <input type="text" name='colors' value='{{$product->colors}}' class="form-control" id="exampleFormControlInput1" placeholder="Purple,Black">
    @error('colors')
                    <small class='' style='color:red;'>{{$message}}</small>
                @enderror
</div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Short Description</label>
        <input type="text" name='shortDescription' value='{{$product->shortDescription}}'  class="form-control" id="exampleFormControlInput1" placeholder="A short summary of the product">
        @error('shortDescription')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Long Description</label>
        <textarea class="form-control" name='description' value='' id="exampleFormControlTextarea1" placeholder="A detailed description of the product" rows="3">{{$product->description}}</textarea>
        @error('description')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
      <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
        <input type="number" name='quantity' value='{{$product->quantity}}'  class="form-control" id="exampleFormControlInput1" placeholder="Number of products in stock">
        @error('quantity')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
      <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Weight</label>
        <input type="number" name='weight' value='{{$product->weight}}' class="form-control" id="exampleFormControlInput1" placeholder="Weight of item">
        @error('weight')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>

      <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Cost</label>
        <input type="number" name='cost' value="{{$product->cost}}" class="form-control" id="exampleFormControlInput1" placeholder="Price of item">
        @error('cost')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>

      <button type='submit' class='btn ' style='background-color:rgb(21, 43, 99); color:white;'>Save Product</button>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
      </button>
    </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting {{$product->name}} from inventory.</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this item?
            </div>
            <form action='/products/{{$product->id}}' method='POST' class="modal-footer" >
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