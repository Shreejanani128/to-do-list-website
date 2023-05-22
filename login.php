<?php
session_start();
$data=mysqli_connect("localhost","root","","user");
if($data===false)
{
	die("connection failed");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="select * from login  where username='".$username."' AND password='".$password."'" ;
	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);
	if($row["usertype"]=="user")
	{
		$_SESSION["username"]=$username;
		
		header("location:userhome.php");

	}
	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;

		header("location:adminhome.php");
		
	}
	elseif($row["usertype"]=="team")
	{
		$_SESSION["username"]=$username;

		header("location:teamhome.php");
	
	}
	else
	{
		echo"username or password incorrect";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>login page</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>


body
{
 background-color:LightCyan;
}
</style>
</head>

<body>

	 <center>
		<h1>login form</h1>
<br><br>  
	<form action ="#" method="POST">
	<div>
		<label>username</label>
		<input type="text" name="username" required>

	</div>
	<br><br>
	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>
	<div>
		<input type="submit" value="sign in" class="btn btn-info">
		
		<br><br><p>Didn't have an account<a href="add.php" > sign up!!!</a></p>
	</div>
	
</form>
<br><br>
</center>
</body>
</html>