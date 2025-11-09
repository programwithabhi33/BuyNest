<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            @yield("title", config("app.name") . " - Modern Ecommerce")
        </title>

        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />

        <!-- Vite Assets -->
        @vite(["resources/css/app.css", "resources/js/app.js"])

        @stack("styles")
    </head>
    <body class="bg-gray-50">
        @include("partials.header")

        <main>
            @yield("content")
        </main>

        @include("partials.footer")

        @stack("scripts")
    </body>
</html>
