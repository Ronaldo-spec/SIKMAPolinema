<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="image">
      <img src="{{ asset('img/Polinema.png') }}" class="mx-auto d-block">
    </div>
    <br>
    <div class="login-logo">
      <a href="{{ route('login') }}"><b>Login</b>User</a>
    </div>
    @yield('content')
  </div>

  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>

</body>

</html>