<?php
session_start();
$con=mysqli_connect('localhost','root','Subhasri47');
mysqli_select_db($con,'student');
?>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<form method="post" action="update.php">
<table>
	<tr>
	<th>S.No</th>
	<th>HT.No</th>
	<th>Attendance</th>
	<th>Name</th>
	<th>Section</th>
	</tr>
<?php
$date=$_POST['sdate'];
echo $date;
$periods=array();
for($i=1;$i<7;$i++)
{
	$periods[$i]=0;
}

$i=1;
while($i<7)
{
	$var="ck".$i;
	if(isset($_POST[$var]))
	{	$periods[$i]=1;
		echo $i;
	}
	$i++;
}

$_SESSION['periods']=$periods;
$_SESSION['selected_date']=$date;
$sql2="SELECT * FROM student_data_cs3";
$record=mysqli_query($con,$sql2);

	$i=1;

	while($stu=mysqli_fetch_assoc($record))
	{
	
	echo "<tr>";
	echo "<td>".$stu['s_no']."</td>";
	echo "<td>".$stu['ht_no']."</td>";
	echo '<td> <input type="checkbox" name="id'.$i.'" value="0" checked/></td>';
	echo "<td>".$stu['student_name']."</td>";
	echo "<td>".$stu['section_batch']."</td>";
	echo "</tr>";
	 
	$i++;
	}
?>
<tr colspan="5"><input type="submit" value="Submit" name="submit"/></tr>

</table>
</form>
</body>
</html>
