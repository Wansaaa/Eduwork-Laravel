<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />

        <style>
            .card:hover {
                transform: translateY(-5px);
                transition: 0.3s ease-in-out;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            }
            .hero {
                background: linear-gradient(to right, #0d6efd, #0dcaf0);
                color: white;
                padding: 80px 0;
            }
        </style>
    </head>
    <body>
        @include('navbar')

        <div style="min-height: 80vh">
          @yield('content')
        </div>

        <x-footer></x-footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
