<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','WeiBo App') -   Laravel 入门教程
    </title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>



<body>


    <div class="container">
      <div class="offset-md-1 col-md-10">
        @include('layouts._header')
        @yield('content')
        @include('shared._messages')
      </div>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
  @include('layouts._footer')
</body>
</html>
