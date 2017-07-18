<?php
function sme1($grossPay) {
	if($grossPay >= 00 && $grossPay <= 6250) {
		$taxed = ($grossPay - 6250)*.05 + 0;
		return $taxed;
	} elseif($grossPay >= 6251 && $grossPay <= 7083) {
		$taxed = ($grossPay - 7083)*.10 + 41.67;
		return $taxed;
	} elseif($grossPay >= 7084 && $grossPay <= 8750) {
		$taxed = ($grossPay - 8750)*.15 + 208.33;
		return $taxed;
	} elseif($grossPay >= 8751 && $grossPay <= 12083) {
		$taxed = ($grossPay - 12083)*.20 + 708.33;
		return $taxed;
	} elseif($grossPay >= 12084 && $grossPay <= 17917) {
		$taxed = ($grossPay - 17917)*.25 + 1875;
		return $taxed;
	} elseif($grossPay >= 17918 && $grossPay <= 27083) {
		$taxed = ($grossPay - 27083)*.30 + 4166.67;
	} elseif($grossPay >= 27084 && $grossPay <= 47917) {
		$taxed = ($grossPay - 17917)*.35 + 10416.67;
		return $taxed;
	}
}

?>