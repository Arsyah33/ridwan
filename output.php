<?php
$NIM=$_POST['NIM'];
$Nama=$_POST['Nama'];
$Tahun=$_POST['Tahun'];
$Bulan=$_POST['Bulan'];
$jurusan=$_POST['jurusan'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];
$asalsekolah=$_POST['asalsekolah'];

echo "NIM      : $NIM<br>";
echo "Nama     : $Nama<br>";
echo "Lama Study    : $Tahun Tahun $Bulan Bulan<br>";
echo "Jurusan  : $jurusan<br>";
echo "Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "Jenis Kelamin : $JK<br>";
echo "Asal Sekolah : $asalsekolah<br>";
?>