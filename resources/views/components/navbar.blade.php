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
            <button type='submit' class='btn btn-danger mt-2' >Log Out</button>
        </form>
    </div>
    <div class='sidebar'>
        <div class='name-container'>
        </div>
    </div>