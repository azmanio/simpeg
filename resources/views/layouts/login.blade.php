<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPeg</title>

    @include('includes.admin.style')
</head>

<body>
    <!-- Navbar -->
    @include('includes.navbar-login')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('includes.footer-login')

    @include('includes.admin.script')
</body>

</html>
