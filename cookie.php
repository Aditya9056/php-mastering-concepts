<?php

$value = "Aditya";
$expire = time()+10;

setcookie("name",$value, $expire);

echo $_COOKIE['name'];
  
$unsetcookie = time() - 10;

setcookie("name", "value", $unsetcookie);


?>


<!-- COokie setcookie(name, value, expire, path, domain, secure, httponly); -->