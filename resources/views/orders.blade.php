<x-layout>
    @include('util')
    <div class='p-4 '>
        <p class='lead' style='font-size:25px;'>Orders</p>
        <hr/>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <div  class='tablets'> 

       
        <div class='row'>
            
            <form method='POST' action='/orders/search' class='col-lg-9'>
                @csrf
                <input type='text' placeholder='Search' class='fields' name='text' value='' />
                <button type='submit' style='background-color:rgb(21, 43, 99); color:white;' class='btn mb-lg-1 mt-lg-0 mt-sm-2' >Search</button>
            </form>

            <div class='col-lg-3'>
                <a href='/addorder'><button type='submit' style='background-color:rgb(21, 43, 99); color:white;' class='btn add-button'>Add order</button></a>
            </div>
        </div>
       
        <div class='table-responsive'>
        <table class="table table-hover table-responsive" style='width:100%'>
            <thead>
              <tr>
                
                <th scope="col">Name of Recipient</th>
                <th scope="col">Address</th>
                <th scope="col">Parish</th>
                <th scope="col">Delivery Type</th>
                <th scope="col">Type of area</th>
                <th scope="col">Total Payment</th>
                <th scope="col-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
                <tr>
                  <td>{{$order->name}}</td>
                  <td>{{$order->address}}</td>
                  <td>{{$order->parish}}</td>
                  <td>{{$order->delivery_type}}</td>
                  <td>{{$order->area}}</td>
                  <td>$@php
                      echo addCommas($order->total_payment)
                  @endphp</td>
                  
                  <td><a href='/orders/{{$order->id}}'><button class='btn btn-secondary'>View</button></a></td>
                </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
</x-layout>