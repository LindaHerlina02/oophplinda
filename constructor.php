<?php 

class produk {
     public $judul,
            $penulis,
            $penerbit,
            $harga;

 public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
 	$this->judul = $judul;
 	$this->penulis = $penulis;
 	$this->penerbit =$penerbit;
 	$this->harga = $harga;
 }

 public function getlabel() {
 	return "$this->penulis,$this->penerbit";
 }


}

$produk1 = new produk("doraemon","shizuka","nobita",30000);

$produk2 = new produk("barbie", "ken","asus",25000);

$produk3 =new produk("dragonball");

echo "komik : " .$produk1->getlabel();
echo "<br>";
echo "game : ".$produk2->getlabel();
echo "<br>";
var_dump($produk3);




