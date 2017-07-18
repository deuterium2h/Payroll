<?php
session_start();
include_once 'inc/functions.php';
connectDB();
if ($_SESSION['username']) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Departments</title>
		<!-- CSS Framework -->
			<!-- Bootstrap Minified CSS -->
			<link rel="stylesheet" href="res/css/bootstrap.min.css">

			<!-- Bootstrap Optional theme -->
			<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">

			<!-- Panel Position -->
			<link rel="stylesheet" href="res/css/panel-pos.css">

			<!-- Font Awesome -->
			<link rel="stylesheet" href="res/css/font-awesome.min.css">

			<!-- Custom CSS -->
			<link rel="stylesheet" href="res/css/custom.css"> <!-- Icon Toggle/Body padding -->
			<link rel="icon" href="res/Logo.png" type="image/png">
		<!-- End of CSS Framework-->
			<script src="res/js/ajax.js"></script>
			<!-- JQuery Minified JScript -->
			<script src="res/js/jquery-2.1.4.min.js"></script>
			<!-- NiceScroll JS -->
			<script src="res/js/jquery.nicescroll.js"></script>
			<!-- NiceScroll Script -->
			<script type="text/javascript">
				$(document).ready(function() { 
				    $("html").niceScroll({
				    	cursorwidth: '7px', 
				    	autohidemode: true, 
				    	zindex: 999 
				    });
				});
			</script>

		<!-- Script for IE9 -->
			<!--[if lt IE 9]>
		      <script src="res/js/html5shiv.min.js"></script>
		      <script src="res/js/respond.min.js"></script>
		    <![endif]-->
	</head>
	<style type="text/css">
		textarea {
			resize: none;
		}
	</style>
	<script type="text/javascript">
	onload = function () {
	    onfocus = function () {
	        onfocus = function () {}
	        location.reload (true)
	    }
	}
	</script>
	<body>
		<!-- Navbar -->
		<nav class="nav navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header"> <!-- Navbar brand -->
					<!-- navbar brand icon -->
					<a class="navbar-brand" href="#" title="Home">
						<img style="max-width: 40px;" src="res/Logo.png">
					</a> <!-- /navbar brand icon -->
					<a class="navbar-brand" href="home.php">OnTheJob Payroll System</a>
					
				</div> <!-- /Navbar brand -->
				<div class="container-fluid">
					<p class="navbar-text navbar-right">Welcome, <?php echo $_SESSION['username']; ?></p>
				</div>
				<?php
					} else { 
						die('Access Denied.<br>Please Log in <a href="/system">here</a>.');
					}
				?>
			</div>
		</nav> <!-- /Navbar -->
		<!-- Site Content -->
		<div class="container-fluid"> 
			<!-- Content Layout -->
			<div class="row"> 
				<!-- Accordion size -->
				<div class="col-md-2">
					<!-- Accordion -->
					<div class="panel-group" id="accordion">
						<!-- Panel 1 -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#dshCollapse">
										Add Records
									</a>
								</h4>
							</div>
							<div id="dshCollapse" class="panel-collapse collapse in">
								<div class="panel-body">
									<table class="table">
										<tr>
											<td>
												<span class="glyphicon glyphicon-user"></span><a href="addEmp.php">Add Employee</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="fa fa-building-o fa-fw"  style="color:#F9BF3D"></span><a href="addDept.php"> Add Department</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="glyphicon glyphicon-pushpin text-primary" ></span><a href="addDesig.php">Add Designation</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="glyphicon glyphicon-usd" style="color:green"></span><a href="computeSalary.php">Compute Salary</a>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div> <!-- /Panel 1 -->
						<!-- Panel 2 -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" id="li-toggle" data-toggle="collapse" data-parent="#accordion2" href="#liCollapse">
										Update Records
									</a>
								</h4>
							</div>
							<div id="liCollapse" class="panel-collapse collapse in">
								<div class="panel-body">
									<table class="table">
										<tr>
											<td>
												<span class="glyphicon glyphicon-user"></span><a href="employee.php">Update Employee</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="fa fa-building-o fa-fw text-success"></span><a href="department.php"> Update Department</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="glyphicon glyphicon-pushpin text-warning" style="color:#F9BF3D"></span><a href="designation.php">Update Designation</a>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div> <!-- /Panel 2 -->
						<!-- Panel 3 -->
						<div class="panel panel-default">
							<!-- Panel 3 heading -->
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" id="last-toggle" data-toggle="collapse" data-parent="#accordion3" href="#lastCollapse">
										Account Settings
									</a>
								</h4>
							</div> <!-- /Panel 3 heading -->
							<!-- Panel 3 collapse -->
							<div id="lastCollapse" class="panel-collapse collapse in">
								<!-- Panel 3 body -->
								<div class="panel-body">
									<table class="table">
										<tr>
											<td>
												<span class="glyphicon glyphicon-off" style="color:red"></span><?php echo '<a href="logout.php ">Logout</a>'; ?>
											</td>
										</tr>
									</table>
								</div> <!-- /Panel 3 body -->
							</div> <!-- /Panel 3 collapse -->
						</div> <!-- /Panel 3 -->
					</div>  <!-- /Accordion -->
				</div> <!-- /Accordion size -->
				<!-- Area Chart size -->
				<div class="col-md-10">
					<!-- Area Chart Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="fa fa-building-o fa-fw"></span> Department
						</div> <!-- /Panel Heading -->
						<div class="panel-body">
							<div class="container-fluid">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<thead>
											<th width="8%"><center>ID</center></th>
											<th width="23%"><center>Name</center></th>
											<th><center>Description</center></th>
											<th width="15%"><center>Action</center></th>
										</thead>
										<tbody>
											<?php
											$qDesig = mysql_query("SELECT * FROM department");
											while($result = mysql_fetch_array($qDesig)){
												echo '<tr>
												          <td><center><b>'.$result['deptid'].'</b></center></td>
												          <td><center>'.$result['deptname'].'</center></td>
												          <td><center>'.$result['deptdesc'].'</center></td>
												          <td><center><a class="btn btn-primary btn-sm" href="javascript:window.open(\'updDept.php?id='.$result['deptid'].'\', \'updDept\',\'fullscreen=1, menubar=0\')" target="updDept">Edit</a>&nbsp&nbsp<a href="javascript:window.open(\'delDept.php?id='.$result['deptid'].'\', \'delDept\',\'fullscreen=1, menubar=0\')" target="delDept" class="btn btn-danger btn-sm">Delete</a></center></td>
												      </tr>';
											}
											?>
										</tbody><br>
									</table><br>
								</div>
							</div>
						</div>
						<div class="panel-footer clearfix">
							<h4><center>Select a record to be Updated</center></h4>
						</div>
					</div> 
				</div> 
			</div> <!-- /Content Layout (row) -->
		</div> <!-- /Site Content (container) -->
	</body>
	<!-- JavaScripts -->

		<!-- Bootstrap Minified JScript -->
		<script src="res/js/bootstrap.min.js"></script>
		
	<!-- End of JavaScripts -->
</html>