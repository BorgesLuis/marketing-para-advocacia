<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ditiz">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <title></title>

    @include('layouts.styles')
</head>

<body>
    <section id="container" class="container">
        @yield('content')
    </section>

    @include('layouts.scripts')

    <script>
    </script>
</body>

</html>