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
	$dDeData = mysql_fetch_array($sqls);
	

	?>
	<body>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h4><center>Are you sure you want to Delete this Record?</center></h4>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" name="updDesig" id="updDesig" method="POST">
					
						<div class='form-group'>
							<label for="dDesId" class="control-label">Designation ID</label>
							<input type='text' class="form-control" name="dDesId" id="dDesId" readonly="true" value="<?php echo $dDeData['jobid']; ?>">
						</div>
						<div class='form-group'>
							<label for="dDesName" class="control-label">Designation Name</label>
							<input type='text' class="form-control" name="dDesName" id="dDesName" readonly="true" value="<?php echo $dDeData['jobtitle']; ?>">
						</div>
						<div class='form-group'>
							<label for="dDesRate" class="control-label">Rate Per Hour</label>
							<input type='text' class="form-control" name="dDesRate" id="dDesRate" value="<?php echo $dDeData['jobrate']; ?>">
						</div>
						<div class='form-group'>
							<label for="dDesDesc" class="control-label">Designation Description</label>
							<textarea class="form-control" rows="5" name="dDesDesc" readonly="true" id="dDesDesc"><?php echo $dDeData['jobdesc']; ?></textarea>
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
					$fiDeId = $_POST['dDesId'];
					$fiDeName = mysql_real_escape_string($_POST['dDesName']);
					$fiDeDesc = mysql_real_escape_string($_POST['dDesDesc']);

					$qDelDesig = "DELETE FROM designation WHERE jobid='$fiDeId'";
					if(mysql_query($qDelDesig)) {
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