<?php

$transportasi = array(
    "c" => "Kereta Listrik",
    "d" => "Mobil",
    "e" => "Sepeda Motor",
);

echo "Contoh alat transportasi </br>";
echo "<ol>";
foreach ($transportasi as $k => $v) {
    # code...
    echo "<li>" . $v . "</li>";
}
echo "</ol>";

echo "</br>";

$arr = array(
    "Budi" => array(
        "hobi" => array("Memancing", "membaca")
    ),
    "Andi" => array(
        "hobi" => array("Menggambar", "menyanyi", "travelling", "belanja")
    )
);

foreach ($arr as $key => $value) {
    echo $key . " memiliki ";
    foreach ($value as $k => $v) {
        echo $k . " ";
        foreach ($v as $a => $b) {
            echo $b . " ";
        }
    }
    echo "</br>";
};

echo "</br></br><hr>";

foreach ($arr as $orang => $desc) {
    $hobi = $desc['hobi'];
    echo $orang . " memiliki hobi ";
    foreach ($hobi as $h => $h2) {
        $penghubung = ", ";
        if ($h == count($hobi) - 2) {
            $penghubung = " dan ";
        } else {
            if ($h == count($hobi) - 1) {
                $penghubung = "";
            }
        }
        echo $h2 . $penghubung;
    }
    echo ".</br>";
};

echo "</br></hr>";

$arr2 = array(
    array(
        "desc" => "uang saku bulanan",
        "nominal" => 500000,
        "sifat" => "masuk"
    ),
    array(
        "desc" => "sarapan",
        "nominal" => 7000,
        "sifat" => "keluar"
    ),
    array(
        "desc" => "beli buku",
        "nominal" => 60000,
        "sifat" => "keluar"
    )
);
$pemasukan = 0;
$pengeluaran = 0;
foreach ($arr2 as $data) {

    if ($data['sifat'] == 'masuk') {
        $pemasukan  += $data['nominal'];
    } else {
        $pengeluaran += $data['nominal'];
    }
};
echo "Pemasukan adalah Rp. " . $pemasukan . "</br>";
echo "Pengeluaran adalah Rp. " . $pengeluaran . "</br>";
echo "saldo adalah Rp. " . ($pemasukan - $pengeluaran);
