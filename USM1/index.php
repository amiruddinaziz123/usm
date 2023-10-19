<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>USM | FTIK | Pinjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" href="USMLOGO.png" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    body {
        background-image: url(GEDUNGUSM.png);
        background-repeat: no-repeat;
        background-size: cover;
    }

    #navbar {
        width: 100%;
        height: 80px;
        background-color: rgb(0, 136, 255);
    }

    h2 {
        text-align: center;
        padding: 30px;
    }

    #fromulir {
        border: 2px solid black;
        width: 80%;
        background-color: white;
    }

    #fromulir:hover {
        border-radius: 100px;
        animation-name: meradius;
        animation-duration: 0.5s;
    }

    @keyframes meradius {
        0% {
            border-radius: 0px;
        }

        100% {
            border-radius: 30px;
        }
    }

    center {
        margin-top: 20px;
        margin-bottom: 50px;
    }

    form {
        width: 100%;
    }

    label {
        text-align: left;
    }

    img {
        width: 50px;
        margin-top: 12px;
        margin-left: 50px;
    }

    .logo-ftik {
        margin-left: 0px;
        width: 80px;
    }
    </style>
</head>

<body>
    <!-- navbar pembuka -->
    <div id="navbar">
        <img src="USMLOGO.png" alt="Logo Usm">
        <img class="logo-ftik" src="FTIKUSM.png" alt="Logo FTIK Usm">
    </div>
    <!-- navbar penutup -->
    <!-- formulir pembuka -->
    <center>
        <div id="fromulir">
            <h2>Peminjaman Barang</h2>
            <form action="inputPeminjaman.php" method="post" onsubmit="return validateForm()">
                <div class="mb-4 row">
                    <label for="nama_peminjam" style="margin-left: 150px" class="col-sm-3 col-form-label">Nama
                        Peminjam</label>
                    <div class="col-sm-5">
                        <input type="text" name="nama_peminjam" id="nama_peminjam" placeholder="Masukkan Nama"
                            class="form-control" />
                    </div>
                </div>
                <br>

                <div class="mb-4 row">
                    <label for="barang_pinjaman" style="margin-left: 150px"
                        class="col-sm-3 col-form-label">Barang</label>
                    <div class="col-sm-5">
                        <select type="text" name="barang_pinjaman" id="barang_pinjaman" class="form-control">
                            <option value="">Pilih Barang ...</option>
                            <?php
                              include('DatabaseBarang/prosesBarang.php');
                              while ($row = mysqli_fetch_array($query))
                              if ($row['keterangan'] != 'Tidak tersedia'){
                                echo '<option value="'.$row['nama_barang'].'">'.$row['nama_barang'].'</option>';
                              }
                            ?>
                        </select>
                    </div>
                </div>
                <br>

                <div class="mb-4 row">
                    <label for="ruangan_dipinjam" style="margin-left: 150px"
                        class="col-sm-3 col-form-label">Ruangan</label>
                    <div class="col-sm-5">
                        <select type="text" name="ruangan_dipinjam" id="ruangan_dipinjam" class="form-control">
                            <option value="">Pilih Ruangan ...</option>
                        </select>
                    </div>
                </div>
                <!-- </div> -->
                <br>

                <div class="mb-4 row">
                    <label for="prodi_peminjam" style="margin-left: 150px" class="col-sm-3 col-form-label">Prodi</label>
                    <div class="col-sm-5">
                        <input type="text" name="prodi_peminjam" id="prodi_peminjam" placeholder="Masukkaan Prodi"
                            class="form-control" />
                    </div>
                </div>
                <br>


                <div class="mb-4 row">
                    <label for="alamat_peminjam" style="margin-left: 150px"
                        class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text" name="alamat_peminjam" id="alamat_peminjam" placeholder="Masukkan Alamat"
                            class="form-control" />
                    </div>
                </div>
                <br>



                <div class="mb-4 row">
                    <label for="tanggal_peminjaman" style="margin-left: 150px" class="col-sm-3 col-form-label">Tanggal
                        Peminjaman</label>
                    <div class="col-sm-5">
                        <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman"
                            placeholder="Masukkan Tanggal Peminjaman" class="form-control" />
                    </div>
                </div>
                <br>

                <div class="mb-4 row">
                    <label for="jaminan_peminjam" style="margin-left: 150px"
                        class="col-sm-3 col-form-label">Jaminan</label>
                    <div class="col-sm-5">
                        <input type="text" name="jaminan_peminjam" id="jaminan_peminjam" placeholder="Masukkan Jaminan"
                            class="form-control" />
                    </div>
                </div>
                <br>


                <div class="mb-4 row">
                    <label for="nomor_telepon" style="margin-left: 150px" class="col-sm-3 col-form-label">Nomor
                        Telepon</label>
                    <div class="col-sm-5">
                        <input type="varchar" name="nomor_telepon" id="nomor_telepon" placeholder="Masukkan Nomor"
                            class="form-control" maxlength="13" />
                    </div>
                </div>
                <br>

                <div class="mb-4 row" id="pengembalian">
                    <label for="tanggal_pengembalian" style="margin-left: 150px" class="col-sm-3 col-form-label">Tanggal
                        pengembalian</label>
                    <div class="col-sm-5">
                        <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian"
                            placeholder="Masukkan Tanggal Pengembalian" class="form-control" />
                    </div>
                </div>
                <br>

                <div class="mb-4 row" style="margin-top: 30px;">
                    <div class="col-sm-4" style="margin-left: 120px;">
                        <button type="reset"
                            style="background-color: rgb(0, 136, 255); width: 150px; margin-right: 20px; color: white;">Reset</button>
                        <button type="submit" value="submit"
                            style="background-color: rgb(0, 136, 255); width: 150px; color: white;">Submit</button>
                    </div>
                </div>
            </form>

        </div>

    </center>
    <center><a href="LihatData/menampilkanData.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            style="display: block; background-color: rgb(0, 136, 255); width: 600px; border: 2px solid black; padding: 10px; color: white; text-decoration: none;">Lihat
            Data Peminjaman</a></center>
    <center><a href="DatabaseBarang/menampilkanDataBarang.php" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom"
            style="display: block; background-color: rgb(0, 136, 255); width: 600px; border: 2px solid black; padding: 10px; color: white; text-decoration: none;">Lihat
            Data Barang</a></center>
    <!-- formulir penutup -->

    <script src="script.js">
    var checkbox = document.getElementById("beri_tanggal");

    // Ambil elemen div dengan ID 'pengembalian'
    var pengembalianDiv = document.getElementById("pengembalian");

    // Tambahkan event listener untuk mendengarkan perubahan pada checkbox
    checkbox.addEventListener("change", function() {
        // Jika checkbox dicentang, tampilkan div 'pengembalian'
        if (checkbox.checked) {
            pengembalianDiv.style.display = "block";
        } else {
            // Jika checkbox tidak dicentang, sembunyikan div 'pengembalian'
            pengembalianDiv.style.display = "none";
        }
    });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>