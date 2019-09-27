<?php
$transportasi = array(
    "Kereta Api", "Mobil", "Sepeda Motor", "Kapal Laut", "Pesawat Terbang"
);
$transportation = array(
    5=> "Kereta Api"
    7=> "Mobil", 
    9=> "Sepeda Motor",
);
$transport = array(
    "c"=> "Kereta Api"
    "d"=> "Mobil", 
    "e"=> "Sepeda Motor",
);
echo $transport(d)
print_r($transportasi);
echo "Contoh alat transportasi antara lain :<br />";
// Contoh alat transportasi antara lain :
// 1. Kereta Api
// 2. Mobil
// 3. Sepeda Motor
foreach($transportasi as $k => $v)
{
    echo $k." => ".$v."<br />";
}
?>