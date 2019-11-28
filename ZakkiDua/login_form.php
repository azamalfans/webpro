<?php
session_start();
require_once("apps_latihan.php");


?>

<form action="login_proccess.php" method="post">
    Username<br />
    <input type="text" name="username" />
    <br />
    Password<br />
    <input type="password" name="pass" />
    <br />
    <input type="submit" />
</form>