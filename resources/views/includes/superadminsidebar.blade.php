<aside class="main-sidebar">


    <section class="sidebar">


      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <!-- Status -->
          <a href="#"><i class=" text-success"></i> Status</a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">

        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>DashBoard</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Hostels</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('superadmin.hostels')}}">Registered Hostels</a></li>
            <li><a href="{{route('superadmin.hostelspayment')}}">Hostels Payment</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('superadmin.hosteladmins')}}">Hostel Admins</a></li>
            <li><a href="{{route('superadmin.visitors')}}">Registered Visitors</a></li>
          </ul>
        </li>
		 <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Requests</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('superadmin.registrationrequests')}}">Registration</a></li>
            <li><a href="{{route('superadmin.updaterequests')}}">Update Requests</a></li>
          </ul>
        </li>

		<li><a href="{{route('superadmin.hostelsresidents')}}"><i class="fa fa-link"></i> <span>Residents</span></a></li>
    <li><a href="{{route('superadmin.reviews')}}"><i class="fa fa-link"></i> <span>Reviews</span></a></li>
		<li><a href="{{route('superadmin.reports')}}"><i class="fa fa-link"></i> <span>Reports</span></a></li>
		<li><a href="{{route('superadmin.history')}}"><i class="fa fa-link"></i> <span>History</span></a></li>
      </ul>

    </section>

  </aside>