<?php 
session_start();
$con=mysqli_connect('localhost','root','Subhasri47');
mysqli_select_db($con,'student');

$test_uname=$_SESSION['name'];
$test_pword=$_SESSION['pword'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #dddddd;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: 50px;
}

li a:hover:not(.active) {
    background-color: white;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

td, th {
    border: 2px solid black;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #dddddd;
}
</style>
</head>
<body>

<header style="padding-left: 400px"><img src="header_inside.jpg"></header>

<ul>
  <li><a class="active" href="sattendance.php">Home</a></li>
  <li style="float:right"><a href="index1.html">Logout</a></li>
</ul>
<center>
<?php
echo "<br>";
echo "Welcome! ". $_SESSION['name'];
echo "<br><br>";
$pcount=0;
$tcount=0;
$sql2="SELECT * FROM `daily_attendance_cs3` WHERE `ht_no`='$test_uname'";
$record=mysqli_query($con,$sql2);

	echo "<table border='1px' >";
	echo "<tr>
	<th>DATE</th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
	<th>5</th>
	<th>6</th></tr>";

$date='2018-04-01';
$date2='2018-04-03';
$period = new DatePeriod(
     new DateTime($date),
     new DateInterval('P1D'),
     new DateTime($date2)
);

$dates = array();
$i=1;
foreach ($period as $key => $value) {
    $dates[$i]=$value->format('Y-m-d'); 
    //echo "<br>".$dates[$i];			//-------------------------- dates obtained
    $i++;
}
$n=$i-1;


	while($stu=mysqli_fetch_assoc($record))
	{
		for($i=1;$i<=$n;$i++)
		{	
			echo "<tr>";
			echo "<th>".$dates[$i]."</th>";
			for($j=1;$j<7;$j++)
			{	if($stu[$dates[$i]."-".$j]==1)
					{
						echo "<td><p>P</p></td>";
						$pcount++;
						$tcount++;
					}
				else 
					{
						echo "<td><p style='color:red;'>A</p></td>";
						$tcount++;
					}
			} 
			echo "</tr>";
		}
		
	}
	echo "</table>";
		echo "<br>";

	echo "Total classes:".$tcount;
	echo "<br>";
	echo "No.of classes attended:".$pcount;
	$per=($pcount/$tcount)*100;
	
	if ($per>=75){
		echo "<td><p style='color:green;font-size:50px;'>Attendance:$per%</p></td>";
	}
	else {
		echo "<td><p style='color:red;font-size:50px;'>Attendance:$per%</p></td>";
	}
	

?>
</center>
</body>
</html>