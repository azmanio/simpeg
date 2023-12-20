<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Informasi Manajemen Pegawai</title>

    @include('includes.style')
</head>

<body>
    @include('includes.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    @include('includes.footer')

    @include('includes.script')
</body>

</html>
