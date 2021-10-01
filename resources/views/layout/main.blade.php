<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link to css file --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Favicon --}}
    <link rel="icon" href="{{asset('images/favicon.ico')}}">
    <title>Comics | @yield('title-page')</title>
</head>
<body>
    {{-- HEADER --}}
    @include('includes.header', ['nav_items' => config('nav')])
    {{-- MAIN --}}
    <main>
        @yield('content-main')
    </main>
    {{-- FOOTER --}}
    @include('includes.footer')
    
    {{-- Js file --}}
    <script src="{{asset('js/app.js')}}"></script>
    @yield('extra-script')
</body>
</html>