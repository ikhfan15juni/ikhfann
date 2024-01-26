<?php
// function b($a,$b,$c){
//     $hasil= $a+$b+$c;
//     return $hasil;
// }
// echo b(10,20,10);


// $berat = 44;
// $tinggi=148;
// function b($hasil){  
// if($hasil < 18.5){
//     return "Berat Badan Kurang";
// }elseif($hasil >18.5 && $hasil < 22.9){
//     require "Normal";
// }elseif($hasil >22.9 && $hasil <24.9){
//     return "Berat Badan Lebih";
// }else{
//     return "Obesitas";
//     echo"<br>";
// };


// }
// $a=44;
// $b=148;

// $jumlah= b($a,$b);

// echo $jumlah;


function a($tanggal) {
    $day = date('l', strtotime($tanggal));

    if($day=='monday'){
        echo 'senin';
    } elseif ( $day == 'tuesday'){
        echo 'selasa';
    }elseif ($day == 'wednesday'){
        echo 'rabu';
    }elseif ($day == 'thrusday'){
        echo 'kamis';
    }elseif($day == 'friday'){
        echo 'jumat';
    }elseif($day == 'saturday'){
        echo 'sabtu';
    }elseif($day == 'sunday'){
        echo 'minggu';
    }
}

return a('2024-01-25');


