<?php
session_start();
$con=mysqli_connect('localhost','root','Subhasri47');
mysqli_select_db($con,'student');
$absentees=array();
$absentees=$_SESSION['new'];
$periods=array();
$periods=$_SESSION['periods'];
$date=$_SESSION['selected_date'];

echo "date: ".$date."<br>";
$hdate=$_SESSION['selected_date'];

$noofperiods=0;
for($i=1;$i<7;$i++)
{
	if($periods[$i]==1)
		$noofperiods++;
}
$date=$_SESSION['selected_date'];

$k=1;
$count=0;

for($k=1;$k<7;$k++)
{
if($periods[$k]==1)
{
for($i=1;$i<61;$i++)
{
	if($absentees[$i]==1){			
	$d=$date."-".$k;					// 0 or 1
	$sql1="UPDATE `daily_attendance_cs1` SET `".$d."`=0 WHERE `s_no`=".$i;
	$res=mysqli_query($con,$sql1) or die("Not possible to update");
	$count++;
}
}
}

}
echo $count;
echo $noofperiods; 
echo "No.of absentees:".$count/$noofperiods;

?>