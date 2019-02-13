<?php 

class Komik extends  produk implements InfoProduk {
	public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){
    	
    	parent::__construct( $judul, $penulis, $penerbit, $harga );

    	$this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
    	$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }
}
