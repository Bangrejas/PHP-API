<?php 
	include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="6">
				<h3><center>DATA</center></h3>
				<a href="index.php">Tambah</a>
			</td>
		</tr>
		<tr>
			<th>NO</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Opsi</th>
		</tr>
			<?php 
				
				$qry = mysqli_query($koneksi,"SELECT * FROM data");
				while($data = mysqli_fetch_array($qry)){

			 ?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td><?php echo $data['fullname']; ?></td>
			<td>
			<a onclick="return confirm('Yakin untuk menghapus ?')"
			href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
			</td>

		</tr>

	<?php  

}
?>
	</table>
</body>
</html>

