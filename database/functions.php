<?php 

// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "uas");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


// Fungsi Hapus data dari database
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM contact WHERE id = $id");

    return mysqli_affected_rows($conn);
}




// Fungsi Update
function update($data) {
    global $conn;

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $query = "UPDATE contact SET
                nama = '$nama',
                email = '$email',
                message = '$message'
            WHERE id = $id
                ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>



