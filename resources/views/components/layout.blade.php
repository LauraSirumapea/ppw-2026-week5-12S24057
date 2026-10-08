@props(['title' => 'SIPUS-Del'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} - SIPUS-Del</title>

    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    {{-- Bootstrap Icons --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        /* =====================================================
           SIPUS-DEL COLOR SYSTEM
        ===================================================== */

        :root {
            --del-purple: #4C1D95;
            --del-purple-dark: #35136F;
            --del-purple-soft: #E9E1F0;

            --deep-plum: #3B2850;

            --warm-ivory: #FAF7F2;
            --warm-cream: #F4EAE0;

            --mocha: #8A624A;
            --sand: #EEDFD2;

            --dusty-rose: #D9A6A0;
            --rose-soft: #F4E5E3;

            --sage: #A8B89F;
            --sage-soft: #E8EFE5;

            --text-dark: #3F332D;
            --text-muted: #7C7068;

            --border: #E6DCD4;

            --white: #FFFFFF;
        }


        /* =====================================================
           BODY
        ===================================================== */

        body {
            min-height: 100vh;

            margin: 0;

            background:
                radial-gradient(
                    circle at 5% 10%,
                    rgba(76, 29, 149, 0.035),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 95% 80%,
                    rgba(138, 98, 74, 0.055),
                    transparent 28%
                ),
                var(--warm-ivory);

            color: var(--text-dark);

            font-family:
                Inter,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            -webkit-font-smoothing: antialiased;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar-del {
            min-height: 68px;

            background: var(--deep-plum);

            border-bottom: 3px solid var(--mocha);

            box-shadow:
                0 4px 18px rgba(59, 40, 80, 0.16);
        }


        .navbar-del .container {
            min-height: 68px;
        }


        .navbar-del .navbar-brand {
            display: flex;

            align-items: center;

            gap: 8px;

            color: #FFFFFF !important;

            font-size: 1.1rem;

            font-weight: 750;

            text-decoration: none;
        }


        .navbar-del .nav-link {
            display: flex;

            align-items: center;

            gap: 6px;

            padding: 9px 13px !important;

            border-radius: 8px;

            color: rgba(255, 255, 255, 0.88) !important;

            font-size: 0.78rem;

            font-weight: 650;

            transition: all 0.2s ease;
        }


        .navbar-del .nav-link:hover {
            color: #FFFFFF !important;

            background: rgba(255, 255, 255, 0.10);

            transform: translateY(-1px);
        }


        /* =====================================================
           MAIN
        ===================================================== */

        main.container {
            min-height: calc(100vh - 68px);

            padding-top: 28px !important;

            padding-bottom: 45px !important;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .btn-del {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            background: var(--del-purple);

            color: #FFFFFF !important;

            border: none;

            border-radius: 9px;

            font-weight: 700;

            box-shadow:
                0 5px 14px rgba(76, 29, 149, 0.18);

            transition: all 0.2s ease;
        }


        .btn-del:hover {
            background: var(--del-purple-dark);

            color: #FFFFFF !important;

            transform: translateY(-1px);
        }


        /* =====================================================
           TEXT
        ===================================================== */

        .text-del {
            color: var(--del-purple) !important;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .card {
            border: 1px solid var(--border);

            border-radius: 14px;

            background: var(--white);

            box-shadow:
                0 6px 20px rgba(63, 51, 45, 0.055);
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-control,
        .form-select {
            border-color: #DCCFC5;

            border-radius: 8px;

            color: var(--text-dark);

            background: #FFFFFF;
        }


        .form-control:focus,
        .form-select:focus {
            border-color: var(--del-purple);

            box-shadow:
                0 0 0 3px rgba(76, 29, 149, 0.08);
        }


        /* =====================================================
           ALERT
        ===================================================== */

        .alert {
            border-radius: 10px;

            border-width: 1px;
        }


        /* =====================================================
           PAGINATION
        ===================================================== */

        .pagination {
            margin-bottom: 0;

            gap: 4px;
        }


        .pagination .page-link {
            border: 1px solid #DFD4CC;

            border-radius: 7px !important;

            color: var(--text-muted);

            background: #FFFFFF;

            font-size: 0.72rem;
        }


        .pagination .page-link:hover {
            color: var(--del-purple);

            background: var(--del-purple-soft);

            border-color: #CDBCE0;
        }


        .pagination .page-item.active .page-link {
            background: var(--del-purple);

            border-color: var(--del-purple);

            color: #FFFFFF;
        }


        /* =====================================================
           SCROLLBAR
        ===================================================== */

        ::-webkit-scrollbar {
            width: 8px;

            height: 8px;
        }


        ::-webkit-scrollbar-track {
            background: #F1EAE4;
        }


        ::-webkit-scrollbar-thumb {
            background: #C5B6AA;

            border-radius: 10px;
        }


        ::-webkit-scrollbar-thumb:hover {
            background: var(--mocha);
        }


        /* =====================================================
           TEXT SELECTION
        ===================================================== */

        ::selection {
            color: #FFFFFF;

            background: var(--del-purple);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 768px) {

            .navbar-del {
                min-height: 62px;
            }


            .navbar-del .container {
                min-height: 62px;
            }


            main.container {
                padding-top: 20px !important;
            }


            .navbar-del .navbar-nav {
                margin-top: 8px;
            }


            .navbar-del .nav-link {
                justify-content: center;
            }

        }

    </style>
</head>


<body>

    {{-- =====================================================
         NAVBAR
    ===================================================== --}}

    <nav class="navbar navbar-del">

        <div class="container">

            <a
                class="navbar-brand"
                href="{{ route('buku.index') }}"
            >
                📚 SIPUS-Del
            </a>


            <div class="navbar-nav ms-auto">

                <a
                    class="nav-link"
                    href="{{ route('buku.index') }}"
                >
                    <i class="bi bi-book"></i>
                    Buku
                </a>


                <a
                    class="nav-link"
                    href="{{ route('kategori.index') }}"
                >
                    <i class="bi bi-tag-fill"></i>
                    Kategori
                </a>

            </div>

        </div>

    </nav>


    {{-- =====================================================
         MAIN CONTENT
    ===================================================== --}}

    <main class="container py-4">

        {{-- SUCCESS --}}

        @if (session('success'))

            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >

                <i class="bi bi-check-circle me-1"></i>

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif


        {{-- ERROR --}}

        @if (session('error'))

            <div
                class="alert alert-danger alert-dismissible fade show"
                role="alert"
            >

                <i class="bi bi-exclamation-circle me-1"></i>

                {{ session('error') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif


        {{-- PAGE CONTENT --}}

        {{ $slot }}

    </main>


    {{-- Bootstrap JS --}}

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>