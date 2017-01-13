<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Let's DoSomething! ✅" />
        <meta name="author" content="FVCproductions">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
        <title>Let's DoSomething! ✅</title>
        <meta name="keywords" content="fvcproductions, frances, coronel, dosomething, todos" />
        <!-- Facebook - Open Graph -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="FVCproductions" />
        <meta property="og:description" content="Let's DoSomething! ✅" />
        <meta property="og:url" content="http://fvcproductions.com" />
        <meta property="og:site_name" content="FVCproductions" />
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Let's DoSomething! ✅" />
        <meta name="twitter:title" content="FVCproductions" />
        <meta name="twitter:site" content="@fvcproductions" />
        <meta name="twitter:domain" content="FVCproductions" />
        <!-- Google+ -->
        <meta itemprop="name" content="FVCproductions">
        <meta itemprop="description" content="Let's DoSomething! ✅">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h2>Let's DoSomething! ✅</h2>
            </div>
            @yield('content')
            <footer class="footer">
                <p>&copy; FVCproductions 2017</p>
            </footer>
        </div>
    </body>
</html>
