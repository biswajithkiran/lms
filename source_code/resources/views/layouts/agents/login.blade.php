<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LMS::Agents Control Panel</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL::asset('agents/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('agents/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('agents/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('agents/dist/css/AdminLTE.min.css')}}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
 @yield('content')

<script src="{{ URL::asset('agents/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ URL::asset('agents/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('agents/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@stack('scripts')
</body>
</html>
