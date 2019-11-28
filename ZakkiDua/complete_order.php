<?php

$id = $_GET['id'];

take_order($id, 3);
echo "<script>
    window.location='index.php?page=completed_project';</script>";
