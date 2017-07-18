<?php
session_start();
include_once 'inc/functions.php';
connectDB();
if ($_SESSION['username']) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Employee</title>
		<!-- CSS Framework -->
			<!-- Bootstrap Minified CSS -->
			<link rel="stylesheet" href="res/css/bootstrap.min.css">

			<!-- Bootstrap Optional theme -->
			<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="res/css/bootstrap-datepicker3.min.css">
			<link rel="stylesheet" href="res/css/bootstrapValidator.min.css">

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
							<span class="glyphicon glyphicon-user"></span> Add Employee
						</div> <!-- /Panel Heading -->
						<div class="panel-body">
							<div class="container-fluid">
								<form class="form-horizontal" id="addEmp" name="addEmp" method="POST" date-toggle="validator" role="form"><br>
									<legend>Employee Information</legend>
									<div class="form-group">
										<label for="empid" class="col-md-1 control-label">Employee ID</label>
										<div class="col-md-2">
											<input class="form-control" name="empid" type="text" id="empid">
										</div>
										<label for="salutation" class="col-md-1 control-label">Salutation</label>
										<div class="col-md-2">
											<select class="form-control" name="salutation" id="salutation" onchange="getGender('inc/genders.php?gender='+this.value)">
												<option value=""></option>
												<option value="Mr.">Mr.</option>
												<option value="Mrs.">Mrs.</option>
												<option value="Ms.">Ms.</option>
											</select>
										</div>
										<label for="gender" class="col-md-1 control-label">Gender</label>
										<div class="col-md-2">
											<input type="text" class="form-control" name="gender" id="gender" readonly="true">
										</div>
										<label for="birthday" class="col-md-1 control-label">Birthdate</label>
										<div class="col-md-2" id="empBirthday">
											<input class="form-control" name="birthday" type="text" id="birthday">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-10">Complete Name*</label>
										<div class="col-md-4">
											<input class="form-control" maxlength="25" name="firstname" type="text" id="firstname" placeholder="First Name" required>
										</div>
										<div class="col-md-3">
											<input class="form-control" maxlength="25" name="middlename" type="text" id="middlename" placeholder="Middle Name" required>
										</div>
										<div class="col-md-3">
											<input class="form-control" maxlength="25" name="lastname" type="text" id="lastname" placeholder="Last Name" required>
										</div>
										<label>Bank Account No.</label>
										<div class="col-md-2">
											<input type="" class="form-control" name="bankno" id="bankno" placeholder="2392830184">
 										</div>
									</div>
									<div class="form-group">
										<label for="status" class="col-md-1 control-label">Civil Status</label>
										<div class="col-md-2">
											<select class="form-control" name="status" id="status">
												<option value=""></option>
												<option value="Single">Single</option>
												<option value="In a Relationship">In a Relationship</option>
												<option value="Married">Married</option>
												<option value="Widow/Widower">Widow/Widower</option>
											</select>
										</div>
										<label for="dept" class="col-md-1 control-label">Department</label>
										<div class="col-md-2">
											<select class="form-control" name="dept" id="dept">
												<option value=""></option>
												<?php
													$qDept = mysql_query("SELECT * FROM department");
													while($result = mysql_fetch_array($qDept)) {
														echo '<option value="'.$result['deptname'].'">'.$result['deptname'].'</option>';
													}
												?>
											</select>
										</div>
										<label for="empcat" class="col-md-1 control-label">Employment Category</label>
										<div class="col-md-2">
											<select class="form-control" name="empcat" id="empcat">
												<option value=""></option>
												<?php
													$qCat = mysql_query("SELECT * FROM category");
													while($result = mysql_fetch_array($qCat)) {
														echo '<option value="'.$result['catname'].'">'.$result['catname'].'</option>';
													}
												?>
											</select>
										</div>
										<label for="designation" class="col-md-1 control-label">Designation</label>
										<div class="col-md-2">
											<select class="form-control" name="designation" id="designation">
												<option value=""></option>
												<?php
													$qDesig = mysql_query("SELECT * FROM designation");
													while($result = mysql_fetch_array($qDesig)) {
														echo '<option value="'.$result['jobtitle'].'">'.$result['jobtitle'].'</option>';
													}
												?>
											</select>
										</div>
									</div>
									<legend>Contact Details</legend>
									<div class="form-group">
										<label class="col-md-10">Email Address(es)</label>
										<div class="col-md-6">
											<input class="form-control" name="email1" type="email" id="email1" placeholder="username1@example.com" required>
										</div>
										<div class="col-md-6">
											<input class="form-control" name="email2" type="email" id="email2" placeholder="username2@example.com">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-10">Telephone Number(s)</label>
										<div class="col-md-6">
											<input class="form-control" name="phone1" type="text" id="phone1" placeholder="XXX-XX-XX">
										</div>
										<div class="col-md-6">
											<input class="form-control" name="phone2" type="text" id="phone2" placeholder="XXX-XX-XX">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-10">Mobile Number(s)</label>
										<div class="col-md-6">
											<input class="form-control" name="mobile1" type="text" id="mobile1" placeholder="XXXX-XXX-XXXX">
										</div>
										<div class="col-md-6">
											<input class="form-control" name="mobile2" type="text" id="mobile2" placeholder="+XX-XXX-XXX-XXXX">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-10">Address(es)</label>
										<div class="col-md-6">
											<textarea class="form-control" rows="6" cols="3" maxlength="255" name="address1" type="text" id="address1"></textarea>
										</div>
										<div class="col-md-6">
											<textarea class="form-control" rows="6" cols="3" maxlength="255" name="address2" type="text" id="address2"></textarea>
										</div>
									</div>
									<legend>Mandatory Deductions</legend>
									<div class="form-group">
										<div class="col-md-2">
											<input class="form-control" name="sss" type="text" id="sss" placeholder="SSS Number">
										</div>
										<div class="col-md-3">
											<input class="form-control" name="tin" type="text" id="tin" placeholder="Tax Identification Number">
										</div>
										<label for="taxcode" class="col-md-1">Tax Code</label>
										<div class='col-md-2'>
											<select class="form-control" name="taxcode" id="taxcode">
												<option></option>
												<option value="S/ME">S/ME</option>
												<option value="ME1/S1">ME1/S1</option>
												<option value="ME2/S2">ME2/S2</option>
												<option value="ME3/S3">ME3/S3</option>
												<option value="ME4/S4">ME4/S4</option>
											</select>
										</div>
										<div class="col-md-2">
											<input class="form-control" name="philhealth" type="text" id="philhealth" placeholder="PhilHealth Number">
										</div>
										<div class="col-md-2">
											<input class="form-control" name="pagibig" type="text" id="pagibig" placeholder="HDMF Number">
										</div>
									</div>
									<input class="btn btn-primary btn-block" type="submit" name="add" id="add" value="Add"><br>
								</form>
							</div>
						</div>
						<div class="panel-footer">
							<?php
							if(isset($_POST["add"]) == "Add") {
								$empId = $_POST['empid'];
								$salut = $_POST['salutation'];
								$gendr = $_POST['gender'];
								$bDate = $_POST['birthday'];
								$fName = $_POST['firstname'];
								$mName = $_POST['middlename'];
								$lName = $_POST['lastname'];
								$stats = $_POST['status'];
								$deprt = $_POST['dept'];
								$empCg = $_POST['empcat'];
								$desig = $_POST['designation'];
								$addr1 = $_POST['address1'];
								$addr2 = $_POST['address2'];
								$mail1 = $_POST['email1'];
								$mail2 = $_POST['email2'];
								$tele1 = $_POST['phone1'];
								$tele2 = $_POST['phone2'];
								$cell1 = $_POST['mobile1'];
								$cell2 = $_POST['mobile2'];
								$sssNo = $_POST['sss'];
								$tiNum = $_POST['tin'];
								$taxCd = $_POST['taxcode'];
								$phlNo = $_POST['philhealth'];
								$ibgNo = $_POST['pagibig'];
								$bnkNo = $_POST['bankno'];
								$hireD = $date = date("F d, Y");
								if (($_POST['address2']) == '' || ($_POST['email2']) == '' || ($_POST['phone2']) == '' || ($_POST['mobile2']) == '') {
									$addr2 = ' ';
									$mail2 = ' ';
									$tele2 = ' ';
									$cell2 = ' ';
								}

								$queryEmp = "INSERT INTO employee(empid,department,designation,empcat,salutation,firstname,middlename,lastname,birthdate,civilstatus,gender,address1,address2,phone1,phone2,mobile1,mobile2,email1,email2,sss,tin,taxcode,philn,hdmf,bankno,hiredate) VALUES('".$empId."','".$deprt."','".$desig."','".$empCg."','".$salut."','".$fName."','".$mName."','".$lName."','".$bDate."','".$stats."','".$gendr."','".$addr1."','".$addr2."','".$tele1."','".$tele2."','".$cell1."','".$cell2."','".$mail1."','".$mail2."','".$sssNo."','".$tiNum."','".$taxCd."','".$phlNo."','".$ibgNo."','".$bnkNo."','".$hireD."')";

								if(mysql_query($queryEmp)) {
									echo 'Employee Added!';
								} elseif(mysql_errno() == 1062) {
									echo '<center>Employee ID already in the Database</center>';
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
		<script src="res/js/bootstrap-datepicker.min.js"></script>
		<script src="res/js/bootstrapValidator.min.js"></script>
		<script src="res/js/validDataEmp.js"></script>
		<script type="text/javascript">
			$('#empBirthday input').datepicker({
				format: "M. d, yyyy",
				startDate: "01/01/1955",
				endDate: "12/31/1997",
				startView: 2
			})
		</script>
	<!-- End of JavaScripts -->
</html>