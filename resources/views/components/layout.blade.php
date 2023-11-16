<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Virtual Intelligence</title>
    <script src="{{ asset('/responsiveness.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/index.css') }}">
</head>

<body>
    <div class='navbar'>
        <h3 class='lead name'>Welcome, {{auth()->user()->firstname}}</h3>
        
        <form action='/logout' method='POST'>
            @csrf
            <div class="dropdown">
                <button class="btn  dropdown-toggle m-1" style='background-color:rgb(21, 43, 99); color:white;'  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Options
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/profile">Profile</a>
                  <a class="dropdown-item" href="#"><button style='border: none;
                    background: none;
                    padding: 0;
                    margin: 0;
                    font-size: inherit;
                    font-family: inherit;
                    color: inherit;
                    cursor: pointer;' type='submit'>Log Out</button></a>
                </div>
              </div>
            {{-- <button type='submit' class='btn btn-danger mt-2 logout-button' >Log Out</button> --}}

        </form>
    </div>
    <div class='row' style='height:100%; width:100%;'>
    <div class='sidebar col-1'>
        <div class='name-container'>
            {{-- <img src='{{ asset('/logo.png') }}' class='logo' style='margin-left:40px;'  width='200'/> --}}

            <ul class="nav flex-column">
                <li class="nav-item">
                    
                    <a class="nav-link active link icons" href="/">
                        <img src='{{ asset('/dashboard.png') }}' width='32'/>
                    </a>

                    <a class="nav-link active link link-text" href="/">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/order.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="#">
                        Orders
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="/products">
                        <img src='{{ asset('/product.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="/products">
                        Products
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="/customers">
                        <img src='{{ asset('/customer.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="/customers">
                        Customers
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="/admins">
                        <img src='{{ asset('/support.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="/admins">
                        Administrator
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/role.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="#">
                        Delivery Zones
                    </a>
                </li>
              
            </ul>
        </div>
    </div>
    <div class='col-10'>
        {{$slot}}
    </div>
    </div>  

  
</body>