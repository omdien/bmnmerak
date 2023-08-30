<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        spacing: {
                            13: "3.25rem",
                        },
                        fontFamily: {
                            inter: ["Inter"],
                        },
                        colors: {
                            omdien: "#bada55",
                            kopi: "#c0ffee",
                        },
                    },
                },
            };
        </script>
        
        <script
            src="https://code.jquery.com/jquery-3.7.0.slim.js"
            integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c="
            crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Modul BMN SKIPM Merak</title>
    </head>

    <body>
        @include('dashboard.layouts.header')
        @include('dashboard.layouts.sidebar') 
        @yield('container')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>
</html>
