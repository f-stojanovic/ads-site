<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', App()->getLocale()) }}">
    <head>
        @include('layouts.partials._head')
    </head>
<body>
    <div id="App">
        <main class="py-4">

        @include('layouts.partials._navigation')

        @yield('content')

        </main>
    </div>
</body>
</html>
