<?php
function sme4($grossPay) {
	if($grossPay >= 12500 && $grossPay <= 13332) {
		$taxed = ($grossPay - 10417)*.05 + 0;
		return $taxed;
	} elseif($grossPay >= 13333 && $grossPay <= 15099) {
		$taxed = ($grossPay - 13333)*.10 + 41.67;
		return $taxed;
	} elseif($grossPay >= 15000 && $grossPay <= 18332) {
		$taxed = ($grossPay - 15000)*.15 + 208.33;
		return $taxed;
	} elseif($grossPay >= 18333 && $grossPay <= 24166) {
		$taxed = ($grossPay - 18333)*.20 + 708.33;
		return $taxed;
	} elseif($grossPay >= 24167 && $grossPay <= 33332) {
		$taxed = ($grossPay - 24167)*.25 + 1875;
		return $taxed;
	} elseif($grossPay >= 33333 && $grossPay <= 54166) {
		$taxed = ($grossPay - 33333)*.30 + 4166.67;
		return $taxed;
	} elseif($grossPay >= 54167) {
		$taxed = ($grossPay - 54167)*.32 + 10416.67;
		return $taxed;
	} else {
	}
}
?>