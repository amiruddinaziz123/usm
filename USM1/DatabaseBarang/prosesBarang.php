<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peminjaman_usm";

$hubungkan = mysqli_connect($servername, $username, $password, $dbname);
if (!$hubungkan) {
die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM `tabel_barang`';

$query = mysqli_query($hubungkan, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($hubungkan));
}
?>