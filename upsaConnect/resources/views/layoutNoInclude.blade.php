<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'UPSA Connect')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {

                        'upsaBlue': '#00004E',
                        'upsaBlue2': '#263F9C',
                        'upsaBlue3': '#DAE3F6',
                        'upsaYellow': '#F9BB19',
                        'upsaGrey': '#DAE2FC',
                        'upsaGreyText': '#A3DCFF',
                        'grdientBlue1': '#1F3BA2',
                        'grdientBlue2': '#0C163C',
                    },
                },
            }
        }
    </script>
</head>

<body class="bg-gradient-to-b from-grdientBlue1 to-grdientBlue2">
    {{-- @include('include.header') --}}
    @yield('content')

    {{-- @include('include.footer') --}}
</body>

</html>
