<?php
include 'koneksi_komen.php';
$id = $_GET['id'];

$sql = "delete from komentar where id='$id'";
if (mysqli_query($conn, $sql)) {
      header("location:tampil_komen.php?pesan=hapus");
} else {
      echo "error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>