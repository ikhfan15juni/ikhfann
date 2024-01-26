<?php
$b=0;
for($a = 5; $a <= 25; $a += 5){
    if(225 % $a == 0) {
        $b++;
       
    };
 }
 echo "bilangan 225 bisa dibagi abis oleh kelipatan 5 sebanyak $b kali";