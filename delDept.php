<!DOCTYPE html>
<html>
<?php
session_start();
include_once('inc/functions.php');
connectDB();
?>
	<head>
		<title>Designation</title>
		<link rel="stylesheet" href="res/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="res/css/font-awesome.min.css">

	</head>
	<style>
		body {
			padding: 0.8%
		}
		textarea {
			resize: none
		}
	</style>
	<script type="text/javascript">
	onload = function() {
		onfocus = function() {
			onfocus = function() {}
			location.reload(true)
		}
	}
	</script>
	<?php
	$Id = $_GET['id'];
	$sql = "SELECT * FROM department WHERE deptid='".$Id."'";
	$sqls = mysql_query($sql);
	$dDeptData = mysql_fetch_array($sqls);
	

	?>
	<body>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h4><center>Are you sure you want to Delete this Record?</center></h4>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updDept" id="updDept" method="POST">
					
						<div class='form-group'>
							<label for="uDeptId" class="control-label">Designation ID</label>
							<input type='text' class="form-control" name="uDeptId" id="uDeptId" readonly="true" value="<?php echo $dDeptData['deptid']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDeptName" class="control-label">Designation Name</label>
							<input type='text' class="form-control" name="uDeptName" id="uDeptName" readonly="true" value="<?php echo $dDeptData['deptname']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDeptDesc" class="control-label">Designation Description</label>
							<textarea class="form-control" rows="5" name="uDeptDesc" id="uDeptDesc" readonly="true"><?php echo $dDeptData['deptdesc']; ?></textarea>
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
					$fiDeptId = $_POST['uDeptId'];
					$fiDeptName = mysql_real_escape_string($_POST['uDeptName']);
					$fiDeptDesc = mysql_real_escape_string($_POST['uDeptDesc']);

					$qDelDept = "DELETE FROM department WHERE deptid='$fiDeptId'";
					if(mysql_query($qDelDept)) {
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
</html>