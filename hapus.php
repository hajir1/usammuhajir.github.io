<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "delete from hajir where id='$id'";
if (mysqli_query($conn, $sql)) {
      header("location:tampil.php?pesan=hapus");
} else {
      echo "error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>