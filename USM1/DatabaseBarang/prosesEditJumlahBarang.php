<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peminjaman_usm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$a = $_POST["nama_barang"];
$b = $_POST["jumlah_barang"];
$c = $_POST["jenis_barang"];
$d = $_POST["keterangan"];

$sql = "UPDATE `tabel_barang` SET `nama_barang` = '$a', `jumlah_barang` = '$b', `jenis_barang` = '$c', `keterangan` = '$d' WHERE `tabel_barang`.`nama_barang` = '$a'";

if ($conn->query($sql) === TRUE) {
    header("Location: menampilkanDataBarang.php");
    exit();
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>