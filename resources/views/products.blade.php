<x-layout>
    @include('util')
    <div class='p-4 '>
        <p class='lead' style='font-size:25px;'>Products</p>
        <hr/>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <div  class='tablets'> 

       
        <div class='row'>
            
            <form method='POST' action='/products/search' class='col-lg-9'>
                @csrf
                <input type='text' placeholder='Search' class='fields' name='text' value='' />
                <button type='submit' style='background-color:rgb(21, 43, 99); color:white;' class='btn mb-lg-1 mt-lg-0 mt-sm-2' >Search</button>
            </form>

            <div class='col-lg-3'>
                <a href='/addProduct'><button type='submit' style='background-color:rgb(21, 43, 99); color:white;' class='btn add-button'>Add Product</button></a>
            </div>
        </div>
       
        <div class='table-responsive'>
        <table class="table table-hover table-responsive" style='width:100%'>
            <thead>
              <tr>
                
                <th scope="col">Sku</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Quanity</th>
                <th scope="col">Price</th>
                <th scope="col">Weight</th>
                <th scope="col-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                  <td>{{$product->sku}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->type}}</td>
                  <td>{{$product->quantity}}</td>
                  <td>$@php
                      echo addCommas($product->cost)
                  @endphp</td>
                  <td>{{$product->weight}}</td>
                  <td><a href='/products/{{$product->id}}'><button class='btn btn-secondary'>View</button></a></td>
                </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
</x-layout>