<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfólio - Vinícius Marques</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./dist/css/styles.css" />

   @include ('helpers.favicon')
  
  </head>
<body>
  <div class="container main-content">
    @include('components.header')
    <main>
      @yield('content')
    </main>
    <script src="./dist/js/scripts.min.js"></script>
  </div>
</body>
</html>
