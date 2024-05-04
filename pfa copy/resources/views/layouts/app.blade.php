<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Incluez les feuilles de style et autres ressources -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <!-- Incluez une barre de navigation ou d'autres composants communs -->
        @include('partials.navbar')

        <!-- La section content est où le contenu de chaque vue spécifique sera injecté -->
        <div class="content">
            @yield('content')
        </div>

        <!-- Incluez un pied de page ou d'autres composants communs -->
        @include('partials.footer')
    </div>
    <!-- Incluez des scripts JS ou d'autres ressources -->
    <script src="/js/scripts.js"></script>
</body>
</html>
