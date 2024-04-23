<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'UPSA Connect')</title>
    <link rel="stylesheet" href="animate.css">
    <link  rel="icon" href="{{ url('rss/upsa-logo-Icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/ecf091b006.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/xdeyesk3eyhxruhwsv7xuejyz2z3qclu143inbdbaof5jk95/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet"
  />
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

<body style="font-family: 'Lato', sans-serif">
    @include('include.header')
    @yield('content')

    @include('include.footer')
</body>

</html>
