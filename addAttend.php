<!DOCTYPE html>
<html>
<?php
include_once('inc/functions.php');
connectDB();
?>
	<head>
		<title>Attendance</title>
		<link rel="stylesheet" href="res/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">
		<script src="res/js/jquery-2.1.4.min.js"></script>
		<script src='res/js/ajax.js'></script>
	</head>
	<style>
		body {
			padding: 0.8%
		}
		textarea {
			resize: none
		}
	</style>
	
	<body>
		<div class="panel panel-default">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-user"></span> Add Attendance
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="addAttend" id="addAttend" method="POST">
						<div class="form-group">
							<label for="aAttEmpId" class="control-label">Employee ID</label>
							<select class="form-control" name="aAttEmpId" id="aAttEmpId" onchange="getName(this.value)">
								<option></option>
								<?php
								$qEmpID = mysql_query("SELECT empid FROM employee");
								while($result = mysql_fetch_array($qEmpID)) {
									echo '<option value="'.$result['empid'].'">'.$result['empid'].'</option>';
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="aAttEmpName" class="control-label">Employee Name</label>
							<input class="form-control" name="aAttEmpName" id="aAttEmpName" readonly="true">
						</div>
						<div class="form-group">
							<label for="aAttDate" class="control-label">Date</label>
							<input class="form-control" name="aAttDate" id="aAttDate" readonly="true" value="<?php echo date("M. d, Y");?>"/>
						</div>
						<div class="form-group">
							<label for="aAttType" class="control-label">Attendance Type</label>
							<select class="form-control" name="aAttType" id="aAttType">
								<option></option>
								<option value="Regular">Regular</option>
								<option value="Holiday">Holiday</option>
								<option value="Overtime">Overtime</option>
							</select>
						</div>
						<div class="form-group">
							<label for="aAttLogin" class="control-label">Log-In</label>
							<select class="form-control" name="aAttLogin" id="aAttLogin">
								<option></option>
								<option value="08:00">08:00</option>
								<option value="09:00">09:00</option>
								<option value="10:00">10:00</option>
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
							</select>
						</div>
						<div class="form-group">
							<label for="aAttLogout" class="control-label">Log-Out</label>
							<select class="form-control" name="aAttLogout" id="aAttLogout">
								<option></option>
								<option value="08:00">08:00</option>
								<option value="09:00">09:00</option>
								<option value="10:00">10:00</option>
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
								<option value="13:00">13:00</option>
								<option value="14:00">14:00</option>
								<option value="15:00">15:00</option>
								<option value="16:00">16:00</option>
								<option value="17:00">17:00</option>
								<option value="18:00">18:00</option>
								<option value="19:00">19:00</option>
								<option value="20:00">20:00</option>
								<option value="21:00">21:00</option>
								<option value="22:00">22:00</option>
								<option value="23:00">23:00</option>
								<option value="00:00">00:00</option>
							</select>
						</div>
						<div class="form-group">
							<label for="aAttHours" class="control-label">No. of Hours</label>
							<input class="form-control" name="aAttHours" id="aAttHours"/>
						</div>
						<div class="form-group">
							<label for="aAttRem" class="control-label">Remarks</label>
							<input class="form-control" name="aAttRem" id="aAttRem"/>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-md btn-block btn-success" id="add" name="add" value="Add">
						</div>
					</form>
				</div>
			</div>
			<div class="panel-footer">
				<?php
				if(isset($_POST['add']) == 'Add') {
					$aEmpId = $_POST['aAttEmpId'];
					$aEmpName = $_POST['aAttEmpName'];
					$aDate = $_POST['aAttDate'];
					$aAttType = $_POST['aAttType'];
					$aLogin = $_POST['aAttLogin'];
					$aLogout = $_POST['aAttLogout'];
					$aHours = $_POST['aAttHours'];
					$aRemarks = $_POST['aAttRem'];
					if(($_POST['aAttRem']) == '') {
						$aRemarks == 'Ok';
					}
					$qAttend = "INSERT INTO attendance(empid, empname, date, attendance_type, log_in, log_out, no_of_hours, remarks) 
					VALUES('".$aEmpId."', '".$aEmpName."', '".$aDate."', '".$aAttType."', '".$aLogin."', '".$aLogout."', '".$aHours."', '".$aRemarks."')";
					if(mysql_query($qAttend)) {
						echo "<script>window:close();</script>";
					} else {
						mysql_error();
					}
				}
				?>
			</div>
		</div>
	</body>
	<!-- JQuery -->
	
	<!-- Nice Scroll -->
	<script src="res/js/jquery.nicescroll.js"></script>
	<!-- Nice Scroll Settings -->
	<script src="res/js/bootstrapValidator.min.js"></script>
	<script src="res/js/validDataAttend.js"></script>
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
</html>