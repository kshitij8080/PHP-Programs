<?php

session_start();
$_SESSION["name"]=$_POST["1"];
$_SESSION["class"]=$_POST["2"];

?>

<html>
    <body>
        <form method="post" action="page3.php">
            phy:<br>
            <input type="text" name="1"><br>
            Bio:<br>
            <input type="text" name="2"><br>
            Chem:<br>
            <input type="text" name="3"><br>
            Maths:<br>
            <input type="text" name="4"><br>
            Marathi:<br>
            <input type="text" name="5"><br>
            English:<br>
            <input type="text" name="6"><br><br><br>
            <input type="submit" value="PRINT_Result">
        </form>
    </body>
</html>