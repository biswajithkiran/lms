@extends('layouts.agents.login')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>LMS</b>&nbsp;Agents Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if ($errors->any())                
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>                        
                    @endif
                    @if(session('messagelo'))
                    <div class="alert alert-success">{{session('messagelo')}} </div>  
                    @endif
                    
                    @if(session('message'))
                    <div class="alert alert-danger">{{session('message')}} </div>  
                    @endif
    <form method="post" name="form1" id="form1" action="{{url('/agent/agentlogin')}}" >
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="inputError" value="{{old('email')}}" placeholder="Email" required="" autofocus="" autocomplete="on">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">{{ csrf_field() }}
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <!-- <a href="#">I forgot my password</a><br>
    <a href="#" class="text-center">Register a new membership</a> -->

  </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function (){
        // $('#form1').submit(function(e) {
        //   e.preventDefault();
        //   $.ajax({
        //        type: "POST",
        //        url: '/employees/ajax_login',
        //        data: $(this).serialize(),
        //        success: function(data)
        //        {
        //           if (data === 'Login') {
        //             window.location = '/user-page.php';
        //           }
        //           else {
        //             alert('Invalid Credentials');
        //           }
        //        }
        //    });
        // });
    })
</script>
@endpush