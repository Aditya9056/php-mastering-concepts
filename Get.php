 <!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<form method="post">
    <input type="file" name="up" />
    <input type="submit" />
</form>

<?php 

$upload = $_POST["up"];
echo $upload;



?>    
</body>
</html>