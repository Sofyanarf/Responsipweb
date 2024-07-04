<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal_pinjam'];
    $kembali = $_POST['tanggal_kembali'];
   
    $fp = fopen("daftar.txt", "a+");
  
    fputs($fp, "$judul|$nama|$tanggal|$kembali\n");
    fclose($fp);

    echo "Terima kasih sudah mengisi formulir.<br>";
    echo "<a href='index.html'>kembali ke menu</a><br>";
} else {
   
    header("Location: index.html");
    exit();
}
?>
