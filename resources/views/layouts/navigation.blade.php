<!DOCTYPE html>
<html lang="en" class="dark" id="html">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sidebar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{asset('js/darkMode.js')}}"></script>
    <script src="{{asset('js/navigation.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  </head>
  <body>
    {{-- header --}}
    <x-nav />
    {{-- end header --}} 
    {{-- sidebar --}}
    <x-sidebar />
    {{-- end sidebar --}} 
    {{-- content --}}
    <div class="p-4 sm:ml-64">
      <div class="mt-14 h-screen rounded-lg border-gray-200 p-4 dark:border-gray-700">
        @yield('content')
      </div>
    </div>
    {{-- end content --}}
  </body>
</html>
