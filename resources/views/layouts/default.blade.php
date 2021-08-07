<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','WeiBo App') -   Laravel 入门教程
    </title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>



<body>
  @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('shared._messages')

      </div>
    </div>

  @include('layouts._footer')
</body>
</html>
