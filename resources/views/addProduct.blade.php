<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Add Product</p>
    <hr/>
    
    @if (session('success'))
    <div class='alert alert-success mt-5' role='alert'>
        {{ session('success') }}
    </div>
    @endif
    <div class='tablets'>
        <small class='mb-5'>Enter information about a product you want to add to your inventory.</small>

    <img id="previewImage" src="#" alt="Image Preview"  style="display: none; max-width: 100%; width:200px; margin-top:10px;"/>
    <form action='/addProduct' method="POST" class="mb-3 mt-3" enctype="multipart/form-data">
        @csrf
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Image of Product</label>
            <input type="file" id="imageInput" accept="image/*" name='image' class="form-control" id="exampleFormControlInput1" >
            @error('image')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Sku #</label>
            <input type="text" name='sku' class="form-control" id="exampleFormControlInput1" placeholder="Identification #">
            @error('sku')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" name='name' class="form-control" id="exampleFormControlInput1" placeholder="Enter name of item">
        @error('name')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Brand</label>
        <input type="text" name='brand' class="form-control" id="exampleFormControlInput1" placeholder="Panasonic, Samsung, etc">
        @error('brand')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Nature of product</label>
        <select class="form-control" name='type'>
            <option selected>Product Nature</option>
            <option value="physical">Physical</option>
            <option value="digital">Digital</option>
            <option value="service">Service</option>
        </select>
    </div>
    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Type of product</label>
        <select required class="form-control" name='productType'>
            <option selected>Select Type</option>
            <option value="computer">Computer</option>
            <option value="tablets">Tablets</option>
            <option value="accessories">Accessories</option>
            <option value="adapters">Adapters</option>
            <option value="tablets">Tablets</option>
            <option value="furniture">Furniture</option>
            <option value="moniters">Moniters</option>
            <option value="phones">Phones</option>
            <option value="speakers">Speakers</option>
        </select>
        @error('productType')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Available Colors <small>Separate colors using a comma</small> </label>
 
        <input type="text" name='colors' class="form-control" id="exampleFormControlInput1" placeholder="Purple,Black">
        @error('colors')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Short Description</label>
        <input type="text" name='shortDescription'  class="form-control" id="exampleFormControlInput1" placeholder="A short summary of the product">
        @error('shortDescription')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Long Description</label>
        <textarea class="form-control" name='description' id="exampleFormControlTextarea1" placeholder="A detailed description of the product" rows="3"></textarea>
        @error('description')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
      <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
        <input type="number" name='quantity'  class="form-control" id="exampleFormControlInput1" placeholder="Number of products in stock">
        @error('quantity')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>
      <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Weight</label>
        <input type="number" name='weight'  class="form-control" id="exampleFormControlInput1" placeholder="Weight of item">
        @error('weight')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>

      <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Cost</label>
        <input type="number" name='cost'  class="form-control" id="exampleFormControlInput1" placeholder="Price of item">
        @error('cost')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>

      <button type='submit' class='btn' style='background-color:rgb(21, 43, 99); color:white;' >Save Product</button>
    </form>
    </div>
    </div>

    <script>
      const imageInput = document.getElementById('imageInput');
      const previewImage = document.getElementById('previewImage');

      imageInput.addEventListener('change', function () {
          const file = imageInput.files[0];
          if (file) {
              const reader = new FileReader();
              reader.onload = function (e) {
                  previewImage.src = e.target.result;
                  previewImage.style.display = 'block';
              };
              reader.readAsDataURL(file);
          } else {
              previewImage.src = '#';
              previewImage.style.display = 'none';
          }
      });
  </script>

</x-layout>