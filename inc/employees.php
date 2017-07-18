<?php
/*include_once 'functions.php';
connectDB();*/
/*
$id = $_POST["selected"];
$query = "SELECT CONCAT(lastname, ', ', firstname) 'Name' FROM employee WHERE empid='".$id."'";
$queried = mysql_query($query);
$result = mysql_fetch_array($queried);
echo $result['Name'];*/

$Id = $_GET['id'];
$con = mysqli_connect('localhost','root','','payroll');
if (!$con) {
	die('cannot connect:'. mysqli_error($con));
}
mysqli_select_db($con,"payroll");
$sql = "SELECT CONCAT(lastname, ', ', firstname) 'Name' FROM employee WHERE empid='".$Id."'";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($res)) {
	echo $row['Name'];
}
mysqli_close($con);
?>