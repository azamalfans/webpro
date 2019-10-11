<!-- <form action="login.php" method="post">
Username<br />
<input type="text" name="username" />
<br />
Password<br />
<input type="password" name="pass" />
<br />
<input type="submit" />
</form> -->

<?php
if(defined('INDEX') == false)
{
    // tidak punya cap
    die("You shall not pass!");
}
?>
<html>
<body>
<form action="index.php?page=login" method="post">
Username<br/>
<input type="text" name="username" />
<br/>
Password<br/>
<input type="password" name="pass" />
<br/>
<input type="submit"/>
</form>
<body>
</html>