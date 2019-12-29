
<?php
// isi nama host, username mysql, dan password mysql anda
/*$host = mysql_connect("localhost","root","");
 
if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("data_mahasiswa");
 
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
*/
// isi nama host, username mysql, dan password mysql anda
//mysql_connect("localhost","root","");
 
// isikan dengan nama database yang akan di hubungkan
//mysql_select_db("data_mahasiswa");

// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "data_mahasiswa";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

?>