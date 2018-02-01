<?php
if(isset($_POST['SUBMIT']))
{
$con=mysqli_connect("localhost","root","","bday");
$user=mysqli_real_escape_string($con,$_POST['user']);
$message=mysqli_real_escape_string($con,$_POST['message']);
$an=0;
if(isset($_POST['an']))
$an=1;
$sql="insert into bday1 values('$user','$message')";
$result=mysqli_query($con, $sql);
if($result)
echo "THE MESSAGE HAS BEEN SENT TO B.T.";
else
echo "ERROR";
}
else
{
header("location: index.html");
}
?>