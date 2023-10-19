<?php

session_start();
$_SESSION["name"]=$_POST["1"];
$_SESSION["address"]=$_POST["2"];
$_SESSION["Pno"]=$_POST["3"];

?>

<html>
    <body>
        <form method="post" action="page3.php">
            Product name:<br>
            <input type="text" name="1"><br>
            Quantity:<br>
            <input type="text" name="2"><br>
            Rate:<br>
            <input type="text" name="3"><br><br>
            <input type="submit" value="Print_Bill">
        </form>
    </body>
</html>