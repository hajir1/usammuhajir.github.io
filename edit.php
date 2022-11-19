<?php 
include 'koneksi.php';
$id = $_POST['id-new'];
$nama = $_POST['nama-new'];
$usr = $_POST['usr-new'];
$pass = $_POST['pass-new'];

$sql = "UPDATE hajir SET id='$id' , nama='$nama', user='$usr', pass='$pass' where id='$id'";
if (mysqli_query($conn, $sql)) {
           header("location:tampil.php?pesan=edit");   
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>