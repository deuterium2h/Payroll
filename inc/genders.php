<?php
$gender = $_REQUEST['gender'];
switch($gender) {
	case "Mr.":
	echo "Male";
	break;

	case "Mrs.":
	echo "Female";
	break;

	case "Ms.":
	echo "Female";
	break;

	default:
	echo "";
	break;
}
?>