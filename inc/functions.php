<?php

function connectDB() {
	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$db = 'payroll';
	mysql_connect($host,$user,$pass) or die('Cannot connect to database');
	mysql_select_db($db);
}
function closeDB() {
	mysql_close();
}
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
function sss($grossPay)  {
	if ($grossPay >= 1000 && $grossPay <= 1249.99) {
		$sssDeduct = '30.30';
		return $sssDeduct;
	} elseif ($grossPay >= 1250.99 && $grossPay <= 1749.99) {
		$sssDeduct = '50.00';
		return $sssDeduct;
	} elseif ($grossPay >= 1750.99 && $grossPay <= 2249.99 ) {
		$sssDeduct = '66.70';
		return $sssDeduct;
	} elseif ($grossPay >= 2250.99 && $grossPay <= 2749.99 ) {
		$sssDeduct = '83.30';
		return $sssDeduct;
	} elseif ($grossPay >= 2750.99 && $grossPay <= 3249.99 ) {
		$sssDeduct = '100.00';
		return $sssDeduct;
	} elseif ($grossPay >= 3250.99 && $grossPay <= 3749.99 ) {
		$sssDeduct = '116.70';
		return $sssDeduct;
	} elseif ($grossPay >= 3750.99 && $grossPay <= 4249.99 ) {
		$sssDeduct = '133.30';
		return $sssDeduct;
	} elseif ($grossPay >= 4250.99 && $grossPay <= 4749.99 ) {
		$sssDeduct = '150.00';
		return $sssDeduct;
	} elseif ($grossPay >= 4750.99 && $grossPay <= 5249.99 ) {
		$sssDeduct = '166.70';
		return $sssDeduct;
	} elseif ($grossPay >= 5250.99 && $grossPay <= 5749.99 ) {
		$sssDeduct = '183.30';
		return $sssDeduct;
	} elseif ($grossPay >= 5750.99 && $grossPay <= 6249.99 ) {
		$sssDeduct = '200.00';
		return $sssDeduct;
	} elseif ($grossPay >= 6250.99 && $grossPay <= 6749.99 ) {
		$sssDeduct = '216.70';
		return $sssDeduct;
	} elseif ($grossPay >= 6750.99 && $grossPay <= 7249.99 ) {
		$sssDeduct = '233.30';
		return $sssDeduct;
	} elseif ($grossPay >= 7250.99 && $grossPay <= 7749.99 ) {
		$sssDeduct = '250.00';
		return $sssDeduct;
	} elseif ($grossPay >= 7750.99 && $grossPay <= 8249.99 ) {
		$sssDeduct = '266.70';
		return $sssDeduct;
	} elseif ($grossPay >= 8250.99 && $grossPay <= 8749.99 ) {
		$sssDeduct = '283.30';
		return $sssDeduct;
	} elseif ($grossPay >= 8750.99 && $grossPay <= 9249.99 ) {
		$sssDeduct = '300.00';
		return $sssDeduct;
	} elseif ($grossPay >= 9250.99 && $grossPay <= 9749.99 ) {
		$sssDeduct = '316.00';
		return $sssDeduct;
	} elseif ($grossPay >= 9750.99 && $grossPay <= 10249.99 ) {
		$sssDeduct = '333.30';
		return $sssDeduct;
	} elseif ($grossPay >= 10250.99 && $grossPay <= 10749.99 ) {
		$sssDeduct = '350.00';
		return $sssDeduct;
	} elseif ($grossPay >= 10750.99 && $grossPay <= 11249.99 ) {
		$sssDeduct = '366.70';
		return $sssDeduct;
	} elseif ($grossPay >= 11250.99 && $grossPay <= 11749.99 ) {
		$sssDeduct = '383.30';
		return $sssDeduct;
	} elseif ($grossPay >= 11750.99 && $grossPay <= 12249.99 ) {
		$sssDeduct = '400.00';
		return $sssDeduct;
	} elseif ($grossPay >= 12250.99 && $grossPay <= 12749.99 ) {
		$sssDeduct = '416.70';
		return $sssDeduct;
	} elseif ($grossPay >= 12750.99 && $grossPay <= 13249.99 ) {
		$sssDeduct = '433.30';
		return $sssDeduct;
	} elseif ($grossPay >= 13250.99 && $grossPay <= 13749.99 ) {
		$sssDeduct = '450.00';
		return $sssDeduct;
	} elseif ($grossPay >= 13750.99 && $grossPay <= 14249.99 ) {
		$sssDeduct = '466.70';
		return $sssDeduct;
	} elseif ($grossPay >= 14250.99 && $grossPay <= 14749.99 ) {
		$sssDeduct = '483.30';
		return $sssDeduct;
	} elseif ($grossPay >= 14750.99) {
		$sssDeduct = '500.00';
		return $sssDeduct;
	}
}
?>