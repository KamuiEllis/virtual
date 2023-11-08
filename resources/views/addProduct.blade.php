<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Add Product</p>
    <hr/>

    <small class='mb-5'>Enter information about a product you want to add to your inventory.</small>

    <form action='/addProduct' method="POST" class="mb-3 mt-5" enctype="multipart/form-data">
        @csrf
        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Image of Product</label>
            <input type="file" name='image' class="form-control" id="exampleFormControlInput1" >
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

      <button type='submit' class='btn btn-danger' >Save Product</button>
    </form>
    </div>


</x-layout>