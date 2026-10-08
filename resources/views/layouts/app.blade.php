<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog CRUD')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">📝 Blog CRUD</a>
            <div>
                <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm">+ Tambah Post</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif

        @if(session('error'))
            <x-alert type="danger" :message="session('error')" />
        @endif

        @yield('content')
    </div>

    <footer class="text-center text-muted mt-5 mb-3">
        <small>Tugas Rutin 10 — Blog CRUD Laravel</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>