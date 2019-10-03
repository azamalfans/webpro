<?php
$transportasi = array(
    "Kereta Api", "Mobil", "Sepeda Motor", "Kapal Laut", "Pesawat Terbang"
);
$transportation = array(
    5=> "Kereta Api",
    7=> "Mobil", 
    9=> "Sepeda Motor",
);
$transport = array(
    "c"=> "Kereta Api",
    "d"=> "Mobil", 
    "e"=> "Sepeda Motor",
);
// echo $transport(d)
// print_r($transportasi);
echo "Contoh alat transportasi antara lain :<br />";
// Contoh alat transportasi antara lain :
// 1. Kereta Api
// 2. Mobil
// 3. Sepeda Motor
foreach($transportasi as $k => $v)
{
    echo $k." => ".$v."<br />";
}

echo "<br /></ol>";

$arr = array(
    "Budi" => array(
        "hobi" => array("memancing", "membaca")
    ),
    "Andi" => array(
        "hobi" => array ("menyanyi", "travelling", "belanja")
    )
);
// Budi memiliki hobi memancing dan membaca.
// Andi memiliki hobi menyanyi, traveling dan belanja.
foreach($arr as $orang => $desc)
{
    echo $orang." memiliki hobi ";
    $hobi = $desc['hobi'];
    foreach($hobi as $k => $h)
    {
        $penghubung = "";
        if($k == count($hobi) - 2)
        {
            $penghubung = " dan ";
        }
        else{
            if($k == 0)
            {
                $penghubung = ", ";
            }
        }
        echo $h.$penghubung;
    }
    echo ".<br />";
}

$list = array(
    array(
        "desc" => "uang saku bulanan",
        "nominal" => 500000;
        "sifat" => "masuk"
    ),
    array(
        "desc" => "sarapan",
        "nominal" => 7000,
        "sifat" => "masuk"
    ),
    array(
        "desc" => "beli buku",
        "nominal" => 60000,
        "sifat" => "keluar"
    )
    );
    // Total Pemasukan adalah Rp ... Total Pengeluaran adalah Rp ...
    // Jadi saldo uang adalah Rp ...
    $masuk = 0;
    $keluar = 0;
    foreach($arr as $v)
    {
        if($v['sifat'] == "masuk")
        {
            $masuk += $v['nominal'];
        }
        else{
            $keluar += $v['nominal'];
        }
    }
    echo "Total pemasukan adalah Rp. ".$masuk.".<br />";
    echo "Total pengeluaran adalah Rp. ".$keluar.".<br />";
    echo "Saldo uang adalah Rp. ".($masuk-$keluar);
?>