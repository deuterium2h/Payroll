<?php
function sme3($grossPay) {
	if($grossPay >= 10417 && $grossPay <= 11250) {
		$taxed = ($grossPay - 10417)*.05 + 0;
		return $taxed;

	} elseif($grossPay >= 11251 && $grossPay <= 15000) {
		$taxed = ($grossPay - 11250)*.10 + 41.67;
		return $taxed;
	
	} elseif($grossPay >= 15001 && $grossPay <= 12917) {
		$taxed = ($grossPay - 12917)*.15 + 208.33;
		return $taxed;
	

	} elseif($grossPay >= 12918 && $grossPay <= 22083) {
		$taxed = ($grossPay - 16250)*.20 + 708.33;
		return $taxed;
	
	} elseif($grossPay >= 22084 && $grossPay <= 31250) {
		$taxed = ($grossPay - 11250)*.25 + 1875;
		return $taxed;
	

	} elseif($grossPay >= 31251 && $grossPay <= 52083) {
		$taxed = ($grossPay - 31250)*.30 + 4166.67;
		return $taxed;
	
	} elseif($grossPay >= 52084) {
		$taxed = ($grossPay - 52083)*.32 + 10416.67;
		return $taxed;
	} else {
	}
}
?>