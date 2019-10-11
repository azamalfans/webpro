<?php
function connect_to_db()
{
    $koneksi = mysqli_connect("127.0.0.1","root","","test");
    if($koneksi == false)
    {
        echo mysqli_error($koneksi);
        die:
    }
    return $koneksi;
}
function get_data_mahasiswa()
{
    $koneksi = connect_to_db();
    $sql = "select * from mahasiswa";
    return mysqli_query($koneksi,$sql);
}