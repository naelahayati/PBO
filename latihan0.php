<?php 
class guru {
    var $nama_nama = array ("de", "ce", "ve", "re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}
class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}
class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}
class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 12;
    var $merek = 'A';

    public function statusHarga() 
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}
//class buku
class Buku {
    //variable dalam class buku
    var $judul;
    var $pengarang;
    var $penerbit;
    var $tahun_terbit;

    function tampilkanInfo() {
        echo "Judul: $this->judul <br>";
        echo "Pengarang: $this->pengarang <br>";
        echo "Penerbit: $this->penerbit <br>";
        echo "Tahun Terbit: $this->tahun_terbit <br><br>";
    }
}
// Membuat objek dari class Buku
$buku1 = new Buku();
$buku1->judul = "Pemrograman PHP OOP";
$buku1->pengarang = "Budi Santoso";
$buku1->penerbit = "Informatika";
$buku1->tahun_terbit = 2022;

// Tampilkan data buku
$buku1->tampilkanInfo();

class orang {
    var $nama;
    var $alamat;
    var $jenis_kelamin;
    var $umur;
    var $agama;

    // Method untuk menampilkan data orang
    function tampilkanData() {
        echo "Nama: $this->nama <br>";
        echo "Alamat: $this->alamat <br>";
        echo "Jenis Kelamin: $this->jenis_kelamin <br>";
        echo "Umur: $this->umur tahun <br>";
        echo "Agama: $this->agama <br>";
    }
}

// Membuat objek dari class Orang
$orang1 = new Orang();
$orang1->nama = "Andi Saputra";
$orang1->alamat = "Jakarta";
$orang1->jenis_kelamin = "Laki-laki";
$orang1->umur = 20;
$orang1->agama = "Islam <br><hr>";

// Tampilkan data orang
$orang1->tampilkanData();

$ObjekBMW = new Mobil();   //ini adalah objek BMW dari class mobil 
$ObjekTesla = new Mobil(); //ini adalah objek Telsa dari class mobil
$ObjekAudi = new Mobil();  //ini adalah objek Audi dari class mobil

class Biodata {
    // Instance variable (punya tiap objek)
    public $nama = "Andi";       // string
    public $umur = 20;           // integer
    
    // Static variable (milik class, bukan objek)
    public static $sekolah = "SMK Negeri 1"; // string

    // Method dengan local variable
    public function tampilData() {
        $hobi = "Membaca"; // local variable (string)
        
        echo "Nama: " . $this->nama . "<br>";
        echo "Umur: " . $this->umur . "<br>";
        echo "Sekolah: " . self::$sekolah . "<br>";
        echo "Hobi: " . $hobi . "<br>";
    }
}

// Membuat objek
$objek1 = new Biodata();
$objek1->nama = "Budi";   // ubah instance variable
$objek1->umur = 17;

$objek2 = new Biodata();
$objek2->nama = "Citra";
$objek2->umur = 19;

// Output
$objek1->tampilData();
echo "<br>";
$objek2->tampilData();

?>