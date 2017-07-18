<?php
$Id = $_GET['id'];
$type = 'Holiday';
$M = $_GET['month'];
$Y = date("Y");
$con = mysqli_connect('localhost','root','','payroll');
if (!$con) {
	die('cannot connect:'. mysqli_error($con));
}
mysqli_select_db($con,"payroll");

$sql3 = "SELECT SUM(no_of_hours) 'HolHours' from attendance WHERE empid='".$Id."' AND attendance_type='".$type."' AND date LIKE '".$M."%".$Y."'";
$res3 = mysqli_query($con, $sql3) or die(mysqli_error());
while ($row3 = mysqli_fetch_array($res3)) {
	echo $row3['HolHours'];
}
mysqli_close($con);
?>