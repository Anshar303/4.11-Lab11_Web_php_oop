<?php
/**
 * program sederhana pendefinisian class dan pemanggilan class .
 */

 class mobil
 {
     private $warna ;
     private $merk ;
     private $harga ;

     public function __construct()
     {
         $this -> warna = " biru " ;
         $this -> merk  = " BMW " ;
         $this -> harga = "10000000" ;
     }

     public function GantiWarna ($warnaBaru)
     {
         $this -> warna = $warnaBaru ;
     }

     public function TampilWarna ()
     {
         echo "warna mobilnya : " . $this -> warna ;
     }

 }

//  membuat objek mobil
$a = new mobil () ;
$b = new mobil () ;

// memanggil objek
echo "<b>mobil pertama</b><br>" ;
$a ->TampilWarna () ;

echo "<br>Mobil pertama ganti warna<br>" ;
$a -> GantiWarna ("merah") ;
$a -> TampilWarna ();

// memanggil objek
echo "<b><br>mobil kedua</b><br>" ;
$b -> GantiWarna ("hijau") ;
$b -> TampilWarna () ;

?>

