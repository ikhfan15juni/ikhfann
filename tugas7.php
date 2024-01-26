<?php
$data = [

    [
        "nama" => "ikhfan",
        "rombel" =>'PPLG XI-1',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],
    
    [
        "nama" => "ikhfan",
        "rombel" => 'PPLG XI 2',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],
    [
        "nama" => "ikhfan",
        "rombel" => 'PPLG XI 3',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],
    [
        "nama" => "ikhfan",
        "rombel" => 'PPLG XI 4',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],

];


foreach ($data as $key => $value) {
    echo "<li>" .$value['nama']. $value['rombel' ] . $value['rayon'] . $value['jk'] . "</li>";
}
