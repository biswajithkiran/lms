<header class="main-header">

    <!-- Logo -->
    <a href="{{URL('/agent')}}" class="logo">
      <span class="logo-mini"><b>LMS</b></span>
      <span class="logo-lg"><b>LMS</b></span> 
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
                <img src="{{URL::asset('uploads/users/admin11.png')}}" class="user-image" alt="User Image">
                
              <span class="hidden-xs">
                @if(session()->get('agent_name')) {{session()->get('agent_name')}}@else Guest @endif
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
                <img src="{{URL::asset('uploads/users/admin11.png')}}" class="img-circle" alt="User Image">
                
                <p>
                  @if(session()->get('agent_name')) {{session()->get('agent_name')}}@else Guest @endif
                  <small>Member since <?php echo date('M . Y', strtotime(session()->get('join_date')));?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{url('/agent/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>

    </nav>
  </header>