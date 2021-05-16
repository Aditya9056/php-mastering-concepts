<?php
session_start();
include_once 'dbh.php';

if ( mysqli_connect_errno() ) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if ( !isset($_POST['username'], $_POST['password']) ) {
    die ('Please fill both the username and password field!');
}

// $username = $_POST['username'];
// $password = $_POST['password'];

if ($stmt = $conec->prepare('SELECT id, password FROM ids WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
    $stmt->fetch();
    
    // echo $id."<br>";
    // echo $password."<br>";
    // echo $_POST['password'];

    echo password_hash($password, PASSWORD_DEFAULT);

	if (password_verify($_POST['password'], $password)) {
        
        $_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo 'Incorrect password!';
	}
}
 else {
	echo 'Incorrect username!';
}
$stmt->close();

?>