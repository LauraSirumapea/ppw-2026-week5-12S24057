@props(['title' => 'SIPUS-Del'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} - SIPUS-Del</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        :root {
            --del-purple: #4C1D95;
            --del-purple-dark: #3B1478;
        }

        body {
            background-color: #f8f7fc;
        }

        .navbar-del {
            background-color: var(--del-purple);
        }

        .navbar-del .navbar-brand,
        .navbar-del .nav-link {
            color: white;
        }

        .navbar-del .nav-link:hover {
            color: #ddd6fe;
        }

        .btn-del {
            background-color: var(--del-purple);
            color: white;
            border: none;
        }

        .btn-del:hover {
            background-color: var(--del-purple-dark);
            color: white;
        }

        .text-del {
            color: var(--del-purple);
        }

        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-del">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('buku.index') }}">
                📚 SIPUS-Del
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('buku.index') }}">
                    Buku
                </a>

                <a class="nav-link" href="{{ route('kategori.index') }}">
                    Kategori
                </a>
            </div>
        </div>
    </nav>

    <main class="container py-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>
            </div>
        @endif

        {{ $slot }}

    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>