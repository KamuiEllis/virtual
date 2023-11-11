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
</head>

<body>
    <div class='navbar'>
        <h3 class='lead name'>Welcome, {{auth()->user()->firstname}}</h3>
        <form action='/logout' method='POST'>
            @csrf
            <button type='submit' class='btn btn-danger mt-2 logout-button' >Log Out</button>
        </form>
    </div>
    <div class='row' style='height:100%;'>
    <div class='sidebar col-3'>
        <div class='name-container'>
            <img src='{{ asset('/logo.png') }}' class='logo' style='margin-left:40px;'  width='200'/>

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
    <div class='col-9'>
        {{$slot}}
    </div>
    </div>

    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');

        imageInput.addEventListener('change', function () {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.src = '#';
                previewImage.style.display = 'none';
            }
        });
    </script>
</body>