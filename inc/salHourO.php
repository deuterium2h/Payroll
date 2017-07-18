<?php
$Id = $_GET['id'];
$M = $_GET['month'];
$Y = date("Y");
$con = mysqli_connect('localhost','root','','payroll');
if (!$con) {
	die('cannot connect:'. mysqli_error($con));
}
mysqli_select_db($con,"payroll");

$sql3 = "SELECT SUM(no_of_hours) 'TotalHours' from attendance WHERE empid='".$Id."' AND date LIKE '".$M."%".$Y."'";
$res3 = mysqli_query($con, $sql3) or die(mysqli_error());
while ($row3 = mysqli_fetch_array($res3)) {
	echo $row3['TotalHours'];
}
mysqli_close($con);