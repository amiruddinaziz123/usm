function validateForm() {
    var namaPeminjam = document.getElementById("nama_peminjam").value;
    var nomorTelepon = document.getElementById("nomor_telepon").value;
    var alamatPeminjam = document.getElementById("alamat_peminjam").value;
    var prodiPeminjam = document.getElementById("prodi_peminjam").value;
    var tanggalPeminjaman = document.getElementById("tanggal_peminjaman").value;
    var jaminanPeminjaman = document.getElementById("jaminan_peminjam").value;
    var tanggalPengembalian = document.getElementById("tanggal_pengembalian").value;
    var barangPinjaman = document.getElementById('barang_pinjaman').value;
    var ruanganDipinjam = document.getElementById('ruangan_dipinjam').value;

    if (namaPeminjam === "" || nomorTelepon === "" || alamatPeminjam === "" || prodiPeminjam === "" || tanggalPeminjaman === "" || jaminanPeminjaman === "" || tanggalPeminjaman === "") {
        alert("Ada Yang Belum Diisi");
        return false;
    }
    
    return true;
    
}
