<?php
session_start();
require_once("apps_latihan.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar">
        <div class="foto-profil">
            <img src="" alt="">

        </div>
        <p>Username</p>
        <ul>
            <?php if (isset($_SESSION['username'])) {
                $menu = get_menu_by_level($_SESSION['level']);
            };
            while ($row = mysqli_fetch_array($menu)) {
                echo '<a href="index_latihan.php?page=' . $row['page'] . '">';
                echo "<li>" . $row['nama_menu'] . "</li>";
                echo '</a>';
            }
            ?>
        </ul>
    </nav>
    <div class="main-content">
        <?php

        define('index', true);

        $exception_page = ['login_form', 'login_proccess'];

        // if (in_array($page, $exception_page) == false) {

        //     if ($_SESSION['username'] == "") {
        //         echo "<script>window.location='login_form.php';</script>";
        //         exit;
        //     }
        // }
        echo $_SESSION['username'];
        if (isset($_SESSION['username'])) {
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = "dashboard_latihan";
            }

            require_once $page . ".php";
        } else {
            // echo "<script>window.location='login_form.php';</script>";
            echo "belum login";
            echo $_SESSION['username'];
        }




        ?>
    </div>

</body>

</html>