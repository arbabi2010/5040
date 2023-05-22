<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Carousel Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="/">خانه <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Route::is('product.create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('product.create') }}">ایجاد محصول</a>
                </li>

            </ul>
            <a class="btn {{ Route::is('shopping.cart') ? 'btn-outline-success' : 'btn-outline-primary' }}  mx-2 my-2 my-sm-0 text-white" href="{{ route('shopping.cart') }}">
                سبد خرید <span class="badge badge-info">{{ count((array) session('cart')) }}</span>
            </a>


        </div>
    </nav>
</header>

<main role="main" class="mt-5 container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @yield('content')

    <!-- FOOTER -->
    <footer class="container fixed-bottom">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p> محتبی اربابی</p>
    </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
</body>
</html>
