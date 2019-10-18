<?php
if(defined("INDEX") == false)
{
    // tidak punya cap
    die("You shall not pass!");
}
?>
<h3>
Form Tambah Mahasiswa
<span class="float-right">
<a href="index.php?page=mahasiswa" class="btn btn-light">
Kembali
</a>
</span>
</h3>
<form action="index.php?page=simpan_mhs" method="post">
<table>
<tr>
<td>NIM</td>