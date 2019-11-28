<?php

$id = $_GET['id'];

take_order($id, 2);
echo "<script>
    window.location='index.php?page=on_work';</script>";
