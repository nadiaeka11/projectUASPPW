<?php
require 'connection.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: ProjectUAS.html");
} else {
    echo "<script>alert('Username atau Password Anda Salah. Silahkan Coba Login Kembali.');</script>";
    header("Location: Sign In.html?login_failed=true");
}
?>
