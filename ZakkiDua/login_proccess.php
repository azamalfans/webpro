<?php
session_start();
require_once("apps_latihan.php");
$username = $_POST['username'];
$password = $_POST['pass'];

$cek = cek_login($username, $password);



if ($cek) {
    //redirect ke dashboard
    $_SESSION['username'] = $username;

    $level = get_level_by_username($username);
    // var_dump($username);
    // var_dump($level);
    // die;

    if ($level == false) {
        echo "?";
    } else {
        var_dump($level);
        $_SESSION['level'] = $level['id_level'];
    }
    // var_dump($_SESSION['username']);
    // die;

    echo "<script>
    window.location='index_latihan.php?page=dashboard_latihan';</script>";
} else {
    // redirect ke login
    echo "<script>
    window.location='login_form.php';</script>";
}
