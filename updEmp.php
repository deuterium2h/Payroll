<!DOCTYPE html>
<html>
<?php
session_start();
include_once('inc/functions.php');
connectDB();
?>
	<head>
		<title>Employee</title>
		<link rel="stylesheet" href="res/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">

	</head>
	<style>
		body {
			padding: 0.8%
		}
		textarea {
			resize: none
		}
	</style>
	
	<?php
	$Id = $_GET['id'];
	$sql = "SELECT * FROM employee WHERE empid='".$Id."'";
	$sqls = mysql_query($sql);
	$uEmpData = mysql_fetch_array($sqls);
	

	?>
	<body>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4><center>Update Employee Information</center></h4>
			</div> <!-- /Panel Heading -->
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updEmp" id="updEmp" method="POST">
						<div class='form-group'>
							<label for="uEmpId" class="control-label">Employee ID</label>
							<input type='text' class="form-control" name="uEmpId" id="uEmpId" readonly="true" value="<?php echo $uEmpData['empid']; ?>">
						</div>
						<div class='form-group'>
							<label for="uEmpName" class="control-label">Employee Name</label>
							<input type='text' class="form-control" name="uEmpName" id="uEmpName" readonly="true" value="<?php echo $uEmpData['lastname'].', '.$uEmpData['firstname'].' '.$uEmpData['middlename']; ?>">
						</div>
						<div class='form-group'>
							<label>Bank Account Number</label>
							<input type="text" class="form-control" name="uEmpBankNo" id="uEmpBankNo" value="<?php echo $uEmpData['bankno'];?>">
						</div>
						<div class="form-group">
							<label class="control-label">Civil Status</label>
							<select name="uEmpStat" id="uEmpStat" class="form-control">
								<option value=""></option>
								<option value="Single">Single</option>
								<option value="In a Relationship">In a Relationship</option>
								<option value="Married">Married</option>
								<option value="Widow/Widower">Widow/Widower</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">Department</label>
							<select id="uEmpDept" name="uEmpDept" class="form-control">
								<option value=""></option>
								<?php
									$qDept = mysql_query("SELECT * FROM department");
									while($result = mysql_fetch_array($qDept)) {
										echo '<option value="'.$result['deptname'].'">'.$result['deptname'].'</option>';
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">Employment Category</label>
							<select id="uEmpCat" name="uEmpCat" class="form-control">
								<option value=""></option>
								<?php
									$qCat = mysql_query("SELECT * FROM category");
									while($result = mysql_fetch_array($qCat)) {
										echo '<option value="'.$result['catname'].'">'.$result['catname'].'</option>';
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">Designation</label>
							<select id="uEmpDesig" name="uEmpDesig" class="form-control">
								<option value=""></option>
								<?php
									$qDesig = mysql_query("SELECT * FROM designation");
									while($result = mysql_fetch_array($qDesig)) {
										echo '<option value="'.$result['jobtitle'].'">'.$result['jobtitle'].'</option>';
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">Tax Identification Number</label>
							<input type="text" id="uEmpTIN" name="uEmpTIN" class="form-control" value="<?php echo $uEmpData['tin'];?>">
						</div>
						<div class="form-group">
							<label class="control-label">Tax Code</label>
							<select name="uEmpTCode" id="uEmpTCode" class="form-control">
								<option></option>
								<option value="S/ME">S/ME</option>
								<option value="ME1/S1">ME1/S1</option>
								<option value="ME2/S2">ME2/S2</option>
								<option value="ME3/S3">ME3/S3</option>
								<option value="ME4/S4">ME4/S4</option>
							</select>
						</div>
						<div class='form-group'>
							<input type="submit" class="btn btn-md btn-block btn-primary" name="update" id="update" value="Confirm Update">
						</div>
					</form>
				</div>
			</div>
			<div class="panel-footer">
			<?php
				if(isset($_POST['update']) == 'Confirm Update') {
					$uEmpBankNo = mysql_real_escape_string($_POST['uEmpBankNo']);
					$uEmpStat = mysql_real_escape_string($_POST['uEmpStat']);
					$uEmpDept = mysql_real_escape_string($_POST['uEmpDept']);
					$uEmpCat = mysql_real_escape_string($_POST['uEmpCat']);
					$uEmpDesig = mysql_real_escape_string($_POST['uEmpDesig']);
					$uEmpTIN = mysql_real_escape_string($_POST['uEmpTIN']);
					$uEmpTCode = mysql_real_escape_string($_POST['uEmpTCode']);

					$qUpdAttend = "UPDATE employee SET bankno='$uEmpBankNo', civilstatus='$uEmpStat', department='$uEmpDept', empcat='$uEmpCat', designation='$uEmpDesig', tin='$uEmpTIN', taxcode='$uEmpTCode' WHERE empid='$Id'";
					if(mysql_query($qUpdAttend)) {
						echo "<script>window:close();</script>";
					} else {
						echo mysql_error();
					}
				}
				?>
			</div>
		</div>
	</body>
	<!-- JQuery -->
	<script src="res/js/jquery-2.1.4.min.js"></script>
	<!-- Nice Scroll -->
	<script src="res/js/jquery.nicescroll.js"></script>
	<!-- Nice Scroll Settings -->
	<script type="text/javascript">
		$(document).ready(function() { 
			$("html").niceScroll({
				cursorwidth: '4px', 
				autohidemode: true, 
				zindex: 999 
			});
		});
	</script>
	<!-- Bootstrap JS -->
	<script src="res/js/bootstrap.min.js"></script>
	<script src="res/js/ajax.js"></script>
</html>