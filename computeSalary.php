<?php
session_start();
include_once 'inc/functions.php';
connectDB();
if ($_SESSION['username']) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Compute Salary</title>
		<!-- CSS Framework -->
			<!-- Bootstrap Minified CSS -->
			<link rel="stylesheet" href="res/css/bootstrap.min.css">

			<!-- Bootstrap Optional theme -->
			<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">

			<!-- Panel Position -->
			<link rel="stylesheet" href="res/css/panel-pos.css">
			<link rel="icon" href="res/Logo.png" type="image/png">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="res/css/font-awesome.min.css">

			<!-- Custom CSS -->
			<link rel="stylesheet" href="res/css/custom.css"> <!-- Icon Toggle/Body padding -->

		<!-- End of CSS Framework-->
			
			<!-- JQuery Minified JScript -->
			<script src="res/js/jquery-2.1.4.min.js"></script>
			<script src="res/js/ajax.js"></script>
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
				<!-- Area Chart size -->
				<div class="col-md-10">
					<!-- Area Chart Panel -->
					<div class="panel panel-default">
						<div class='panel-heading'>
							<span class="fa fa-money fa-fw text-success"></span> Compute Salary
						</div>
						<div class='panel-body'><br>
							<div class="container-fluid">
								<form name="search" id="search" method="POST" action="printPayout.php">
									<div class="form-horizontal">
										<div class="form-group">
											<label for="searchId" class="col-sm-1 control-label">Search</label>
											<div class="col-sm-4">
												<input type="text" class="form-control"  name="searchId" id="searchId" onkeyup="setEmpName(this.value); setEmpId(this.value); setEmpBankNo(this.value); setEmpCat(this.value); setEmpDept(this.value); setEmpDesig(this.value); setEmpSSS(this.value); setEmpTIN(this.value); setEmpTCode(this.value); setEmpPhilN(this.value); setEmpHDMF(this.value);" placeholder="Enter Employee ID">
											</div>
											<label for="searchMon" class="col-sm-1 col-md-offset-4 control-label">Month</label>
											<div class="col-sm-2">
												<select class='form-control' name="searchMon" id="searchMon" onchange="setHrRTotal(searchId.value, this.value); setHrHTotal(searchId.value, this.value); setHrOTTotal(searchId.value, this.value); setHrOTotal(searchId.value, this.value);">
													<option></option>
													<option value="Jan">January</option>
													<option value="Feb">February</option>
													<option value="Mar">March</option>
													<option value="Apr">April</option>
													<option value="May">May</option>
													<option value="Jun">June</option>
													<option value="Jul">July</option>
													<option value="Aug">August</option>
													<option value="Sep">September</option>
													<option value="Oct">October</option>
													<option value="Nov">November</option>
													<option value="Dec">December</option>
												</select>
											</div>
										</div>
									</div><br>
									<legend>Result</legend>
									<div class="container-fluid">
										<div class="form-horizontal">
											<div class="form-group">
												<div class="col-md-2">
													<label>Employee ID</label>
													<input type="text" class="form-control" name="salEmpId" id="salEmpId" readonly="true">
												</div>
												<div class="col-md-4">
													<label>Employee Name</label>
													<input type="text" class="form-control" name="salEmpName" id="salEmpName" readonly="true">
												</div>
												<div class="col-md-3">
													<label for="salEmpBankNo">Bank Account Number</label>
													<input type="text" class="form-control" name="salEmpBankNo" id="salEmpBankNo" readonly="true">
												</div>
												<div class="col-md-3">
													<label>Employment Category</label>
													<input type="text" class="form-control" name="salEmpCat" id="salEmpCat" readonly="true">
												</div>
											</div>
											<div class="form-group">
												<div class='col-md-6'>
													<label>Department</label>
													<input type="text" class="form-control" name="salEmpDept" id="salEmpDept" readonly="true">
												</div>
												<div class="col-md-4">
													<label>Designation</label>
													<input type="text" class="form-control" name="salEmpDesig" id="salEmpDesig" onmousemove="setEmpRPH(this.value)" readonly="true">
												</div>
												<div class="col-md-2">
													<label>Rate Per Hour</label>
													<input type="text" class="form-control" name="salEmpRPH" id="salEmpRPH" readonly="true">
												</div>
											</div>
											<div class="form-group">
												<div class='col-md-3'>
													<label for="salEmpSSS">Social Security System Number</label>
													<input type="text" class="form-control" name="salEmpSSS" id="salEmpSSS" readonly="true">
												</div>
												<div class="col-md-3">
													<label for="salEmpTIN">Tax Identification Number</label>
													<input type="text" class="form-control" name="salEmpTIN" id="salEmpTIN" readonly="true">
												</div>
												<div class="col-md-2">
													<label for="salEmpTCode">Tax Code</label>
													<input type="text" class="form-control" name="salEmpTCode" id='salEmpTCode' readonly="true">
												</div>
												<div class="col-md-2">
													<label for="salEmpPhilN">PhilHealth Number</label>
													<input type="text" class="form-control" name="salEmpPhilN" id="salEmpPhilN" readonly="true">
												</div>
												<div class="col-md-2">
													<label for="salEmpHDMF">Pag-Ibig Number</label>
													<input type="text" class="form-control" name="salEmpHDMF" id="salEmpHDMF" readonly="true">
												</div>
											</div>
										<legend>Hours</legend>
											<div class="form-group">
												<div class="col-md-3">
													<label>Total Regular Hours</label>
													<input type="text" class="form-control" name="salEmpRTotal" id="salEmpRTotal" readonly="true">
												</div>
												<div class="col-md-3">
													<label>Total Holiday Hours</label>
													<input type="text" class="form-control" name="salEmpHTotal" id="salEmpHTotal" readonly="true">
												</div>
												<div class="col-md-3">
													<label>Total Overtime Hours</label>
													<input type="text" class="form-control" name="salEmpOTTotal" id="salEmpOTTotal" readonly="true">
												</div>
												<div class="col-md-3">
													<label>Overall Total Hours</label>
													<input type="text" class="form-control" name="salEmpOTotal" id="salEmpOTotal" readonly="true">
												</div>
											</div><hr><br>
											<div class="form-group">
												<input type="submit" name="compute" id="compute" class="btn btn-primary btn-block btn-md" value="Compute Salary">
											</div>
										</div>
									</div>
								</form>
							</div><br>
						</div><!--
						<div class='panel-footer clearfix'>
							<button onclick="printPayout('printPayout.php','printPayout','1360','768')" class="btn btn-md btn-block btn-primary">Compute Salary</button>
						</div> -->
					</div> 
				</div> 
			</div> <!-- /Content Layout (row) -->
		</div> <!-- /Site Content (container) -->
	</body>
	<!-- JavaScripts -->

		<!-- Bootstrap Minified JScript -->
		<script src="res/js/bootstrap.min.js"></script>
		<script src="res/js/bootstrapValidator.min.js"></script>
		<script src="res/js/validData.js"></script>
		<script>
			function printPayout(pageURL, title,w,h) {
				var left = (screen.width/2)-(w/2);
				var top = (screen.height/2)-(h/2);
				var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
			}
		</script>
	<!-- End of JavaScripts -->
</html>