<?php include "config.php"; ?>
<?php
	$user = $_GET["username"];
	$pass = $_GET["password"];
	echo $user;
	echo "<br>";
	echo $pass;

	$sql = "SELECT * FROM users WHERE username = \"$user\" and password = \"$pass\"";
	echo $sql;
	$result = $conn->query($sql) or trigger_error($conn->error." [$sql]");
	// echo $result->num_rows ;
	if ($result->num_rows > 0) {
		session_start();
		$_SESSION["authen"] = TRUE;
		header('Location: form.php');
	}
	$conn->close();
?>