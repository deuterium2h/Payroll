<?php
if (isset($_POST['action'])) {
	switch ($_POST['action']) {
		case 'upd':
		fillForm();
		break;
		case 'del':
		getID();
		break;
	}
}

function fillForm() {

}
function getID() {
	
}
?>