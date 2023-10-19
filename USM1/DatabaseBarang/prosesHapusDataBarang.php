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

$sql = "DELETE from tabel_barang WHERE nama_barang = '$a'";

if ($conn->query($sql) === TRUE) {
    header("Location: menampilkanDataBarang.php");
    exit();
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>