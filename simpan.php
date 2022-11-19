<?php
$id = $_POST['id-input'];
$nama = $_POST['nama-input'];
$user = $_POST['user-input'];
$pass = $_POST['pass-input'];

include 'koneksi.php';
$sql = "INSERT INTO hajir (id, nama, user, pass) VALUES ('$id', '$nama', '$user', '$pass')";

if (mysqli_query($conn, $sql)) {
      ?><center>
            <h1>Data Berhasil Disimpan</h1>
            <a class="btn btn-block" href="tampil.php">Lihat Data</a><br><br>
            <a class="btn btn-block" href="index.html">back</a>
            </center>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>