<?php
require 'connection.php'; // Menghubungkan ke database (sesuaikan dengan nama file dan lokasi koneksi database)

// Memproses data saat formulir disubmit
if (isset($_POST['subscribe'])) {
    // Mendapatkan nilai email dari formulir
    $email = $_POST['email'];

    // Menyimpan email ke tabel "email"
    $sql = "INSERT INTO email (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        // Menampilkan pesan berhasil
        $successMessage = "Terima kasih atas langganan Anda!";
    } else {
        // Menampilkan pesan kesalahan jika gagal menyimpan email
        $errorMessage = "Terjadi kesalahan. Silakan coba lagi.";
    }
}

$conn->close();
?>