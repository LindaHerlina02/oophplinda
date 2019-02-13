<?php 

class produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "uncharted";
// $produk2->tambahproperty = "hahaha";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "spongebob";
$produk3->penulis = "minion";
$produk3->penerbit = "dora";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis ="neil drucman";
$produk4->penerbit ="sony computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();










