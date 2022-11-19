<?php 
include 'koneksi_komen.php';
$id = $_POST['id-new'];
$nama = $_POST['usr-new'];
$usr = $_POST['usrnme-new'];
$pass = $_POST['passwd-new'];

$sql = "UPDATE komentar SET id='$id' , usr='$usr', usrnme='$usrnme', passwd='$passwd' where id='$id'";
if (mysqli_query($conn, $sql)) {
           header("location:tampil_komen.php?pesan=edit");   
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>