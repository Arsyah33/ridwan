<?php

if(isset($_POST['submit'])){
$Umur = $_POST['umur'];

 
// cara ke - 1
 
if ($Umur >= 0  && $Umur <= 5) { 
	echo " Kamu masih Balita";
}
else if ($Umur >= 6 &&  $Umur <= 16){
	echo " Kamu masih Anak-anak ";
} 
else if ($Umur >= 17 && $Umur <= 50) {
	echo " Anda termasuk Dewasa ";
}
else if ($Umur > 50) {
	echo " Anda termasuk Tua";
}
}
 
// cara ke - 2
 
// 
// if ($bilangan > 0) $status = "positif";
// else if ($bilangan < 0) $status = "negatif";
// else $status = "nol";
 
// echo "<p>Bilangan ".$bilangan." adalah bilangan ".$status."</p>";
 
?>