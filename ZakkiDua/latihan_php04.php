<?php


if (!defined("index")) {
    die("Acces Forbidden");
}

?>

<form action="login.php" method="post">
    Username<br />
    <input type="text" name="username" />
    <br />
    Password<br />
    <input type="password" name="pass" />
    <br />
    <input type="submit" />
</form>