<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";
$objekKendaraan1->harga = 100000000;

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga = 100000000;

echo "Merek: " . $objekKendaraan2->merek; // Toyota Avanza
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan2->harga; // 100000000
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga(); // Mahal
?>
