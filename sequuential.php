<?php
	$awal = microtime(true);
	$max = 10;
	$cari = 8;	
	$ketemu = false;


	$arr = array();
	for($i=0 ; $i<$max ; $i++){
		Array_push($arr,$i);			// menambah isi array
	}
	shuffle($arr);						// acak isi array

	for ($i=0; $i<count($arr); $i++){
		if($arr[$i] == $cari) {
			$ketemu = true;
			$posisi = $i;
		}
	  }
		
	if($ketemu)
		echo $cari." Ketemu di " . $posisi;
	else
		echo $cari." tidak ketemu";
		
	$akhir = microtime(true);
	$final = $akhir-$awal;
	echo "<br><br>".$final;
?>