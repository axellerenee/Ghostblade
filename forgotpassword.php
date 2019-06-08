<?php require_once('connect.php');?>
<html>
<head><title> Forgot Password | Ghostblade </title>
<link rel="icon" type="image/png" href="assets/images/ghostbladeicon.png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
<link rel="stylesheet" href="assets/css/forgotpasswordcss.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-signin" method="POST">
<?php
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$sql = "SELECT * FROM `users` WHERE username = '$username'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		echo "<center><h4>Password is sent to the user's e-mail</h4></center>";
	}else{
		echo "<center><h4>User name does not exist in database</h4></center>";
	}
}
?>

<!--$r = mysqli_fetch_assoc($res);
$password =  $r['password'];
$to =  $r['email'];
$subject = "Your Recovered Password";
$message = "Please use this password to login " . $password;
$headers = "From : 201701090@iacademy.edu.ph";
if(mail($to, $subject, $message, $headers)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}-->
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
	<br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="index.php">Login</a> 
</form>
</body>
</html>