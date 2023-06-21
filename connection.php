<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "moodmaker";
            
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_eror());
} else {
    echo "Koneksi Berhasil";
}
?>
