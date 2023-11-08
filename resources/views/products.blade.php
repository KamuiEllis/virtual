<x-layout>
    <div class='p-4'>
        <p class='lead' style='font-size:25px;'>Products</p>
        <hr/>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <div class='row'>
            
            <form method='POST' action='/product/search' class='col-lg-9'>
                @csrf
                <input type='text' placeholder='Search' class='fields' name='search' />
                <button type='submit' class='btn btn-danger mb-lg-1 mt-lg-0 mt-sm-2' >Search</button>
            </form>

            <div class='col-lg-3'>
                <a href='/addProduct'><button type='submit' class='btn btn-danger add-button'>Add Product</button></a>
            </div>
        </div>
        @php
          function addCommas($number) {
            return number_format($number);
          }   
        @endphp
        <div class='table-responsive'>
        <table class="table table-hover table-responsive" style='width:100%'>
            <thead>
              <tr>
                
                <th scope="col">Sku</th>
                <th scope="col">Name</th>
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
</x-layout>