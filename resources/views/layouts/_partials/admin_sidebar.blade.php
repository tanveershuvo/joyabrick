<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('adminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{ url('/test') }}" class="nav-link {{ Request::is('test') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<!--Session Details links -->
				<li class="nav-item">
                    <a href="{{ url('/season') }}" class="nav-link {{ Request::is('season') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Session Details</p>
                    </a>
                </li>
				<!--Employee Details links -->
				<li class="nav-item has-treeview">
					<a href="{{ url('/employee_details') }}" class="nav-link {{ Request::is('employee_details') ? 'active' : '' }}">
					  <i class="nav-icon fas fa-id-card"></i>
					  <p>
						Employee Details
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
					  <li class="nav-item">
						<a href="{{ url('/employee_details') }}" class="nav-link {{ Request::is('employee_details') ? 'active' : '' }}">
						  <i class="far fa-user nav-icon"></i>
						  <p>Assign Employee</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="{{ url('/employee_Unpaid') }}" class="nav-link {{ Request::is('employee_Unpaid') ? 'active' : '' }}">
						  <i class="fas fa-dollar-sign nav-icon"></i>
						  <p>Employee's Unpaid Salary</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="{{ url('/employee_Paid') }}" class="nav-link {{ Request::is('employee_Paid') ? 'active' : '' }}">
						  <i class="fas fa-money-bill-wave nav-icon"></i>
						  <p>Employee's Paid Salary</p>
						</a>
					  </li>
					</ul>
	  			</li>
				<!--Available Products Details links -->
				<li class="nav-item">
                    <a href="{{ url('/product_avail') }}" class="nav-link {{ Request::is('product_avail') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p> Available Products</p>
                    </a>
                </li>
				<!--Customer Details links -->
				<li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon far fa-user"></i>
                        <p>Customer Details</p>
                    </a>
                </li>
				<!--Sorder/Foreman Details links -->
				<li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Sorder/Foreman Details</p>
                    </a>
                </li>
				<!--All Expense Details links -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-eject"></i>
					  <p>
						All Expense Details
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-cog nav-icon"></i>
						  <p>Machinary Details</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-donate nav-icon"></i>
						  <p>Donation</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-fire nav-icon"></i>
						  <p>Jalani Details</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-file-invoice-dollar nav-icon"></i>
						  <p>Office Expense</p>
						</a>
					  </li>
					</ul>
	  			</li>
				<!--Update Password links -->
				<li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>Update Password</p>
                    </a>
                </li>
				<!--All Reports links -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
					  <i class="nav-icon fas fa-eye"></i>
					  <p>
						All Reports
						<i class="fas fa-angle-left right"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-balance-scale nav-icon"></i>
						  <p>Cost Benefit Analysis Report</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-hand-holding-usd nav-icon"></i>
						  <p>Income Report</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="far fa-money-bill-alt nav-icon"></i>
						  <p>Expense Report</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="#" class="nav-link">
						  <i class="fas fa-chart-line nav-icon"></i>
						  <p>Product Sales Report</p>
						</a>
					  </li>
					</ul>
	  			</li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
