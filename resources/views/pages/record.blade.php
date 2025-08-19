<!DOCTYPE html>
<html>
<head>
    <title>Record Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark bg-success px-3">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">MyLaravelApp</a>
        <div>
            <a class="btn btn-outline-light btn-sm" href="{{ route('home') }}">Home</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('load') }}">Load</a>
            <a class="btn btn-outline-light btn-sm" href="{{ route('record') }}">Record</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Record Page</h1>
        <p class="lead text-center">Explanation of the <b>Model-View-Controller (MVC)</b> in Laravel.</p>

        <div class="card p-4">
            <h3>How MVC Works in Laravel</h3>
            <ul>
                <li><b>Model</b> – Handles database logic.</li>
                <li><b>View</b> – Manages the UI.</li>
                <li><b>Controller</b> – Connects Models and Views.</li>
            </ul>
            <p>Flow: <b>User → Controller → Model → Controller → View → User</b></p>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
