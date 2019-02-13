<?php 

abstract class Produk {
	private $judul,
	        $penulis,
	        $penerbit,
            $harga,
            $diskon;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
	       	$this->judul = $judul;
	       	$this->penulis = $penulis;
	       	$this->penerbit = $penerbit;
	       	$this->harga = $harga;
	}

    public function setjudul( $judul ) {
        $thisq->judul = $judul;
    }

    public function getjudul() {
        return $this->$judul;
    }

    public function setpenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getpenulis() {
        return $this->$penulis;
    }

    public function setpenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getpenerbit() {
        return $this->$penerbit;
    }

    public function setdiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getdiskon() {
        return $this->$diskon;
    }

    public function setharga( $harga ) {
        $this->harga = $harga;
    }

    public function getharga() {
        return $this->harga - ( $this-> harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})"; 

        return $str;
    }

}


class Komik extends produk {
	public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){
    	
    	parent::__construct( $judul, $penulis, $penerbit, $harga );

    	$this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
    	$str = " Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
   

class Game extends produk {
	public $waktuMain;

     public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){	
    	parent::__construct( $judul, $penulis, $penerbit, $harga );

    	$this->jmlHalaman = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}


class cetakInfoProduk {
    public $daftarproduk = array();

    public function tambahProduk( Produk $produk ) {
        $this->daftarproduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach ( $this->daftarproduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen jump", 30000, 100);
$produk2 = new Game("uncharted", "Neil Drucmann", "Sony computer", 25000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setdiskon(50);
echo $produk2->getharga();
echo "<hr>";