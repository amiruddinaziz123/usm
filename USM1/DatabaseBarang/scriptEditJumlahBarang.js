function validateForm() {
    var namaBarang = document.getElementById("nama_barang").value;
    var jumlahBarang = document.getElementById("jumlah_barang").value;
    var jenisBarang = document.getElementById("jenis_barang").value;
    var keterangan = document.getElementById("keterangan").value;

    if (namaBarang === "" || jumlahBarang === "" || jenisBarang === "" || keterangan === "") {
        alert("Ada Yang Belum Diisi");
        return false;
    }
    
    return true;
}
