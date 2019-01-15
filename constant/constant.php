<?php 

// define('Nama', 'Mulia');
// echo Nama;

// echo "<br>";
// const umur = 17;
// echo umur;

// class coba{
// 	const Nama = 'Mulia Ayu F';

// }
// echo ::Nama;


// echo __LINE__;


// function coba(){
// 	return __function__;

// }
// echo coba();

class coba{
	public $Kelas = __CLASS__;

}
$obj = new coba;
echo $obj->Kelas;


 ?>