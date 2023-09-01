<?php
echo "<h1> TOKO PEGADAIAN SYARIAH</h2>";
echo "<p> JI Keadilan No 16<br>";
echo "<p>Telp. 72353459<br>";
echo "======================================";

echo "<p> Program Perhitungan Besaran Angsuran <br>";
class PerhitunganAngsuran
{
    //properti dalam class PerhitunganAngsuran
    var $besarPinjaman = 1000000;
    var $besarBungaPersen = 10;
    var $lamaAngsuran = 5;

    //adalah method dalam class PerhitunganAngsuran
    public function hitungBesaranAngsura($besarPinjaman, $besarBungaPersen, $lamaAngsuran)
    {
        $this->besarPinjaman = $besarPinjaman;
        $this->besarBungaPersen = $besarBungaPersen;
        $this->lamaAngsuran = $lamaAngsuran;
    }

    public function hitungBesaranAngsuran()
    {
        // Menghitung besar bunga dalam rupiah
        $besarBunga = ($this->besarPinjaman * $this->besarBungaPersen) / 100;
        // Menghitung total pinjaman
        $totalPinjaman = $this->besarPinjaman + $besarBunga;
        // Menghitung besaran angsuran per bulan
        return $totalPinjaman / $this->lamaAngsuran;
    }
}

$besarPinjaman = 1000000; // Rp. 1.000.000
$besarBungaPersen = 10;
$lamaAngsuran = 5;

$perhitungan = new PerhitunganAngsuran($besarPinjaman, $besarBungaPersen, $lamaAngsuran);
$besaranAngsuran = $perhitungan->hitungBesaranAngsuran(); //menghitung besar aturan

echo "Besaran Pinjaman : Rp. " . number_format($besarPinjaman, 0, ',', '.') . "<br>";
echo "Besar Bunga (%): " . $besarBungaPersen . "%<br>";
echo "Total Pinjaman Rp. " . number_format(($besarPinjaman + ($besarPinjaman * $besarBungaPersen / 100)), 0, ',', '.') . "<br>";
echo "Lama angsuran (bulan): " . $lamaAngsuran . "<br>";
echo "Besaran angsuran: Rp. " . number_format($besaranAngsuran, 0, ',', '.') . "<br>";
