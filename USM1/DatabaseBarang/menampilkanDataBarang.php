<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>USM | FTIK | Data Barang</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../USMLOGO.png" />
</head>

<body>

    <table class="data-table">
        <h1 class="title">Data Peminjaman Barang FTIK</h1>
        <thead>
            <tr>
                <!-- <th>No</th> -->
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Jenis Barang</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('prosesBarang.php');
				while ($row = mysqli_fetch_array($query))
				echo '
				<tr>
					<td id="text-align-left">'.$row['nama_barang'].'</td>
					<td id="text-align-left">'.$row['jumlah_barang'].'</td>
					<td id="text-align-left">'.$row['jenis_barang'].'</td>
					<td id="text-align-left">'.$row['keterangan'].'</td>
				</tr>
				';?>
        </tbody>
    </table>

    <div style="margin-top: 100px;">
        <center><a href="../index.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                style="background-color: rgb(0, 136, 255); padding: 10px; padding-left: 300px; padding-right: 300px; color: white; border: 2px solid black; text-decoration: none;">Kembali
                Ke Peminjaman Barang</a>
        </center>
    </div>

    <div style="margin-top: 100px;">
        <center><a href="menambahkanBarang.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                style="background-color: rgb(0, 136, 255); padding: 10px; padding-left: 300px; padding-right: 300px; color: white; border: 2px solid black; text-decoration: none;">Tambahkan
                Data Barang</a></center>
    </div>
    <div style="margin-top: 100px;">
        <center><a href="editBarang.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                style="background-color: rgb(0, 136, 255); padding: 10px; padding-left: 300px; padding-right: 300px; color: white; border: 2px solid black; text-decoration: none;">Edit
                Data Barang</a></center>
    </div>
    <div style="margin-top: 100px;">
        <center><a href="hapusDataBarang.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                style="background-color: rgb(0, 136, 255); padding: 10px; padding-left: 300px; padding-right: 300px; color: white; border: 2px solid black; text-decoration: none;">Hapus
                Data Barang</a></center>
    </div>

</body>

</html>