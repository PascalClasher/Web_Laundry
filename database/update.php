<?php

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id 
// variabel contact
$cnt = query("SELECT * FROM contact WHERE id = $id")[0];



// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {


        // cek apakah data berhasil diubah atau tidak
        if( update($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil di ubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1> Update </h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $cnt["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $cnt["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $cnt["email"]; ?>">
            </li>
            <li>
                <label for="message">Message :</label>
                <input type="text" name="message" id="message" value="<?= $cnt["message"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Update </button>
            </li>
        </ul>
        <a href="index.php"> Back </a>
    </form>
   
</body>
</html>