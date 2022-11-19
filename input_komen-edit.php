<?php
include 'koneksi_komen.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "select *from komentar where id='$id'");
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
                <form action="edit_komen.php" method="post">
                <input type="text" placeholder="Nama" value="<?= $id ?>" name="id-new">
                <input type="text" placeholder="Email" name="usr-new" value="<?= $d['usr'] ?>">
                <input type="text" placeholder="No.hp" name="usrnme-new" value="<?= $d['usrnme'] ?>">
                <input type="text" placeholder="Message" name="passwd-new" value="<?= $d['passwd'] ?>">
                <button>Submit</button>
                </form>
            </div>
        </div>
    </center>
</body>
</html>