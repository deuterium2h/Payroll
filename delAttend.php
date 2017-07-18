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
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h4><center>Are you sure you want to Delete this Record?</center></h4>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="delAttend" id="delAttend" method="POST">
						<div class="form-group">
							<label for="dAttEmpId" class="control-label">Employee ID</label>
							<input class="form-control" name="dAttEmpId" id="dAttEmpId" readonly="true" value="<?php echo $res['empid'];?>">
						</div>

						<div class="form-group">
							<label for="dAttEmpName" class="control-label">Employee Name</label>
							<input class="form-control" name="dAttEmpName" id="dAttEmpName" readonly="true" value="<?php echo $res['empname'];?>">
						</div>
						<div class="form-group">
							<label for="dAttDate" class="control-label">Date</label>
							<input class="form-control" name="dAttDate" id="dAttDate" readonly="true" value="<?php echo $res['date']; ?>"/>
						</div>
						<div class="form-group">
							<label for="dAttType" class="control-label">Attendance Type</label>
							<input class="form-control" name="dAttType" id="dAttType" readonly="true" value="<?php echo $res['attendance_type'];?>">
						</div>
						<div class="form-group">
							<label for="dAttLogin" class="control-label">Log-In</label>
							<input class="form-control" name="dAttLogin" id="dAttLogin" readonly="true" value="<?php echo $res['log_in'];?>">
						</div>
						<div class="form-group">
							<label for="dAttLogout" class="control-label">Log-Out</label>
							<input class="form-control" name="dAttLogout" id="dAttLogout" readonly="true" value="<?php echo $res['log_out'];?>">
						</div>
						<div class="form-group">
							<label for="dAttHours" class="control-label">No. of Hours</label>
							<input class="form-control" name="dAttHours" id="dAttHours" readonly="true" value="<?php echo $res['no_of_hours'];?>"/>
						</div>
						<div class="form-group">
							<label for="dAttRem" class="control-label">Remarks</label>
							<input class="form-control" name="dAttRem" id="dAttRem" readonly="true" value="<?php echo $res['remarks'];?>"/>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-md btn-block btn-danger" id="delete" name="delete" value="Confirm Delete">
						</div>
					</form>
				</div>
			</div>
			<div class="panel-footer">
				<?php
				if(isset($_POST['delete']) == 'Confirm Delete') {
					$qDelAttend = "DELETE FROM attendance WHERE attendid='$Id'";
					if(mysql_query($qDelAttend)) {
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