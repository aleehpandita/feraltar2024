<?php

$currentRoute = Route::currentRouteName();
if (App::getLocale() == 'en') {
    $urlEs = str_replace('en.', 'es.', $currentRoute);
    $urlEn = $currentRoute;
} elseif (App::getLocale() == 'es') {
    $urlEs = $currentRoute;
    $urlEn = str_replace('es.', 'en.', $currentRoute);
}
?>
<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
  <head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('head')
  </head>
  @yield('content')
  <body>
    <a class="dropdown-item" href="{{route($urlEs)}}">Es</a>
    <a class="dropdown-item" href="{{route($urlEn)}}">En</a>
  </body>
  @yield('scripts')
</html>
