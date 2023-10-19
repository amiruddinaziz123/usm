<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>USM | FTIK | Peminjam</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../USMLOGO.png" />
</head>

<body>

    <table class="data-table">
        <h1 class="title">Data Peminjaman Barang FTIK</h1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Barang</th>
                <th>Ruang</th>
                <th>Prodi Peminjam</th>
                <th>Alamat Peminjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Jaminan Peminjaman</th>
                <th>Nomor Hp</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('proses.php');
				while ($row = mysqli_fetch_array($query))
				echo '
				<tr>
                    <td id="text-align-center">'.$row['id_peminjam'].'</td>
					<td id="text-align-left">'.$row['nama_peminjam'].'</td>
					<td id="text-align-left">'.$row['barang_pinjaman'].'</td>
					<td id="text-align-left">'.$row['ruangan_dipinjam'].'</td>
					<td id="text-align-left">'.$row['prodi_peminjam'].'</td>
					<td id="text-align-left">'.$row['alamat_peminjam'].'</td>
                    <td id="text-align-left">'.$row['tanggal_peminjaman'].'</td>
                    <td id="text-align-left">'.$row['jaminan_peminjam'].'</td>
					<td id="text-align-left">'.$row['nomor_telepon'].'</td>
                    <td id="text-align-left">'.$row['tanggal_pengembalian'].'</td>
				</tr>
				';?>
        </tbody>
    </table>
    <div style="margin-top: 100px;">
        <center><a href="../index.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                style="background-color: rgb(0, 136, 255); padding: 10px; padding-left: 300px; padding-right: 300px; color: white; border: 2px solid black; text-decoration: none;">Kembali
                Ke
                Tambahkan
                Data</a></center>
    </div>

</body>

</html>