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
 
	<center><h3>tabel</h3></center>
	<a class="btn btn-block" href="contact.html">back</a>
	<br/>
	<br>
	<table class="table">
		<tr>
			<th>NAMA</th>
			<th>AKUN GMAIL</th>
			<th>no telp</th>
			<th>message</th>
		</tr>
		<?php 
		include 'koneksi_komen.php';
        $query = mysqli_query($conn, "SELECT *FROM komentar");
        while($d = mysqli_fetch_array($query)) {
        ?>
			<tr>
				
				<td><?php echo $d['id'] ?></td>
				<td><?php echo $d['usr'] ?></td>
				<td><?php echo $d['usrnme'] ?></td>
                <td><?php echo $d['passwd'] ?></td>
                
				<td><a class="btn" href="input_komen-edit.php?id=<?php echo $d['id']; ?>">edit</a></td>
				<td><a class="btn" href="hapus_komen.php?id=<?php echo $d['id']; ?>">hapus</a></td>
			
			</tr>
			<?php 
		}
		?>
	</table>
	
</body>
</html>