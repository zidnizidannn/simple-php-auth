<?php
$host = "#yourhost";
$username = "#yourusername";
$password = "#yourDBpass"; 
$database = "yourDB";

// menghubungkan
$conn = mysqli_connect($host, $username, $password, $database);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>