<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>PHP LEARNING</title>
</head>
<body bgcolor ="gray">


<form action = "site 2.php" method = "get">

Choice: <input type = "number" name = "choice">
Num1 : <input type = "number" name = "num1">
Num2 : <input type = "number" name = "num2">
<input type = "submit">


</form>

<?php
$choice = $_GET["choice"];
if($choice == 1)

{
    echo $_GET["num1"] + $_GET["num2"];
}
else if( $choice == 2)
{
    echo $_GET["num1"] * $_GET["num2"];
}

?>
    
</body>
</html>