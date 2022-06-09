<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC COMICS</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('custom-css')
</head>

<body>
    @include('partials.header')

    <main>
        <div class="jumbotrone">
            <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbo-image">
        </div>
        <!-- /.jumbotrone -->
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
    @yield('script-footer')

</body>

</html>