<?php
$servername = "localhost";
$database = "sistem_pengingat";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>