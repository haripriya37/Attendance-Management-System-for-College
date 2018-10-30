<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cumulative attendance</title>
</head>
<body>
<form method="post" action="cmdisp.php">
	<p><b>T ID:</b><input type="text" name="tid" /></p>
	<p><b>Class:</b><input type="text" name="class"/></p>
	<p><b>Start Date:</b><input type="date" name="date1"/></p>
	<p><b>End Date:</b><input type="date" name="date2"/></p>
	<p><input type="submit" value="Show" name="show"/></p>
</form>
</body>
</html>