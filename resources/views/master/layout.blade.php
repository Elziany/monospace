<!DOCTYPE html>
<html lang="en">
<head>
  @yield('meta')
  @yield('link')
  @yield('style')
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include('commponent.loading')
    <main id="app">
      @include('commponent.header')
       @yield('content')
       @include('commponent.footer')

    </main>

    @yield('script')
</body>


