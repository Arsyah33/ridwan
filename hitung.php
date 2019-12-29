<?php
if(isset($_POST['submit'])){
$tinggi=$_POST['tinggi'];
$berat=$_POST['berat'];
$hit1=$tinggi-100;
$ideal=$hit1-($hit1/10);


echo "TINGGI BADAN ANDA :$tinggi cm,<br>";
echo "BERAT BADAN ANDA  :$berat kg,<br><br>";

if ($berat>=2+$ideal||$berat==$ideal||$berat>=$ideal-2)
{
    echo "BERAT BADAN ANDA IDEAL"; 
}
else 
{
    echo "BERAT BADAN ANDA TIDAK IDEAL"; 
}
}
?>