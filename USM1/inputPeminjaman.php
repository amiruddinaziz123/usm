<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peminjaman_usm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $idPeminjam = $_POST["id_peminjam"];
$namaPeminjam = $_POST["nama_peminjam"];
$nomorTelepon = $_POST["nomor_telepon"];
$alamatPeminjam = $_POST["alamat_peminjam"];
$prodiPeminjam = $_POST["prodi_peminjam"];
$tanggalPeminjaman = $_POST["tanggal_peminjaman"];
$jaminanPeminjaman = $_POST["jaminan_peminjam"];
$tanggalPengembalian = $_POST["tanggal_pengembalian"];
$barangPinjaman = $_POST["barang_pinjaman"];
$ruanganDipinjam = $_POST["ruangan_dipinjam"];

$jenisBarang = '';
$jumlahBarang = '';

if ($barangPinjaman == 'camera' || $barangPinjaman == 'microphone' || $barangPinjaman == 'kabel') {
    $jenisBarang = 'elektronik';
} else {
    $jenisBarang = 'nonelektronik';
}

$sql = "INSERT INTO tabel_peminjaman (id_peminjam, nama_peminjam, nomor_telepon, alamat_peminjam, prodi_peminjam, tanggal_peminjaman, jaminan_peminjam, tanggal_pengembalian, barang_pinjaman, ruangan_dipinjam) VALUES ('$idPeminjam', '$namaPeminjam', '$nomorTelepon', '$alamatPeminjam', '$prodiPeminjam', '$tanggalPeminjaman', '$jaminanPeminjaman', '$tanggalPengembalian', '$barangPinjaman', '$ruanganDipinjam')";

if ($conn->query($sql) === TRUE) {
    header("Location: LihatData/menampilkanData.php");
    exit();
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>