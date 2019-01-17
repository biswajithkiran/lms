@include('layouts.agents.header')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!---Top menu comes here---->
  @include('layouts.agents.topmenu')
  
  <!------Side menu comes here--------->
  @include('layouts.agents.sidemenu')

  <!------Content here-------->
  @yield('content')
  <!-- /.content-wrapper -->

  <!----Footer comes here----->
  @include('layouts.agents.footer')
  <!-- Control Sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('agents/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('agents/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('agents/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('agents/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('agents/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<!-- <script src="{{ URL::asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ URL::asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script> -->
<!-- SlimScroll -->
<script src="{{ URL::asset('agents/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('agents/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('agents/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('agents/dist/js/demo.js')}}"></script>
@stack('scripts')
</body>
</html>
