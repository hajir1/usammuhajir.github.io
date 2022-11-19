<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "select *from hajir where id='$id'");
$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="Style/sosmed.css">
    <style>
        .box {
            height: 500px;
            margin-top: 50px;
            
        }
        input {
            font-family: sans-serif;
            margin: 30px auto;
            display: block;
            width: 50%;
            padding: 15px;
            border: 1px solid gray;
            transform: translateY(250%);
        }
        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 100px;
            color: black;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            background: gray;
            transform: translateY(250%);
        }

        button:hover {
            background: black;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <div class="box">
            <div class="login">
                <form action="edit.php" method="post">
                <input type="hidden" value="<?= $id ?>" name="id-new">
                <input type="text" placeholder="Nama Lengkap" name="nama-new" value="<?= $d['nama'] ?>">
                <input type="text" placeholder="Username" name="usr-new" value="<?= $d['user'] ?>">
                <input type="password" placeholder="Password" name="pass-new" value="<?= $d['pass'] ?>">
                <button>Submit</button>
                </form>
            </div>
        </div>
    </center>
</body>
</html>