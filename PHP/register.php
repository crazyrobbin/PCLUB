<?php
session_start();
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$name=$_POST['name'];

$con=mysql_connect("localhost:3306");
mysql_select_db("test",$con);

$result=mysql_query("select * from  login where userid='$username' ");
$row=mysql_fetch_array($result);

if($row) 	{ mysql_close(); $_SESSION['error1']=1; header('Location:http://localhost/PCLUB/index.php');}

else 
	{
		mysql_query("INSERT INTO login (`userid` ,`password` ,`name`)VALUES ('$username','$pwd','$name')");
		mysql_close();

		$_SESSION['username']=$username;
		$_SESSION['name']=$name;
		$_SESSION['pwd']=$pwd;

		header('Location:http://localhost/PCLUB/index.php');
		//echo "hi";
	}
?>
