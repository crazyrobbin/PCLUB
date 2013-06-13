<?php
session_start();

if(!isset($_POST['username'])) header('Location: http://localhost/PCLUB/index.php');	//to avoid direct login

else
{
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];

	$con=mysql_connect("localhost:3306");
	mysql_select_db("test",$con);

	$result=mysql_query("select * from  login where userid='$username' and password='$pwd' ");
	$row=mysql_fetch_array($result);
	if($row) 
	{	
		$_SESSION['name']=$row['name'];
		$_SESSION['username']=$row['userid'];
		$_SESSION['pwd']=$row['password'];
		mysql_close();
		header('Location:http://localhost/PCLUB/index.php');
	}
	else {
		mysql_close();
		$_SESSION['error']=1;
		header('Location:http://localhost/PCLUB/index.php');
	}
}
?>
