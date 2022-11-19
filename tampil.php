<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<style>
		* {
			text-transform: capitalize;
		}

		body {
			margin: 50px;
		}
	</style>
</head>
<body>
 
	<h2>TABEL</h2>
	<br/>
	<br/>
	<br/>
	<table class="table">
		<tr>
			<th>NO</th>
			<th>ID user</th>
			<th>nama_lengkap</th>
			<th>username</th>
			<th>password</th>
            <th>opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
        $query = mysqli_query($conn, "SELECT *FROM hajir");
        while($d = mysqli_fetch_array($query)) {
        ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id'] ?></td>
				<td><?php echo $d['nama'] ?></td>
				<td><?php echo $d['user'] ?></td>
                <td type="password"><?php echo $d['pass'] ?></td>
				<td><a class="btn" href="input-edit.php?id=<?php echo $d['id']; ?>">edit</a></td>
				<td><a class="btn" href="hapus.php?id=<?php echo $d['id']; ?>">hapus</a></td>
			
			</tr>
			<?php 
		}
		?>
	</table>
	
	<a class="btn btn-block" href="index.html">back</a>
</body>
</html>