<!DOCTYPE html>
<html>
<?php
include_once('inc/functions.php');
connectDB();
?>
	<head>
		<title>Employee</title>
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
	$sql = "SELECT * FROM employee WHERE empid='".$Id."'";
	$sqls = mysql_query($sql);
	$dEmpData = mysql_fetch_array($sqls);
	?>
	<body>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h4><center>Are you sure you want to delete the selected record?</center></h4>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updDesig" id="updDesig" method="POST">
						<div class='form-group'>
							<label for="dEmpId" class="control-label">Employee ID</label>
							<input type='text' class="form-control" name="dEmpId" id="dEmpId" readonly="true" value="<?php echo $dEmpData['empid']; ?>">
						</div>
						<div class='form-group'>
							<label for="dEmpName" class="control-label">Designation Name</label>
							<input type='text' class="form-control" name="dEmpName" id="dEmpName" readonly="true" value="<?php echo $dEmpData['lastname'].', '.$dEmpData['firstname'].' '.$dEmpData['middlename']; ?>">
						</div>
						<div class='form-group'>
							<input type="submit" class="btn btn-md btn-block btn-danger" name="delete" id="delete" value="Confirm Delete">
						</div>
					</form>
				</div>
			</div>
			<div class="panel-footer">
				<?php
				if(isset($_POST['delete']) == 'Confirm Delete') {
					$fiEmpId = $_POST['dEmpId'];
					$fiEmpName = mysql_real_escape_string($_POST['dEmpName']);

					$qDelEmp = "DELETE FROM employee WHERE empid='$fiEmpId'";
					if(mysql_query($qDelEmp)) {
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
	<script src="res/js/validDataEmp.js"></script>
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