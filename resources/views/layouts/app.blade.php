<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" dir="@if(App::getLocale() === 'ar'){{ 'rtl' }}@else{{ 'ltr' }}@endif">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ trans('todo.title') }}" />
        <meta name="author" content="Atef Ben Ali">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
        <title>{{ trans('todo.title') }}</title>
        <meta name="keywords" content="dosomething, todos" />
        <!-- Facebook - Open Graph -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="ToDo App" />
        <meta property="og:description" content="{{ trans('todo.title') }}" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="ToDo App" />
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="{{ trans('todo.title') }}" />
        <meta name="twitter:title" content="ToDo App" />
        <meta name="twitter:site" content="@ToDo App" />
        <meta name="twitter:domain" content="ToDo App" />
        <!-- Google+ -->
        <meta itemprop="name" content="ToDo App">
        <meta itemprop="description" content="{{ trans('todo.title') }}">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        @if(App::getLocale() === 'ar')
          <style type="text/css">
            @font-face {
                font-family: Amiri;
                src: url('amiri-0.109-webfonts/amiri-regular.ttf');
                src: local('Amiri'), url('amiri-0.109-webfonts/amiri-regular.ttf') format('truetype');
            }
            body {
                font-family: 'Amiri'
            }
          </style>
        @endif
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h2>{{ trans('todo.title') }}</h2>
            </div>
            @yield('content')
            <footer class="footer">
                <p>&copy; ToDo App 2017</p>
            </footer>
        </div>
    </body>
</html>
