<?php
$page = "login";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include "css.php"; ?>
</head>
<body>
    <?php include "nav.php"; ?>

    <?php
    	session_start();
    	if(!isset($_SESSION["authen"])){
    ?>
		<div class="container">
		  <form class="form-signin" method="get" action="check.php">
	        <h2 class="form-signin-heading">DSBA Student Login</h2>
	        <label for="inputEmail" class="sr-only">Email address</label>
	        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="username" required="" autofocus="">
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Remember me
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      </form>
		</div>
	<?php
    	}else{
    ?>
    <?php include "config.php"; ?>
    	<a class="btn btn-lg btn-danger btn-block" href="logout.php">Sign Out</a>
    	<br>
    	<h1>USER TABLE</h1>
		<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Username</th>
		      <th>Password</th>
		      <th>Display Name</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		  	$sql = "SELECT * FROM users";
		  	$result = $conn->query($sql) or trigger_error($conn->error." [$sql]");
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['password']."</td>";
				echo "<td>".$row['displayname']."</td>";
				echo "</tr>";
			}
		  ?>
		  </tbody>
		</table>
    <?php	
    	}
    ?>
<?php include "js.php"; ?>

</body>
</html>