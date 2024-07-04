<?php
echo "<head><title>Formulir Peminjaman Buku</title></head>";

$fp = fopen("daftar.txt", "r");

if ($fp) {
    echo "<table border='1'>";
    while (!feof($fp)) {
        $isi = fgets($fp);
        if (!empty($isi)) {
            $pisah = explode("|", $isi);
            if (count($pisah) >= 4) {
                echo "<tr><td>Judul Buku</td><td>: $pisah[0]</td></tr>";
                echo "<tr><td>Nama</td><td>: $pisah[1]</td></tr>";
                echo "<tr><td>Tanggal Pinjam</td><td>: $pisah[2]</td></tr>";
                echo "<tr><td>Tanggal Pengembalian</td><td>: $pisah[3]</td></tr>";
                echo "<tr><td colspan='2'><hr></td></tr>";
            }
        }
    }
    echo "</table>";
    fclose($fp);
} else {
    echo "Gagal membuka file daftar.txt";
}
?>
