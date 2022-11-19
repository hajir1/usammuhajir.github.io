<?php
$id = $_POST['yourname'];
$nama = $_POST['email'];
$user = $_POST['no'];
$pass = $_POST['message'];

include 'koneksi_komen.php';
$sql = "INSERT INTO komentar (id, usr, usrnme, passwd) VALUES ('$id', '$nama', '$user', '$pass')";

if (mysqli_query($conn, $sql)) {
      ?><center>
            <h1>Data Berhasil Disimpan</h1>
            <a class="btn btn-block" href="tampil_komen.php">Lihat Data</a><br><br>
            <a class="btn btn-block" href="contact.html">back</a>
            </center>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>