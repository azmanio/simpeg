<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIMPeg</title>

    @include('includes.style')
</head>

<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer-search')

    @include('includes.script')
</body>

</html>
