<!DOCTYPE html>
<html lang="en" class="dark" id="html">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sidebar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/darkMode.js') }}"></script>
    <script src="{{ asset('js/navigation.js') }}"></script>
    <script src="{{ asset('js/prestamo.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <style>
        .select2-selection__rendered {
            line-height: 36px !important;
        }

        .select2-container .select2-selection--single {
            height: 40px !important;
        }

        .select2-selection__arrow {
            height: 39px !important;
        }
    </style>
    {{-- header --}}
    <x-nav />
    {{-- end header --}}
    {{-- sidebar --}}
    <x-sidebar />
    {{-- end sidebar --}}
    {{-- content --}}
    <div class="p-4 sm:ml-64 bg-white">
        <div class="mt-14 h-screen rounded-lg bg-white p-4 ">
            @yield('content')
        </div>
    </div>
    {{-- end content --}}
</body>

</html>
