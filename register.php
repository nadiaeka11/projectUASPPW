<?php
require 'connection.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO account (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: Sign In.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}