<?php 
session_start();
include "koneksi.php";
$idnew=$_GET['id'];
$query = "SELECT * FROM data_saudara WHERE id =".$idnew; //get the data that will be updated
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
?>
<form action="updating.php" method="post">
		Id : <input type="text" name="id" value="<?php echo $data['id'];?>">
		<br>
		<br>
		Nama : <input type="text" name="nama" size="40">
		<br>
		<br>
		Alamat : <input type="text"  name="alamat" size="40">
		<br>
		<br>
		Usia : <input type="text"  name="usia" size="2">
		<br>
		<br>
		<input type="submit" name="tambah" value="Update ke database">
	</form>
<br><h2><a href="index.php">Kembali</a>
