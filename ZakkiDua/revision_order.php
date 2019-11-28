<?php

$id = $_GET['id'];


take_order($id, 4);
echo "<script>
    window.location='index.php?page=revision_project';</script>";
