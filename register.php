<?php

$con = mysqli_connect('127.0.0.1','root','');
if (!$con)
{
	echo "Not conneted to DataBase";
}
if (!mysqli_select_db($con,'Details')) 
{
	echo "DataBase not Selected";
}

$Name = $_POST['Name'];
$Email = $_POST['email'];
$Pass = $_POST['pass'];

$sql = "INSERT INTO Details (Name,Email,Pass) VALUES ('$Name','$Email','$Pass')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Registered';
}
else
{
	echo "Registered";
}

header("refresh:2; url=index.html");

?>