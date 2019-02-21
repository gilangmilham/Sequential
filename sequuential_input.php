<?php
echo "<form action='' method='POST'> Max data = <select name='max' required>
		<option value='10'> 10 </option>
		<option value='100' selected> 100 </option>
		<option value='1000'> 1000 </option>
		<option value='10000'> 10.000 </option>
		<option value='100000'> 100.000 </option>
		<option value='1000000'> 1.000.000 </option>
		<option value='100000000'> 100.000.000 </option>
		<option value='1000000000'> 1.000.000.000 </option> </select>";
echo "<br><input type='text' name='input' placeholder='angka yang ingin dicari' required> <input type='submit' name='submit' value='cari'></form>";
$max = "";
$cari = "";	

if(isset($_POST['submit'])){
$max = $_POST['max'];
$cari = $_POST['input'];	
}

	$awal = microtime();
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
		echo $cari." Ketemu di array[" . $posisi . "]";
	else
		echo $cari." tidak ketemu";
			
	$akhir = microtime();
	$final = $akhir-$awal;
	echo "<br><br> Kompleksitasnya = ".$final;
?>