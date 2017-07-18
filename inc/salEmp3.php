<?php
$Id = $_GET['id'];
$con = mysqli_connect('localhost','root','','payroll');
if (!$con) {
	die('cannot connect:'. mysqli_error($con));
}
mysqli_select_db($con,"payroll");
$sql2 = "SELECT * FROM employee WHERE empid='".$Id."'";
$res2 = mysqli_query($con, $sql2);
while ($row2 = mysqli_fetch_array($res2)) {
	echo $row2['designation'];
}
?>