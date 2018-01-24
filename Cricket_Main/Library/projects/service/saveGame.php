<?php 
if(isset($_REQUEST))
{
mysql_connect("localhost","root","");
mysql_select_db("darts");
error_reporting(E_ALL && ~E_NOTICE);

$email=$_POST['email'];
$sql="INSERT INTO games() VALUES ('$email')";
$result=mysql_query($sql);
if($result){
echo "You have been successfully subscribed.";
}
}
?>
