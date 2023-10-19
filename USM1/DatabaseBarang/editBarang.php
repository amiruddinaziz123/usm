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
            <h2>Edit Barang</h2>
            <form action="prosesEditJumlahBarang.php" method="post" onsubmit="return validateForm()">
                <div class="mb-4 row">
                    <label for="nama_barang" style="margin-left: 150px" class="col-sm-3 col-form-label">Barang</label>
                    <div class="col-sm-5">
                        <select type="text" name="nama_barang" id="nama_barang" class="form-control">
                            <option value="">Pilih Barang ...</option>
                            <?php
                              include('prosesBarang.php');
                              while ($row = mysqli_fetch_array($query))
                              echo '<option value="'.$row['nama_barang'].'">'.$row['nama_barang'].'</option>';
                            ?>
                        </select>
                    </div>
                </div>
                <br>

                <div class="mb-4 row">
                    <label for="jumlah_barang" style="margin-left: 150px" class="col-sm-3 col-form-label">Jumlah
                        Barang</label>
                    <div class="col-sm-5">
                        <input type="number" min="0" name="jumlah_barang" id="jumlah_barang"
                            placeholder="Masukkan Jumlah Barang" class="form-control" />
                    </div>
                </div>
                <br>

                <div class="mb-4 row">
                    <label for="jenis_barang" style="margin-left: 150px" class="col-sm-3 col-form-label">Jenis
                        Barang</label>
                    <div class="col-sm-5">
                        <select name="jenis_barang" id="jenis_barang" class="form-control">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Nonelektronik">Nonelektronik</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="mb-4 row">
                    <label for="keterangan" style="margin-left: 150px"
                        class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-5">
                        <select name="keterangan" id="keterangan" class="form-control">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak tersedia">Tidak tersedia</option>
                        </select>
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
    <center><a href="menampilkanDataBarang.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            style="background-color: rgb(0, 136, 255); padding: 10px; padding-left: 300px; padding-right: 300px; color: white; border: 2px solid black; text-decoration: none;">Lihat
            Data Barang</a></center>
    <!-- formulir penutup -->
    <script src="script.js">

    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>