<?php
   //var_dump($_GET);
   // echo  "angka1 : ".$_GET['angka1'].'</br> angka2 : '.$_GET['angka2'];
// if(isset($_GET["angka1"])){
//     if($_GET["angka1"]>=17){
// 		echo "anda boleh masuk";
// 	}
// 	else{
// 		echo "anda tidak boleh masuk!!!!";
// 	}
// }
 if(isset($_GET['angka1']) && isset($_GET['angka2'])){
 	if(!empty($_GET['angka1']) && !empty($_GET['angka2'])){
 
$angka1=$_GET['angka1'];
$angka2=$_GET['angka2'];
$hasil = $angka1 + $angka2;
$hasil1 = $angka1 - $angka2;
$hasil2 = $angka1 * $angka2;
$hasil3 = $angka1 / $angka2;
$hasil4 = $angka1 % $angka2;
  echo "hasil dari  $angka1 + $angka2  : $hasil</br>" ;
  echo "hasil dari  $angka1 - $angka2  : $hasil1</br>";
  echo "hasil dari  $angka1 * $angka2  : $hasil2</br>";
  echo "hasil dari  $angka1 / $angka2  : $hasil3</br>";
  echo "hasil dari  $angka1 % $angka2  : $hasil4";
 }
  else{
  	echo "data tidak boleh kosong";
  }
}
?>