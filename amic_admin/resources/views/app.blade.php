<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Amic Manila 2017</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{ asset('/resources/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/resources/dist/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/resources/plugins/iCheck/square/blue.css') }}">
  <link rel="stylesheet" href="{{ asset('/resources/dist/css/skins/_all-skins.min.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('/resources/plugins/datatables/dataTables.bootstrap.css') }}"> -->
  
  <link rel="stylesheet" href="{{ asset('/resources/dist/table_css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/resources/dist/table_css/buttons.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/resources/loading/css/loading.css') }}">
 


</head>
	@if (Auth::guest())
	<body class="hold-transition login-page fixed">
		<div class="content">
			<nav class="navbar navbar-default">
								<div class="container-fluid">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle Navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand" href="admin.amicmanila2017.net">AMIC Manila 2017</a>
									</div>
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav navbar-right">

									<li><a href="{{ url('/password/email') }}">Forgot Your Password?</a></li>
									<!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
										</ul>
									</div>
								</div>
			</nav>
		@yield('content')
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-footer">
				<p align="center"><a href="{{ url('../public') }}"><img src="{{ asset('resources/img/header_web.png')}}" class="img-responsive hidden-xs hidden-sm"></a></p>
				</div>
			</div>
		</nav>
		</div>
		
	@else
	<body class="hold-transition skin-blue fixed sidebar-mini">
	<header class="main-header">

		<!-- Logo -->
		<a href="{{ url('home') }}" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>AMIC</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>AMIC </b> MNL</span>
		</a>

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user" aria-hidden="true" alt="User Image" class="user-image"></i>
				<span class="hidden-xs"> {{ Auth::user()->name }} </span>
				</a>
				<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header">
				<img src="{{ asset('\resources\dist\img\avatar5.png') }}" class="img-circle" alt="User Image">
					<p>
					<font color="black"> {{ Auth::user()->name }} <br>
					<small>{{ Auth::user()->type }}</small> </font>
					</p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="pull-left">
					<a href="#" class="btn btn-default btn-flat">Settings</a>
					</div>
					<div class="pull-right">
					<a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
					</div>
				</li>
				</ul>
			</li>
			
			</ul>
		</div>

		</nav>
  </header>

  <!-- Main Header -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('\resources\dist\img\avatar5.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <i class="fa fa-wrench" aria-hidden="true"></i> {{ Auth::user()->type }}
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Control Panel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('home') }}"><i class="fa fa-circle-o"></i>Home</a></li>
            <li><a href="{{ url('dash') }}"><i class="fa fa-circle-o"></i>Settings</a></li>
            @if($user->type == 'SUPERUSER')
            <li><a href="{{ url('user') }}"><i class="fa fa-circle-o"></i>Users</a></li>
            @endif
          </ul>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="{{ url('../public') }}" target="_blank"><i class="fa fa-circle-o text-aqua"></i> <span>Go to amicmanila2017.net</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  	<div class="content-wrapper">
  	@if($user->type != 'REQUEST')
		@yield('content')
	@else
		<div class="col-md-16">
			<h2 align="center"><b>PLEASE WAIT THE ADMINISTRATOR <br />TO ACTIVATE YOUR ACCOUNT!</b></h2><br />
		</div>
	@endif
		</div>
	
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		</div>
		<strong>Copyright &copy; <a href="http://www.amicmanila2017.net">AmicManila2017</a>.</strong> All rights
		reserved. 
  	</footer>

	<div class="control-sidebar-bg"></div>

	</div>
	@endif

	<script src="{{ asset('/resources/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('/resources/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/resources/plugins/iCheck/icheck.min.js') }}"></script>
	
	@yield('script')

    <script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(document).ready(function() {
			$('#example1').DataTable( {
			scrollX: true,
			/* dom: 'Bfrtip',
			"buttons": [
				'excel', 'pdf', 'print',
				] */
			} );
		});

		function Paid_Up(ctrl){
			var check = "paid_id="+ $(ctrl).val() + "&status=" + $(ctrl).is(':checked');
				$.ajax({
					type: 'POST',
					url: './PaidUpdate',
					data: check,
					success: function() {
						if($(ctrl).is(':checked') == true) {
							$('#response' + $(ctrl).val()).text("PAID");
						}
						else {
							$('#response' + $(ctrl).val()).text("NOT PAID");
						}

						$('#check_'+$(ctrl).val()).prop('checked', $(ctrl).is(':checked'));
						$('#myModal').modal('hide');

					}
				});
		}
		
		function Attend_Up(ctrl){
			var check = "attend_id="+ $(ctrl).val() + "&status=" + $(ctrl).is(':checked');
				$.ajax({
					type: 'POST',
					url: './AttendUpdate',
					data: check,
					success: function() {
						console.log(check);
						if($(ctrl).is(':checked') == true) {
							$('#attendstat' + $(ctrl).val()).text("YES");
						}
						else {
							$('#attendstat' + $(ctrl).val()).text("NO");
						}
						$('#attendCheck_'+$(ctrl).val()).prop('checked', $(ctrl).is(':checked'));
						$('#myModal').modal('hide');
					}
				});
		}

	</script>

	
	<!-- FastClick -->
	<script src="{{ asset('/resources/plugins/fastclick/fastclick.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('/resources/dist/js/app.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('/resources/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<!-- jvectormap -->
	<script src="{{ asset('/resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('/resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="{{ asset('/resources/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="{{ asset('/resources/plugins/chartjs/Chart.min.js') }}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- <script src="{{ asset('/resources/dist/js/pages/dashboard2.js') }}"></script> -->
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('/resources/dist/js/demo.js') }}"></script>

	<script src="{{ asset('/resources/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/resources/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	
	
	<script src="{{ asset('/resources/export_js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('/resources/export_js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('/resources/export_js/jszip.min.js') }}"></script>
	<script src="{{ asset('/resources/export_js/pdfmake.min.js') }}"></script>
	<script src="{{ asset('/resources/export_js/vfs_fonts.js') }}"></script>
	<script src="{{ asset('/resources/export_js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('/resources/export_js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('/resources/loading/js/pace.min.js') }}"></script>

</body>
</html>
