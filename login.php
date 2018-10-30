<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="post" action="selectdate.php">
	<p><b>Username:</b><input type="text" name="uname" /></p>
		<p><b>Password:</b><input type="password" name="pword"/></p>
		<p><input type="submit" value="Login" name="login"/></p>
</form>
<?php
if(isset($_POST['login']))
{
$_SESSION['tuname']=$_POST['uname'];
$_SESSION['tpword']=$_POST['pword'];
}
?>
</body>
</html>