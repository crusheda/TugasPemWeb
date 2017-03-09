<?php
session_start();
if (isset($_SESSION['username'])) {
	# code...
	include "koneksi.php";
	$query = "SELECT * FROM data_saudara";
	$sql = mysql_query($query, $koneksi);
	$jumlah_baris = mysql_num_rows($sql);
	echo "Selamat datang : ".$_SESSION['username'];
	echo "<br><br>";
	echo "Jumlah data : ".$jumlah_baris;
	?>
	<table border=1 cellspacing=0 width="80%">
		<tr>
			<td>id</td>
			<td>nama</td>
			<td>alamat</td>
			<td>usia</td>
			<td>aksi</td>
		</tr>
		<?php if($jumlah_baris==0): ?>
		<tr><td colspan=3>Tidak ada Pesan</td></tr>
		<?php else: ?>
		
		<tr>
			<?php while($data = mysql_fetch_object($sql)): ?>
			<td><?php echo $data->id;?></td>
			<td><?php echo $data->nama;?></td>
			<td><?php echo $data->alamat;?></td>
			<td><?php echo $data->usia;?></td>
				<td>
					<a href="update.php?id=<?php echo $data->id;?>">update</a>  
					<a href="delete.php?id=<?php echo $data->id;?>">delete</a></td>
				</tr>
			<?php endwhile;?>
			<?php endif; ?>
	</table>
	<br>
	<h2><a href="tambah.php">Tambah Data</a>
	<h2><a href="logout.php">Logout</a>
	<?php
}else
{
	?>Anda tidak boleh mengakses halaman ini!<a href="form.php">Login Dulu Gan</a><?php
}
?>



	
	