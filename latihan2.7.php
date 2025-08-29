<?php
class Kendaraan
{
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merek;
    public $tahunPembuatan = 2004;

    public function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal";
        } else {
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }

    public function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
    public function dapatSubsidi()
    {
        return $this->statusSubsidi();
    }

    // Tambahkan method hargaSecondKendaraan (misal harga bekas 70% dari harga baru)
    public function hargaSecondKendaraan()
    {
        return $this->harga * 0.7;
    }
}

// Instansiasi kelas
$objekKendaraan = new Kendaraan(); // Membuat objek dari kelas Kendaraan

echo "jumlahRoda: " . $objekKendaraan->jumlahRoda . "<br />"; // Memanggil variabel
echo "Status Harga: " . $objekKendaraan->statusHarga() . "<br />"; // Memanggil method
echo "Status Subsidi: " . $objekKendaraan->statusSubsidi() . "<br />";


// Objek 1
$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 10000000;
$objekKendaraan1->tahunPembuatan = 1999;

echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br>";

// Objek 2
$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan() . "<br>";
?>
