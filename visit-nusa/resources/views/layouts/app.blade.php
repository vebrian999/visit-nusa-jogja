<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Pastikan path file CSS sudah benar -->
  <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  @vite('resources/css/app.css')
  @vite(['resources/js/app.js', 'public/js/script.js'])

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <title>Visit Nusa | Temukan Destinasi Wisata & Tour Terbaik di Indonesia</title>
</head>

  <body class="">
    @include('includes.navbar')

    <main>
      <div id="content">
        @yield('content')
      </div>
      @include('includes.footer')
    </main>
    @stack('scripts')
  </body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
