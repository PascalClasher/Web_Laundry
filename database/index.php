<?php 

require 'functions.php';
$contact = query("SELECT * FROM contact");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Data Contact </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            /* color: #333; */
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 80%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h1> Data Contact </h1>

    <a href="../Web/welcome.php"> Tambah Data Contact</a>
    <br /> <br />


    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $contact as $row)  : ?>
    <tr>
        <td> <?= $i ?> </td>
        <td>
            <a href="update.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="delete.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin?');">hapus</a>
        </td>
        <td><?= $row["nama"]; ?></td> 
        <td><?= $row["email"]; ?></td>
        <td><?= $row["message"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>