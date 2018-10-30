<?php
session_start();
	echo "HELLO!" .$_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>select date</title>
</head>
<body>
	<form action='gui.html' method='post'>
<input type='date' name='sdate' />
	<input type='checkbox' name='ck1' />1
	<input type='checkbox' name='ck2' />2
	<input type='checkbox' name='ck3' />3
	<input type='checkbox' name='ck4' />4
	<input type='checkbox' name='ck5' />5
	<input type='checkbox' name='ck6' />6
	<input type='submit' value='Show students' name='showstudents' />
</form>
</body>
</html>