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
	$sql = "SELECT * FROM designation WHERE jobid='".$Id."'";
	$sqls = mysql_query($sql);
	$uDeData = mysql_fetch_array($sqls);
	

	?>
	<body>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-user"></span>&nbsp&nbspUpdate Designation
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updDesig" id="updDesig" method="POST">
					
						<div class='form-group'>
							<label for="uDesId" class="control-label">Designation ID</label>
							<input type='text' class="form-control" name="uDesId" id="uDesId" readonly="true" value="<?php echo $uDeData['jobid']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDesName" class="control-label">Designation Name</label>
							<input type='text' class="form-control" name="uDesName" id="uDesName" value="<?php echo $uDeData['jobtitle']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDesRate" class="control-label">Rate Per Hour</label>
							<input type='text' class="form-control" name="uDesRate" id="uDesRate" value="<?php echo $uDeData['jobrate']; ?>">
						</div>
						<div class='form-group'>
							<label for="uDesDesc" class="control-label">Designation Description</label>
							<textarea class="form-control" rows="5" name="uDesDesc" id="uDesDesc"><?php echo $uDeData['jobdesc']; ?></textarea>
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
					$fiDeId = $_POST['uDesId'];
					$fiDeName = mysql_real_escape_string($_POST['uDesName']);
					$fiDeDesc = mysql_real_escape_string($_POST['uDesDesc']);
					$fiDeRate =  mysql_real_escape_string($_POST['uDesRate']);

					$qUpdDesig = "UPDATE designation SET jobtitle='$fiDeName', jobrate='$fiDeRate', jobdesc='$fiDeDesc' WHERE jobid='$fiDeId'";
					if(mysql_query($qUpdDesig)) {
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