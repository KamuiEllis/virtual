<x-layout>
    @include('util')
    <div class='p-4'>
        <p class='lead' style='font-size:25px;'>Customers</p>
        <hr/>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <div class='row'>
            
            <form method='POST' action='/customers/search' class='col-lg-9'>
                @csrf
                <input type='text' placeholder='Search' class='fields' name='text' value='' />
                <button type='submit' class='btn btn-danger mb-lg-1 mt-lg-0 mt-sm-2' >Search</button>
            </form>

            {{-- <div class='col-lg-3'>
                <a href='/addcustomer'><button type='submit' class='btn btn-danger add-button'>Add customer</button></a>
            </div> --}}
        </div>
       
        <div class='table-responsive'>
        <table class="table table-hover table-responsive" style='width:100%'>
            <thead>
              <tr>
                
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($customers as $customer)
                <tr>
                  <td>{{$customer->firstname}}</td>
                  <td>{{$customer->lastname}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->type}}</td>
                  <td><a href='/customers/{{$customer->id}}'><button class='btn btn-secondary'>View</button></a></td>
                </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
    </div>
</x-layout>