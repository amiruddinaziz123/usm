<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peminjaman_usm";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
FROM tabel_peminjaman';

$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>