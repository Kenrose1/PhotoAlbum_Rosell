<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--@<link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
 @vite('resources/css/app.css')
</head>
<body>

  <!-- Header -->
  <header class="header">
    <h1> <a href="{{ route('homepage') }}" class="title-link">My Photo Album</a> </h1>
    <nav class="navbar">
      <a href="{{ route('nature') }}" >Nature</a>
      <a href="{{ route('beach') }}" >Beach</a>
      <a href="{{ route('mountains') }}" >Mountains</a>
      <a href="{{ route('animals') }}" >Animals</a>
      <a href="{{ route('cars') }}" >Cars</a>
    </nav>
  </header>

  <!-- Main Section -->
  <main class="main-content">
   @yield('content')
  </main>

  <!-- Footer -->
  <footer class="footer">
    <p>© 2025 My Photo Album | Rosell BSIT2 - A3</p>
  </footer>

</body>
</html>