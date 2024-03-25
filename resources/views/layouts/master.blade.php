<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a href="{{ route('posts.index') }}" class="navbar-brand">Post Home</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>
