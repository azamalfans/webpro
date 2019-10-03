<?php
// array
$customer = array(
    "A001" => "Andi",
    "A002" => "Budi",
    "A003" => "Catur",
);
$barang = array(
    "B001" => array(
        "desc" => "Flash Disk Kingston 64GB",
        "harga" => 75000
    ),
    "B002" => array(
        "desc" => "Connector HDMI",
        "harga" => 150000
    ),
    "B003" => array(
        "desc" => "DVD Blank",
        "harga" => 2500
    ),
);
$belanja = array(
    array("A001","B001",3),
    array("A001","B003",10),
    array("A003","B001",1),
    array("A003","B002",1),
);
// output;
// Andi membeli barang sbb :
// 1. Flash disk kingston 64 3 buah @7500, total Rp. 225000
// 2. ... dst
// Total pembelian Andi adalah Rp. ...
?>