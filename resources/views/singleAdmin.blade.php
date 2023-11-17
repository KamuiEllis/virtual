<x-layout>
    <div class='p-4'>
    <p class='lead' style='font-size:25px;'>Edit User</p>
    <hr/>
    
    
    @if (session('success'))
    <div class='alert alert-success mt-5' role='alert'>
        {{ session('success') }}
    </div>
    @endif
    <br/>
    
    <div class='tablets'>
    <small class='mb-5'>Enter information about admin.</small>
    <form action='/admins/{{$user->id}}' method="POST" class="mb-3 mt-3" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class='mb-3'>   
            <label for="exampleFormControlInput1" class="form-label">Firstname</label>
            <input type="text" name='firstname' value="{{$user->firstname}}" class="form-control" id="exampleFormControlInput1" placeholder="Firstname of admin">
            @error('firstname')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
        </div>
    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Lastname</label>
        <input type="text" name='lastname' value="{{$user->lastname}}" class="form-control" id="exampleFormControlInput1" placeholder="Lastname of admin">
        @error('lastname')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>

    <div class='mb-3'>   
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="text" name='email' value="{{$user->email}}" class="form-control" id="exampleFormControlInput1" placeholder="Email of admin">
        @error('email')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
    </div>

      <button type='submit' class='btn' style='background-color:rgb(21, 43, 99); color:white;'>Save Admin</button>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
      </button>
    </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting {{$user->firstname}} from system.</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this person's profile?
            </div>
            <form action='/admins/{{$user->id}}' method='POST' class="modal-footer" >
                @csrf
                @method('DELETE')
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            </div>
        </div>
      </div>


</x-layout>