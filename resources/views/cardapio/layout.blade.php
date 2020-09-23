<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('cardapio.head')
  </head>
  <body>
    @include('cardapio.navbar')
    @yield('content')
    @include('cardapio.scripts')
  </body>
</html>
