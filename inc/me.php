<?php
function sme($grossPay) {
	if($grossPay >= 00  && $grossPay <= 4167) {
		$taxed = ($grossPay - 4167)*.05 + 0;
		return $taxed;
	} elseif($grossPay >= 4168 && $grossPay <= 5000) {
		$taxed = ($grossPay - 5000)*.10 + 41.67;
		return $taxed;
	} elseif($grossPay >= 50001 && $grossPay <= 6667) {
		$taxed = ($grossPay - 6667)*.15 + 208.33;
		return $taxed;
	} elseif($grossPay >= 6668 && $grossPay <= 10000) {
		$taxed = ($grossPay - 10000)*.20 + 708.33;
		return $taxed;
	} elseif($grossPay >= 10001 && $grossPay <= 15833) {
		$taxed = ($grossPay - 13333)*.25 + 1875;
		return $taxed;
	} elseif($grossPay >= 15834 && $grossPay <= 25000) {
		$taxed = ($grossPay - 25000)*.30 + 10416.67;
		return $taxed;
	}
}
?>