<?php

session_start();
$periods=array();
for($i=1;$i<7;$i++)
{
	$periods[$i]=0;
}
if(isset($_POST['ck1']))
{
	$periods[1]=1;
}
if(isset($_POST['ck2']))
{
	$periods[2]=1;
}
if(isset($_POST['ck3']))
{
	$periods[3]=1;
}
if(isset($_POST['ck4']))
{
	$periods[4]=1;
}
if(isset($_POST['ck5']))
{
	$periods[5]=1;
}
if(isset($_POST['ck6']))
{
	$periods[6]=1;
}
$_SESSION['periods']=$periods;


	
	if($_POST['section']=="CSE 1")
	{
header('Location:login1.php');
}
if($_POST['section']=="CSE 2")
{
header('Location:login2.php');
}
if($_POST['section']=="CSE 3")
{
header('Location:login3.php');
}


		$_SESSION['date']=$_POST['date'];

		
?>	
	