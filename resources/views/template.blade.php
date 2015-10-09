<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ env('APP_TITLE') }}</title>

        <!-- CSS -->
        @if(Config::get('app.debug'))
            <link rel="stylesheet" href="{{ asset('/build/vendor/css/bootstrap.min.css') }}" />
            <link rel="stylesheet" href="{{ asset('/build/vendor/css/font-awesome.min.css') }}" />
            <link rel="stylesheet" href="{{ asset('/build/css/app.css') }}" />
        @else
            <link rel="stylesheet" href="{{ elixir('css/all.css') }}" />
        @endif
    </head>

    <body>
        @include('incs.nav')

        <div class="container">
            @include('incs.breadcrumb')
            @include('incs.alerts')

            @yield('content')
        </div>

        @include('incs.footer')

        <!-- JS -->
        @if(Config::get('app.debug'))
            <script type="text/javascript" src="{{ asset('/build/vendor/js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/build/vendor/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/build/js/app.js') }}"></script>
        @else
            <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
        @endif
    </body>
</html>