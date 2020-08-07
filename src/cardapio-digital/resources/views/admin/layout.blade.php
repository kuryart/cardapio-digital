<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    @include('admin.head')
  </head>
  <body>
    @include('admin.navbar')
    @yield('content')
    @include('admin.scripts')
  </body>
</html>
