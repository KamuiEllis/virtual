<x-layout>
    @include('util')
    <div class='p-4'>
        <p class='lead' style='font-size:25px;'>Administrators</p>
        <hr/>
        @if (session('success'))
        <div class='alert alert-success mt-5' role='alert'>
            {{ session('success') }}
        </div>
        @endif
        <div class='tablets'>
        <div class='row'>
            
            <form method='POST' action='/admins/search' class='col-lg-9'>
                @csrf
                <input type='text' placeholder='Search' class='fields' name='text' value='' />
                <button type='submit' class='btn  mb-lg-1 mt-lg-0 mt-sm-2' style='background-color:rgb(21, 43, 99); color:white;'>Search</button>
            </form>

            <div class='col-lg-3'>
                <a href='/addAdmin'><button type='submit' style='background-color:rgb(21, 43, 99); color:white;' class='btn add-button'>Add Admin</button></a>
            </div>
        </div>
       
        <div class='table-responsive'>
        <table class="table table-hover table-responsive" style='width:100%'>
            <thead>
              <tr>
                
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($admins as $admin)
                <tr>
                  <td>{{$admin->firstname}}</td>
                  <td>{{$admin->lastname}}</td>
                  <td>{{$admin->email}}</td>
                  <td><a href='/admins/{{$admin->id}}'><button class='btn btn-secondary'>View</button></a></td>
                </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
        </div>
    </div>
</x-layout>