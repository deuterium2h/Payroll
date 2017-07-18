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
	<?php
	$Id = $_GET['id'];
	$sql = "SELECT * FROM department WHERE deptid='".$Id."'";
	$sqls = mysql_query($sql);
	$uDeptData = mysql_fetch_array($sqls);
	

	?>
	<body>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<span class="fa fa-building-o fa-fw"></span>&nbsp&nbspUpdate Department
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updDept" id="updDept" method="POST">
					
						<div class='form-group'>
							<label for="uDeptId" class="control-label">Designation ID</label>
							<input type='text' class="form-control" name="uDeptId" id="uDeptId" readonly="true" value="<?php echo $uDeptData['deptid']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDeptName" class="control-label">Designation Name</label>
							<input type='text' class="form-control" name="uDeptName" id="uDeptName" value="<?php echo $uDeptData['deptname']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDeptDesc" class="control-label">Designation Description</label>
							<textarea class="form-control" rows="5" name="uDeptDesc" id="uDeptDesc"><?php echo $uDeptData['deptdesc']; ?></textarea>
						</div>
						<div class='form-group'>
							<input type="submit" class="btn btn-md btn-block btn-primary" name="update" id="update" value="Update">
						</div>
					</form>
				</div>
			</div>
			<div class="panel-footer">
				<?php
				if(isset($_POST['update']) == 'Update') {
					$fiDeptId = $_POST['uDeptId'];
					$fiDeptName = mysql_real_escape_string($_POST['uDeptName']);
					$fiDeptDesc = mysql_real_escape_string($_POST['uDeptDesc']);

					$qUpdDept = "UPDATE department SET deptname='$fiDeptName', deptdesc='$fiDeptDesc' WHERE deptid='$fiDeptId'";
					if(mysql_query($qUpdDept)) {
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