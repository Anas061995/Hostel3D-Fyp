
<header class="main-header">

<!-- Logo -->
<a href="#" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->

  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"> {{ config('app.name', 'Laravel') }}</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

      <!-- Notifications Menu -->
      <li class="dropdown notifications-menu">
        <!-- Menu toggle button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
    <!--      <span class="label label-warning">10</span> -->
        </a>
        </li>
  <!--     
      <!-- Tasks Menu -->
      <!-- <li class="dropdown tasks-menu">
        <!-- Menu Toggle Button -->
        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-flag-o"></i> -->
        <!--  <span class="label label-danger">9</span> -->
       <!--  </a>
      </li> -->
  -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs"> {{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->

          <!-- Menu Body -->

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="">
           
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->

      <li>
      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </li>
      <li>
        <a href="#" ><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>