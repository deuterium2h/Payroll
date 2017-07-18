<?php
$Id = $_GET['id'];
$con = mysqli_connect('localhost','root','','payroll');
if (!$con) {
	die('cannot connect:'. mysqli_error($con));
}
mysqli_select_db($con,"payroll");
$sql1 = "SELECT CONCAT(lastname, ', ', firstname) 'Name' FROM employee WHERE empid='".$Id."'";
$res1 = mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($res1)) {
	if(($row1['Name']) == 'Dimacuha, Dan Emmanuel') {
		echo $row1['Name']. ' is Pogi <3';
	} else {
		echo $row1['Name'];
	}
}
?>