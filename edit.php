<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$qry = mysqli_query($koneksi,"SELECT * FROM data WHERE id='$id'");
	$data = mysqli_fetch_array($qry);

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
 </head>
 <body>
 	<form method="post">
 		<input type="number" name="id" value="<?php echo $data['id'] ?>">
 		<br>
 		<input type="text" name="username" value="<?php echo $data['username'] ?>">
 		<br>
 		<input type="password" name="password" value="<?php echo $data['password'] ?>">
 		<br>
 		<select name="level">
 			<option>Admin</option>
 			<option>User</option>
 			<option>Guest</option>
 		</select>
 		<br>	
 		<input type="text" name="fullname" value="<?php echo $data['fullname'] ?>">
 		<br>
 		<input type="submit" name="edit" value="Edit">
 	</form>
 	<?php 
 		if (isset($_POST['edit'])) {
 			$id = $_POST['id'];
 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			$level = $_POST['level'];
 			$fullname = $_POST['fullname'];
 			$tambah = mysqli_query($koneksi, "UPDATE data SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname' WHERE id='$id'");
 		if ($tambah) {
 			?>
 			<script type="text/javascript">
 				alert('Tamabah Data Berhasil ');
 				document.location.href="main.php";
 			</script>
 			<?php
 		}
 		else{
 			echo "yahh gagal";
 		}
 		}
 	 ?>
 </body>
 </html>