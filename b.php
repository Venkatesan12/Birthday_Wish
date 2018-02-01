<style>
table {border-collapse:collapse; table-layout:fixed; width:400px;}
table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
</style>
<?php
echo "HELLO BT,UR MESSAGES ARE";
$con=mysqli_connect("localhost","root","","bday");
$query="select * from bday1";
$r=mysqli_query($con,$query);
echo "<br><input type=button onclick='window.location.reload();' value=REFRESH>";
echo "<table><th><center>INBOX</center></th>";
if(mysqli_num_rows($r)==0)
echo "<tr><td><b><center>NO MESSAGES</center></b></td></tr></table>";
foreach ($r as $k)
{
	
	echo "<tr><td><b>$k[user]:</b><br>$k[message]</td></tr>";

}
echo "</table>";
?>