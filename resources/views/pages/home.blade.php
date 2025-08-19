<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MyLaravelApp</a>
        <div>
            <a class="btn btn-outline-light btn-sm" href="{{ route('home') }}">Home</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('load') }}">Load</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('record') }}">Record</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Home Page</h1>
        <p class="lead text-center">This page uses <b>Bootstrap via CDN</b>.</p>
        <div class="alert alert-success text-center">Example content styled with Bootstrap CDN.</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
