<?php
// $hasil =$a < 0 ? "negatif" : ($a > 0 ? "positif" : "cacah");
// echo "$hasil";
// $nilai = 6;
// $predikat = $nilai > 8 ? 'Sangat Baik' : ( $nilai >= 7 && $nilai <= 8 ? 'Baik' : ($nilai <= 6 && $nilai > 5 ? 'Sedang' : 'Kurang') );
// echo $predikat; // Sedang

// $a=850000;
// $diskon= $a + $a*0.05;
// $diskon= $a > 500000 ? "andi mendapat $diskon": "tidak mendapat";
// echo "$diskon";


// $a = "19:00";
// $waktu1 = (date("H:i a", strtotime($a)) == "00:00 am") ? "07:00 pm" : date("h:i a", strtotime($a));

// $b = "08:55";
// $waktu2 = (date("H:i a", strtotime($b)) == "00:00 am") ? "08:55 pm" : date("h:i a", strtotime($b));



// echo "waktu 1: " . $waktu1 . "<br>";
// echo "Waktu 2: " . $waktu2 . "<br>";


$a=date('mon');
$hari= $a == 'mon' ? 'hari ini upacara': 'tidak upacara';
echo " $hari";

// for ($i = 1; $i <= 5; $i++) {
//     echo "<h$i>Heading $i</h$i>\n";
// }



for ($i = 1; $i <=3; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "$i x $j = " . $i * $j . " | "; 
    }
    echo "<br>";
}

// echo "<br>";


// for ($i = 1; $i <= 2; $i++) {
//     for ($j = 1; $j <= 4; $j++) {
//         for ($k = 1; $k <= 8; $k++) {
//             echo "$i";
//         }
//         echo "<br>";
//     }
//     echo "<br>";
// }





