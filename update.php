<?php
session_start();
$con=mysqli_connect('localhost','root','Subhasri47');
mysqli_select_db($con,'student');

$absent=array();
for($i=1;$i<7;$i++)
{
	$absent[$i]=0;
}

$i=1;
while($i<61)
{
	$var="id".$i;
	if(!isset($_POST[$var]))
	{	$absent[$i]=1;
		echo $var." : ".$absent[$i]." <br>";
	}
	$i++;
}

$_SESSION['new']=$absent;
$periods=array();
$periods=$_SESSION['periods'];
$date=$_SESSION['selected_date'];

echo "date: ".$date."<br>";
$d1=$date;
$d2=$date;
$d3=$date;
$d4=$date;
$d5=$date;
$date=$date."-1";
echo $date;

$sql="SHOW COLUMNS FROM `daily_attendance_cs1` LIKE '$date%'";
$res=mysqli_query($con,$sql);
$exe=(mysqli_num_rows($res))?TRUE:FALSE;
if($exe)
{
	echo "there";
	header('Location:att.php');
}
else
{
	echo "no";
	$sql2="ALTER TABLE `daily_attendance_cs1` ADD `".$date."` INT DEFAULT '1' ";  
$res1=mysqli_query($con,$sql2);
$date=$d1."-2";
$sql2="ALTER TABLE `daily_attendance_cs1` ADD `".$date."` INT DEFAULT '1' ";  
$res1=mysqli_query($con,$sql2);
$date=$d2."-3";
$sql2="ALTER TABLE `daily_attendance_cs1` ADD `".$date."` INT DEFAULT '1' ";  
$res1=mysqli_query($con,$sql2);
$date=$d3."-4";
$sql2="ALTER TABLE `daily_attendance_cs1` ADD `".$date."` INT DEFAULT '1' ";  
$res1=mysqli_query($con,$sql2);
$date=$d4."-5";
$sql2="ALTER TABLE `daily_attendance_cs1` ADD `".$date."` INT DEFAULT '1' ";  
$res1=mysqli_query($con,$sql2);
$date=$d5."-6";
$sql2="ALTER TABLE `daily_attendance_cs1` ADD `".$date."` INT DEFAULT '1' ";  
$res1=mysqli_query($con,$sql2);
echo "done";
header('Location:att.php');
}
?>