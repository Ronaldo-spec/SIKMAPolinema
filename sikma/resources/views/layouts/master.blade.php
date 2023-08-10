<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/toastr/toastr.min.css') }}">
  @yield('cssTambahan')
</head>

<body class="hold-transition sidebar-mini accent-info" >
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts.components.header')
    <!-- Main Sidebar Container -->
    @include('layouts.components.sidebar')

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">@yield('content_header_title')</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </div>
    <!-- @include('layouts.components.footer') -->
  </div>

  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/toastr/toastr.min.js')}}"></script>
  <script>
    @if(Session::has('message'))
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
      case 'info':
      toastr.info("{{ Session::get('message') }}");
      break;

      case 'warning':
      toastr.warning("{{ Session::get('message') }}");
      break;

      case 'success':
      toastr.success("{{ Session::get('message') }}");
      break;

      case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
    }
    @endif
  </script>
  @yield('scriptTambahan')
</body>
</html>

<!--   <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside> -->