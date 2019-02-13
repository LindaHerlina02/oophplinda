<?php 

class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga" ) {
	    $this->judul = $judul;
	    $this->penulis = $penulis;
	    $this->penerbit = $penerbit;
	    $this->harga = $harga;
	}

	       public function getLabel() {
	       	return "$this->penulis, $this->penerbit";
	       }

 }


class CetakInfoProduk {
	public function cetak( $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", 30000);
$produk2 = new produk("Uncharted", "Neil Druckman", "Sony computer", 250000);


echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

   
