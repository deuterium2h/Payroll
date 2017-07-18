<!DOCTYPE html>
<html>
<?php
session_start();
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
	<?php
	$Id = $_GET['id'];
	$sql = "SELECT * FROM attendance WHERE attendid='".$Id."'";
	$sqls = mysql_query($sql);
	$res = mysql_fetch_array($sqls);
	?>
	<body>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4><center>Update Attendance Record</center></h4>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updAttend" id="updAttend" method="POST">
						<div class="form-group">
							<label for="uAttEmpId" class="control-label">Employee ID</label>
							<input class="form-control" name="uAttEmpId" id="uAttEmpId" readonly="true" value="<?php echo $res['empid'];?>">
						</div>

						<div class="form-group">
							<label for="uAttEmpName" class="control-label">Employee Name</label>
							<input class="form-control" name="uAttEmpName" id="uAttEmpName" readonly="true" value="<?php echo $res['empname'];?>">
						</div>
						<div class="form-group">
							<label for="uAttDate" class="control-label">Date</label>
							<input class="form-control" name="uAttDate" id="uAttDate" readonly="true" value="<?php echo $res['date']; ?>"/>
						</div>
						<div class="form-group">
							<label for="uAttType" class="control-label">Attendance Type</label>
							<select class="form-control" name="uAttType" id="uAttType">
								<option></option>
								<option value="Regular">Regular</option>
								<option value="Holiday">Holiday</option>
								<option value="Overtime">Overtime</option>
							</select>
						</div>
						<div class="form-group">
							<label for="uAttLogin" class="control-label">Log-In</label>
							<select class="form-control" name="uAttLogin" id="uAttLogin">
								<option></option>
								<option value="08:00">08:00</option>
								<option value="09:00">09:00</option>
								<option value="10:00">10:00</option>
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
							</select>
						</div>
						<div class="form-group">
							<label for="uAttLogout" class="control-label">Log-Out</label>
							<select class="form-control" name="uAttLogout" id="uAttLogout">
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
							<label for="uAttHours" class="control-label">No. of Hours</label>
							<input class="form-control" name="uAttHours" id="uAttHours" value="<?php echo $res['no_of_hours'];?>"/>
						</div>
						<div class="form-group">
							<label for="uAttRem" class="control-label">Remarks</label>
							<input class="form-control" name="uAttRem" id="uAttRem" value="<?php echo $res['remarks'];?>"/>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-md btn-block btn-primary" id="update" name="update" value="Update">
						</div>
					</form>
				</div>
			</div>
			<div class="panel-footer">
				<?php
				if(isset($_POST['update']) == 'Update') {
					$uAttType = mysql_real_escape_string($_POST['uAttType']);
					$uLogin = mysql_real_escape_string($_POST['uAttLogin']);
					$uLogout = mysql_real_escape_string($_POST['uAttLogout']);
					$uHours = mysql_real_escape_string($_POST['uAttHours']);
					$uRemarks = mysql_real_escape_string($_POST['uAttRem']);

					$qUpdAttend = "UPDATE attendance SET attendance_type='$uAttType', log_in='$uLogin', log_out='$uLogout', no_of_hours='$uHours', remarks='$uRemarks' WHERE attendid='$Id'";
					if(mysql_query($qUpdAttend)) {
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