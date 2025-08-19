<!DOCTYPE html>
<html>
<head>
    <title>Load Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary px-3">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MyLaravelApp</a>
        <div>
            <a class="btn btn-outline-light btn-sm" href="{{ route('home') }}">Home</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('load') }}">Load</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('record') }}">Record</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Load Page</h1>
        <p class="lead text-center">This page uses <b>Bootstrap downloaded and placed in public/css and public/js</b>.</p>
        <div class="alert alert-info text-center">Example content styled with local Bootstrap files.</div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
