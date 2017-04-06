<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>

@include('partials._nav')

<body>

<div class="container">
    @include('partials._messages')
    @yield('content')
    @include('partials._footer')
</div>

@include('partials._javascript')
@yield('scripts')
</body>

</html>