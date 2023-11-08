<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Virtual Intelligence</title>
    <script src="{{ asset('/responsiveness.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/index.css') }}">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</head>

<body>
    <div class='navbar'>
        <h3 class='lead name'>Welcome, {{auth()->user()->firstname}}</h3>
        <form action='/logout' method='POST'>
            @csrf
            <button type='submit' class='btn btn-danger mt-2 logout-button' >Log Out</button>
        </form>
    </div>
    <div class='sidebar'>
        <div class='name-container'>
            <img src='{{ asset('/logo.png') }}' class='logo' style='margin-left:40px;'  width='200'/>

            <ul class="nav flex-column">
                <li class="nav-item">
                    
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/dashboard.png') }}' width='32'/>
                    </a>

                    <a class="nav-link active link link-text" href="#">
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
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/product.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="/products">
                        Products
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/customer.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="#">
                        Customers
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/support.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="#">
                        Admins
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active link icons" href="#">
                        <img src='{{ asset('/role.png') }}' width='32'/>
                    </a>
                    <a class="nav-link link link-text" href="#">
                        Roles
                    </a>
                </li>
              
            </ul>
        </div>
    </div>