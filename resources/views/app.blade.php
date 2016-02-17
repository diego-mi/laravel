<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/bulma.min.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header class="header">
    <div class="container">
        <!-- Left side -->
        <div class="header-left">
            <a class="header-item" href="#">
                Laravel
            </a>
            <a class="header-tab" href="#">
                Home
            </a>
        </div>


        <span class="header-toggle">
        <span></span>
        <span></span>
        <span></span>
        </span>


        <div class="header-right header-menu">
            <span class="header-item">
            <a href="#">Login</a>
            </span>
            <span class="header-item">
            <a href="#">Register</a>
            </span>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="content is-centered">
            <p>
                <strong>Laravel app</strong> by DiegoMi
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>