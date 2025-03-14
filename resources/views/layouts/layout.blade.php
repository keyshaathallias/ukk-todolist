<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lumi | To-Do List</title>
  <link rel="icon" type="image/x-icon" href="/images/Lumi Yellow.svg">
  @vite('resources/css/app.css')
</head>

<body class="font-sora text-dark-green bg-light-green">
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')
  @include('sweetalert::alert')
</body>

</html>
