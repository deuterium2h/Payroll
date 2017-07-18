<?php
function sme2($grossPay) {
	if($grossPay >= 00 && $grossPay <= 8333) {
		$taxed = ($grossPay - 8333)*.05 + 0;
		return $taxed;
	} elseif($grossPay >= 8334 && $grossPay <= 9167) {
		$taxed = ($grossPay - 9167)*.10 + 41.67;
		return $taxed;
	} elseif($grossPay >= 9168 && $grossPay <= 10833) {
		$taxed = ($grossPay - 10833)*.15 + 208.33;
		return $taxed;
	} elseif($grossPay >= 10834 && $grossPay <= 14167) {
		$taxed = ($grossPay - 14167)*.20 + 41.67;
		return $taxed;
	} elseif($grossPay >= 14168 && $grossPay <= 20000) {
		$taxed = ($grossPay - 20000)*.25 + 1875;
		return $taxed;
	} elseif($grossPay >= 20001 && $grossPay <= 29167) {
		$taxed = ($grossPay - 29167)*.30 + 4166.67;
		return $taxed;
	} elseif($grossPay >= 29168 && $grossPay <= 50000) {
		$taxed = ($grossPay - 50000)*.35 + 10416.67;
		return $taxed;
	}
}
?>