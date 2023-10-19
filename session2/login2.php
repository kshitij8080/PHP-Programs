<?php

session_start();
$_SESSION["uname"]=$_POST["t1"];
$_SESSION["password"]=$_POST["t2"];

?>

<html>
    <body>
        <form method="post" action="login3.php">
            Name:<br>
            <input type="text" name="t1"><br>
            City:<br>
            <input type="text" name="t2"><br>
            Pno:<br>
            <input type="text" name="t3"><br>
            <input type="submit">
        </form>
    </body>
</html>