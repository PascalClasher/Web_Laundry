<!DOCTYPE html>
<html>
<head>
    <title>Upload Berkas atau Foto</title>
</head>
<link rel=stylesheet href="../static/css/upload.css" />
<body>
    <div class="upload">
        <h2>Form Unggah Gambar</h2>
        <form class="uploadform" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Unggah" name="submit">
        </form>
        <a href="welcome.php"> Back</a>
    </div>
</body>
</html>


