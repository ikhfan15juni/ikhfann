 <?php
$a='154000';


if (($a > 100000)){
    $a=$a-$a*00.7;
echo"$a";
}else {
    echo "tidak dapat diskon";
}


$a='16';

if (($a >17 )){
echo" sudah";
}else {
    echo "belum";
}



$a='"';


if (is_numeric($a)){
echo"numeric";
}else if(is_string($a)) {
    echo "string";
}



$nilai='83';


if ($nilai < 78){
echo"kompeten";
}else  {
    echo " tidak kompeten ";
}


$a='8';
$b='9';

if ($a == $b){
echo"value sama";
}else  {
    echo " terbesar adalah ". max($a,$b), ".";
}

$a='ikan';
$b='ayam';

if ($a==$b){
echo"value sama";
}else{
    echo "value berbeda";
    echo "<br>";

    $a=60;
    if ($a++){
        echo "$a";
        echo "<br>";
    }

        }
        $a=99 ;
        if($a >90){
            echo"A";
           }elseif ($a > 75){
            echo "B";
           }else{
            echo"c";
            echo "<br>";
              
       $hasil=$a > 90 ? "A" : ($a > 70 ? "B" : "c");
       echo "$hasil";

           };

           $a=1;
           while($a <= 10){
            echo "$a";
            $a++;
            echo"<br>";
           }
           $hasil=$a > 90 ? "A" : ($a < 70 ? "B" : "c"); 



// $a = 9;

// if($a > 0){
//     echo "positif";
// }elseif($a == 0){
//     echo "cacah";
// }else{
//     echo "negatif";
//     echo"<br>";
//     $hasil =$a < 0 ? "negatif" : ($a > 0 ? "positif" : "cacah");
//     echo "$hasil";

// }



$a = 14;

if($a > 8){
    $b = $a - 8;
    $a = $b * 30000;
    echo "ia mendapat tambahan sebesar $a";
}else{
    echo "tidak dapat tambahan";
    echo"<br>";
}



$andi = 2004;
$eko = $andi - 4;
 
if($andi %4 == 0 && $eko %4 == 0 ){
    echo "keduanya lahir di tahun kabiset";
}elseif($eko %4 == 0){
    echo "Eko lahir di tahun kabiset";
}elseif($andi %4 == 0){
    echo "andi lahir di tahun kabiset";
}else{
    echo "keduanya tidak lahir di tahun kabiset";
    echo"<br>";
}



$tinggi = 148;
$berat = 44;
$imt = $berat / ($tinggi/100) ** 2;

if($imt < 18.5){
    echo "Berat Badan Kurang";
}elseif($imt >18.5 && $imt < 22.9){
    echo "Normal";
}elseif($imt >22.9 && $imt <24.9){
    echo "Berat Badan Lebih";
}else{
    echo "Obesitas";
    echo"<br>";
}


$nasiGoreng = 15000;
$ayamBakar = 20000;
$nasiKebuli = 25000;
$jus = 8000;
$tehManis = 3000;
$jeruk = 5000;
$beli = $nasiKebuli * 2 + $ayamBakar + $nasiGoreng * 2 + $jus + $jeruk;
$hari = Date('D');


if($hari == 'Mon'){
    $diskon = $beli * 0.02;
    $total = $beli - $beli * 0.02;
    echo "Dani mendapat diskon sebesar $diskon dan hanya membayar sebesar $total";
}elseif($hari == 'Tue'){
    $diskon = $beli * 0.05;
    $total = $beli - $beli * 0.05;
    echo "Dani Mendapat Diskon sebesar $diskon dan hanya membayar sebesar $total";
}else{
    echo "Dani tidak mendapat Diskon dan total bayarnya adalah $beli";
    echo"<br>";
}





$panjang = 13;
$lebar = 11;
$luas = $panjang * $lebar;

if($luas < 90 ){
    echo " luas rumah dani termasuk tipe 36";
}elseif($luas > 90 && $luas < 96){
    echo "luas rumah dani termasuk tipe 45";
}elseif($luas > 96 && $luas <120){
    echo "luas rumah dani termasuk tipe 54";
}elseif($luas > 120 && $luas <150){
    echo "luas rumah dani termasuk tipe 60";
}else{
    echo "luas rumah dani termasuk tipe 70";
    echo"<br>";


}




$a = 170000;

if($a > 150000){
    $diskon = $a - 10000;
    $total =   $a - $a - 10000;
    echo "dani mendapat potongan sebesar 10000 dari yang awalnya $a menjadi $diskon dan dani mendapat 1 dus permen kaki";
}elseif($a >= 100000 && $a <= 150000){
    $diskon = $a - 10000;
    echo "dani mendapat potongan sebesar 10000 dari yang awalnya $a menjadi $diskon dan total bayar nya adalah $diskon";
}else{
    echo "dani tidak mendapat diskon";
     echo"<br>";
}
?>


