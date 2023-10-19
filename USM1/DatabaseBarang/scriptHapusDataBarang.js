function validateForm() {
    var namaBarang = document.getElementById("nama_barang").value;

    if (namaBarang === "") {
        alert("Ada Yang Belum Diisi");
        return false;
    }
    
    return true;
}
