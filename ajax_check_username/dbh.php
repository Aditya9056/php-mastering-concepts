<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "assignment_login";

$conec = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if(isset($_POST["username"]))
{

    $username = mysqli_real_escape_string($conec, $_POST["username"]);

    $query = "SELECT username FROM ids WHERE username = '".$username."'";

    $result = mysqli_query($conec, $query);

    echo mysqli_num_rows($result);

}

?>