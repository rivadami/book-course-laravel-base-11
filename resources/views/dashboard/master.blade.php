<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <!--
        <header>
            HEADER
        </header>
    -->

    @session('key')
        {{ $value }}
    @endsession

    @session('key2')
        {{ $value }}
    @endsession

    @session('status')
        {{ $value }}
    @endsession

    @if (session('status'))
        {{ session('status') }}
    @endif

    @yield('content')

    <section>
        @yield('morecontent')
    </section>

</body>

</html>
