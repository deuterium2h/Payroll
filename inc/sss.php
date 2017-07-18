<?php
function sss($grossPay)  {
	if ($grossPay >= 1000 && $grossPay <= 1249.99) {
		$sssDeduct = 30.30;
		return $sssDeduct;
	} elseif ($grossPay >= 1250.99 && $grossPay <= 1749.99) {
		$sssDeduct = 50.00;
		return $sssDeduct;
	} elseif ($grossPay >= 1750.99 && $grossPay <= 2249.99 ) {
		$sssDeduct = 66.70;
		return $sssDeduct;
	} elseif ($grossPay >= 2250.99 && $grossPay <= 2749.99 ) {
		$sssDeduct = 83.30;
		return $sssDeduct;
	} elseif ($grossPay >= 2750.99 && $grossPay <= 3249.99 ) {
		$sssDeduct = 100.00;
		return $sssDeduct;
	} elseif ($grossPay >= 3250.99 && $grossPay <= 3749.99 ) {
		$sssDeduct = 116.70;
		return $sssDeduct;
	} elseif ($grossPay >= 3750.99 && $grossPay <= 4249.99 ) {
		$sssDeduct = 133.30;
		return $sssDeduct;
	} elseif ($grossPay >= 4250.99 && $grossPay <= 4749.99 ) {
		$sssDeduct = 150.00;
		return $sssDeduct;
	} elseif ($grossPay >= 4750.99 && $grossPay <= 5249.99 ) {
		$sssDeduct = 166.70;
		return $sssDeduct;
	} elseif ($grossPay >= 5250.99 && $grossPay <= 5749.99 ) {
		$sssDeduct = 183.30;
		return $sssDeduct;
	} elseif ($grossPay >= 5750.99 && $grossPay <= 6249.99 ) {
		$sssDeduct = 200.00;
		return $sssDeduct;
	} elseif ($grossPay >= 6250.99 && $grossPay <= 6749.99 ) {
		$sssDeduct = 216.70;
		return $sssDeduct;
	} elseif ($grossPay >= 6750.99 && $grossPay <= 7249.99 ) {
		$sssDeduct = 233.30;
		return $sssDeduct;
	} elseif ($grossPay >= 7250.99 && $grossPay <= 7749.99 ) {
		$sssDeduct = 250.00;
		return $sssDeduct;
	} elseif ($grossPay >= 7750.99 && $grossPay <= 8249.99 ) {
		$sssDeduct = 266.70;
		return $sssDeduct;
	} elseif ($grossPay >= 8250.99 && $grossPay <= 8749.99 ) {
		$sssDeduct = 283.30;
		return $sssDeduct;
	} elseif ($grossPay >= 8750.99 && $grossPay <= 9249.99 ) {
		$sssDeduct = 300.00;
		return $sssDeduct;
	} elseif ($grossPay >= 9250.99 && $grossPay <= 9749.99 ) {
		$sssDeduct = 316.00;
		return $sssDeduct;
	} elseif ($grossPay >= 9750.99 && $grossPay <= 10249.99 ) {
		$sssDeduct = 333.30;
		return $sssDeduct;
	} elseif ($grossPay >= 10250.99 && $grossPay <= 10749.99 ) {
		$sssDeduct = 350.00;
		return $sssDeduct;
	} elseif ($grossPay >= 10750.99 && $grossPay <= 11249.99 ) {
		$sssDeduct = 366.70;
		return $sssDeduct;
	} elseif ($grossPay >= 11250.99 && $grossPay <= 11749.99 ) {
		$sssDeduct = 383.30;
		return $sssDeduct;
	} elseif ($grossPay >= 11750.99 && $grossPay <= 12249.99 ) {
		$sssDeduct = 400.00;
		return $sssDeduct;
	} elseif ($grossPay >= 12250.99 && $grossPay <= 12749.99 ) {
		$sssDeduct = 416.70;
		return $sssDeduct;
	} elseif ($grossPay >= 12750.99 && $grossPay <= 13249.99 ) {
		$sssDeduct = 433.30;
		return $sssDeduct;
	} elseif ($grossPay >= 13250.99 && $grossPay <= 13749.99 ) {
		$sssDeduct = 450.00;
		return $sssDeduct;
	} elseif ($grossPay >= 13750.99 && $grossPay <= 14249.99 ) {
		$sssDeduct = 466.70;
		return $sssDeduct;
	} elseif ($grossPay >= 14250.99 && $grossPay <= 14749.99 ) {
		$sssDeduct = 483.30;
		return $sssDeduct;
	} elseif ($grossPay >= 14750.99) {
		$sssDeduct = 500.0;
		return $sssDeduct;
	}
}

?>