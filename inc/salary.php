<?php
/*include 'functions.php';
connectDB();

$id = intval($_GET('id'));
$sql = "SELECT CONCAT(lastname, ', ', firstname) 'Name' FROM employee WHERE empid='".$id."'";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)) {
	echo $row['Name'];
}
mysql_close();*/

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
$sql2 = "SELECT * FROM employee WHERE empid='".$Id."'";
$res2 = mysqli_query($con, $sql2);
while ($row2 = mysqli_fetch_array($res2)) {
	echo $row2['empcat']. ' ';
	echo $row2['department']. ' ';
	echo $row2['designation']. ' ';
	echo $row2['sss']. ' ';
	echo $row2['tin']. ' ';
	echo $row2['philn']. ' ';
	echo $row2['hdmf']. ' ';
}
$sql3 = "SELECT SUM(no_of_hours) 'TotalHours' from attendance WHERE empid='".$Id."'";
$res3 = mysqli_query($con, $sql3) or die(mysqli_error());
while ($row3 = mysqli_fetch_array($res3)) {
	echo $row3['TotalHours'];
}
mysqli_close($con);
?>