<?php 

class Produk{
	public $Judul ="Judul",
	       $Penerbit ="Penerbit",
           $Pengarang ="Pengarang",
	       $Harga = 0;

	public function getLabel() {
		return "$this->Judul, $this->Penerbit";
	}


	      
}

// $Produk1 = new Produk ();
// $Produk1->judul="Doraemon";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "Pokemon";
// var_dump($Produk2->judul);


$produk3 = new produk();
$produk3->Judul = "Naruto";
$produk3->Pengarang = "Masashi Kishimoto";
$produk3->Penerbit = "Shoenin Jump";



$produk4 = new Produk();
$produk4->Judul = "Hujan";
$produk4->pengarang= "Tere Liye";
$produk4->penerbit= "PT Gramedia";


echo "komik : ". $produk3->getLabel();
echo "<br>";
echo "Novel : ". $produk4->getLabel();
