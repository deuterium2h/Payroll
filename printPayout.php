<!DOCTYPE html>
<html>
<?php
session_start();
include_once('inc/functions.php');
connectDB();
?>
	<head>
		<title>Computed Salary</title>
		<link rel="stylesheet" href="res/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="res/css/font-awesome.min.css">
		<link rel="icon" href="res/Logo.png" type="image/png">

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
	$philno = $_POST['salEmpPhilN'];
	$hdmfno = $_POST['salEmpHDMF'];
	$tin = $_POST['salEmpTIN'];
	$sssno = $_POST['salEmpSSS'];
	$banknum = $_POST['salEmpBankNo'];
	$rph = intval($_POST['salEmpRPH']);
	$regularHr = intval($_POST['salEmpRTotal']);
	$holidayHr = intval($_POST['salEmpHTotal']);
	$otHr = intval($_POST['salEmpOTTotal']);
	$tCode = $_POST['salEmpTCode'];
	$empid = $_POST['salEmpId'];
	$empname = $_POST['salEmpName'];
	$date = date("F ").'30'.date(", Y");
	if($regularHr == '') {
		$regularHr = '&nbsp';
	}
	if($holidayHr == '') {
		$holidayHr = '&nbsp';
	}
	if($otHr == '') {
		$otHr = '&nbsp';
	}
	$empdept = $_POST['salEmpDept'];
	$empdesig = $_POST['salEmpDesig'];
	?>
	<body>
		<div class="panel panel-default">
			<div class="panel-heading">
				Statement of Earnings & Deductions
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<div class="well">
						<div class="form-group col-sm-2">
							<label for="compName" class="control-label">Company Name</label>
							<div id="compName" name="compName">OnTheJob</div>
						</div>
						<div class="form-group col-sm-2">
							<label for="empId" class="control-label">Employee ID</label>
							<div id="empId" name="empId"><?php echo $empid; ?></div>
						</div>
						<div class="form-group col-sm-2">
							<label for="empDept" class="control-label">Department</label>
							<div id="empDept" name="empDept"><?php echo $empdept; ?></div>
						</div>
						<div class="form-group col-sm-2">
							<label for="empDesig" class="control-label">Designation</label>
							<div id="empDesig" name="empDesig"><?php echo $empdesig; ?></div>
						</div>
						<div class='form-group col-sm-2'>
							<label>Employee Name</label>
							<div id="empName" name="empName"><?php echo $empname; ?></div>
						</div>
						<div class='form-group col-sm-2'>
							<label>For the Period Ending</label>
							<div id="date" name="date"><?php echo $date; ?></div>
						</div>
					</div>
					<br>&nbsp<br>&nbsp
					<div class="well">
						<div class="form-group col-sm-2">
							<label for="bankNo" class="control-label">Bank Account Number</label>
							<div id="bankNo" name="bankNo"><?php echo $banknum;?></div>
						</div>
						<div class="form-group col-sm-2">
							<label>SSS Number</label>
							<div id="sss" name="sss"><?php echo $sssno; ?></div>
						</div>
						<div class="form-group col-sm-2">
							<label>TIN</label>
							<div id="tin" name="tin"><?php echo $tin;?></div>
						</div>
						<div class="form-group col-sm-1">
							<label>Tax Code</label>
							<div id="txcode" name="txcode"><?php echo $tCode; ?></div>
						</div>
						<div class="form-group col-md-2">
							<label>PhilHealth Number</label>
							<div id="philh" name="philh"><?php echo $philno; ?></div>
						</div>
						<div class="form-group col-md-3">
							<label>HDMF</label>
							<div id="hdmf" name="hdmf"><?php echo $hdmfno; ?></div>
						</div>
					</div>
					<br>&nbsp<br>&nbsp
					<div class="well">
						<div class="form-group col-sm-3">
							<label for="earnings" class="control-label">Earnings</label>
							<div id="earnings" name="earnings">
								<div>Regular</div>
								<div>Holiday</div>
								<div>Overtime</div>
							</div>
						</div>
						<div class="form-group col-sm-1">
							<label for="hour" class="control-label">Hour</label>
							<div id="hour" name="hour">
								<div><?php echo $regularHr; ?></div>
								<div><?php echo $holidayHr; ?></div>
								<div><?php echo $otHr; ?></div>
							</div>
						</div>
						<div class="form-group col-md-2">
							<label for="amount" class="control-label">Amount</label>
							<div id="amount" name="amount">
								<div><?php echo $reg = ($rph*$regularHr); ?></div>
								<div><?php echo $hol = (($rph*$holidayHr)*2); ?></div>
								<div><?php echo $ot = (($rph*$otHr)*0.3); $gPay = ($reg+$hol+$ot); ?></div>
							</div>
						</div>
						<div class="form-group col-sm-3">
							<label for="deductions" class="control-label">Deductions</label>
							<div id="deductions" name="deductions">
								<div>Withholding Tax</div>
								<div>SSS</div>
								<div>PhilHealth</div>
								<div>Pag-Ibig</div>
							</div>
						</div>
						<div class="form-group col-sm-1">
							<label for="hour" class="control-label">Hour</label>
							<div id="hour" name="hour">
								<div>&nbsp</div>
								<div>&nbsp</div>
								<div>&nbsp</div>
								<div>&nbsp</div>
							</div>
						</div>
						<div class="form-group col-md-2">
							<label for="amount" class="control-label">Amount</label>
							<div id="amount" name="amount">
								<div>
									<?php 
									if($tCode = 'S/ME') {
										echo $taxed = sme($gPay);
									} elseif ($tCode = 'ME1/S1') {
										echo $taxed = sme1($gPay);
									} elseif ($tCode = 'ME2/S2') {
										echo $taxed = sme2($gPay);
									} elseif ($tCode = 'ME3/S3') {
										echo $taxed = sme3($gPay);
									} elseif ($tCode = 'ME4/S4') {
										echo $taxed = sme4($gPay);
									}
									?>
								</div>
								<div>
									<?php
										echo $sss = sss($gPay);
									?>
								</div>
								<div>
									<?php
										echo $phil = '100.00';
									?>
								</div>
								<div>
									<?php 
										echo $hdmf = '100.00';
										$deduc = ($taxed + $sss + $phil + $hdmf);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>&nbsp<br>&nbsp
				<div class="well">
					<div class="col-md-2 col-md-offset-6">
						<label>Total Deductions</label>
					</div>
					<div class='col-md-1 col-md-offset-2'><?php echo $deduc; ?></div>
				</div>
				<br>&nbsp<br>&nbsp
				<div class="well">
					<div class="col-md-2">
						<label>Gross Pay</label>
					</div>
					<div class="col-md-2 col-md-offset-2"><?php echo $gPay;?></div>
					<div class="col-md-2">
						<label>Net Pay</label>
					</div>
					<div class="col-md-2 col-md-offset-2"><?php echo $nPay = ($gPay - $deduc);?></div>
				</div>
			</div>
			<div class="panel-footer clearfix">
				<button class="btn btn-md btn-block btn-success">Print</button>
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