<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Algolia Search</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thesaas.css') }}" rel="stylesheet">

</head>
<body>
<div id="app" style="">

    <header class="header text-white bg-primary" style="">
        <div class="container text-center">

            <div class="row">
                <div class="col-md-8 mx-auto">

                    <h1 class="text-white">Laravel Algolia Search</h1>

                </div>
            </div>

        </div>
    </header>
    <main class="main-content" style="">
        @yield('content')
    </main>

</div>
</body>
</html>
