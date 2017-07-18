<?php
session_start();
include_once 'inc/functions.php';
connectDB();
if ($_SESSION['username']) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Department</title>
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
				<div class="col-md-10">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-user"></span> Add Department
						</div> <!-- /Panel Heading -->
						<div class="panel-body">
							<div class="container-fluid">
								<form class="form-horizontal" id="addDept" name="addDept" method="POST"><br>
									<div class="form-group">
										<label for="deptNo" class="col-md-2">Department ID</label>
										<div class="col-md-3">
											<input type="text" name="deptNo" id="deptNo" class="form-control" placeholder="XX">
										</div>
										<label for="deptName" class="col-md-2 col-md-offset-1 control-label">Department Name</label>
										<div class="col-md-4">
											<input type="text" name="deptName" id="deptName" class="form-control" placeholder="Executive">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-10">Department Description</label>
										<div class="col-md-12">
											<textarea name="deptDesc" id="deptDesc" class="form-control" maxlength="255" rows="4" placeholder="CEO, COO, OIC, etc."></textarea>
										</div>
									</div>
									<input class="btn btn-primary btn-block" type="submit" id="AddDept" name="AddDept" value="Add"><br>
								</form>
							</div>
						</div>
						<div class="panel-footer">
							<?php
							if(isset($_POST["AddDept"]) == "Add") {
								$deptId = $_POST['deptNo'];
								$deptName = $_POST['deptName'];
								$deptDesc = $_POST['deptDesc'];

								$queryDept = "INSERT INTO department(deptid,deptname,deptdesc) VALUES ('".$deptId."','".$deptName."','".$deptDesc."')";

								if(mysql_query($queryDept)) {
									echo 'Department Added!';
								} elseif(mysql_errno() == 1062) {
									echo '<center>Department ID already in the Database</center>';
								} else {
									echo mysql_error();
								}
							}
							?>
						</div>
					</div> 
				</div> 
			</div> <!-- /Content Layout (row) -->
		</div> <!-- /Site Content (container) -->
	</body>
	<!-- JavaScripts -->

		<!-- Bootstrap Minified JScript -->
		<script src="res/js/bootstrap.min.js"></script>
		<script src="res/js/bootstrapValidator.min.js"></script>
		<script src="res/js/validDataDept.js"></script>
		
	<!-- End of JavaScripts -->
</html>