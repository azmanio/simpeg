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
    @include('includes.admin.navbar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('includes.admin.footer')

    @include('includes.admin.script')
</body>

</html>
