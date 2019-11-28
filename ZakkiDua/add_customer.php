<?php

add_customer($_POST['name'], $_POST['email'], $_POST['plan'], $_POST['description']);

echo "<script>
    window.location='index.php?page=new_project';</script>";
