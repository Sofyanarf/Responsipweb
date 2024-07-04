function formulir() {
    var judul = document.getElementById("judul").value.trim();
    var nama = document.getElementById("nama").value.trim();
    var tglpinjam = document.getElementById("tanggal_pinjam").value.trim();
    var tglkembali = document.getElementById("tanggal_kembali").value.trim();

    if (judul === "") {
        alert("Judul harus diisi!");
        return false;
    }

    if (nama === "") {
        alert("Nama harus diisi!");
        return false;
    }

    if (tglpinjam === "") {
        alert("Tanggal Pinjam harus diisi!");
        return false;
    }

    if (tglkembali === "") {
        alert("Tanggal Kembali harus diisi!");
        return false;
    }

    alert(`Judul: ${judul}\nNama: ${nama}\nTanggal Pinjam: ${tglpinjam}\nTanggal Kembali: ${tglkembali}`);

    return true;
}