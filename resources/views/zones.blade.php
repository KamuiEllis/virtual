<x-layout>
    @include('util')
    <div class='p-4'>
        <p class='lead' style='font-size:25px;'>Delivery Zones</p>
        <hr/>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <div class='tablets'>
        <div class='row'>
            
            <form method='POST' action='/zones/search' class='col-lg-9'>
                @csrf
                <input type='text' placeholder='Search' class='fields' name='text' value='' />
                <button type='submit' class='btn  mb-lg-1 mt-lg-0 mt-sm-2' style='background-color:rgb(21, 43, 99); color:white;'>Search</button>
            </form>

            <div class='col-lg-3'>
                <a href='/addZone'><button type='submit' style='background-color:rgb(21, 43, 99); color:white;' class='btn add-button'>Add Zone</button></a>
            </div>
        </div>
       
        <div class='table-responsive'>
        <table class="table table-hover table-responsive" style='width:100%'>
            <thead>
              <tr>
                
                <th scope="col">Address</th>
                <th scope="col">Type</th>
                <th scope="col">Courier</th>
                <th scope="col-2">Price</th>
                <th scope="col-2">Per Pound</th>
              </tr>
            </thead>
            <tbody>
              @foreach($zones as $zone)
                <tr>
                  <td>{{$zone->address}}</td>
                  <td>{{$zone->type}}</td>
                  <td>{{$zone->courier}}</td>
                  <td>$@php
                    echo addCommas($zone->price)
                @endphp</td>
                  <td>@php
                    echo addCommas($zone->perPound)
                @endphp$</td>
                  <td><a href='/zones/{{$zone->id}}'><button class='btn btn-secondary'>View</button></a></td>
                </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
        </div>
    </div>
</x-layout>