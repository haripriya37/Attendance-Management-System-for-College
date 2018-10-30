<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
echo 'not connected to server';
}
if(!mysqli_select_db($con,'rform'))
{
echo 'database not selected';
}
$name=$_POST['candidate_name'];
$fname=$_POST['father_name'];
$mname=$_POST['mother_name'];
$dob=$_POST['dob'];
$phnno=$_POST['mobile_no'];
$email=$_POST['email'];
$sql1="INSERT INTO student_register(candidate_name,father_name,mother_name,dob,mobile_no,email) VALUES ('$name','$fname','$mname','$dob','mobile_no','email')";

if(!mysqli_query($con,$sql1))
{
echo 'not registered';
}
else
{
echo 'registered succesfully';
}






?>