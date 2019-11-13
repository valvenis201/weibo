<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
@include('layouts._header')
<?php print_r ($url = parse_url(getenv("DATABASE_URL"))); ?>
<div class="container">
  <div class="offset-md-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
</body>
</html>
