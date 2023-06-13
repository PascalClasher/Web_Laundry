<?php
if(isset($_POST["submit"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah berkas adalah gambar atau bukan
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "Berkas adalah gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Berkas bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Periksa apakah berkas sudah ada di server atau belum
    if (file_exists($targetFile)) {
        echo "Berkas dengan nama yang sama sudah ada di server.";
        $uploadOk = 0;
    }

    // Batasi jenis file yang diizinkan
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Periksa apakah ada kesalahan selama proses pengungahan
    if ($uploadOk == 0) {
        echo "Berkas tidak dapat diunggah.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Berkas " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";
            echo "<br>";
            echo "Gambar yang diunggah:";
            echo "<br>";
            echo "<img src='" . $targetFile . "' alt='uploaded image' width='500' height='250'>";
        } else {
            echo "Terjadi kesalahan saat mengunggah berkas.";
        }
    }
}
?>
<a href="welcome.php"> Back</a>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
    }

    img {
        max-width: 500px;
        height: auto;
        margin-top: 20px;
    }
</style>

