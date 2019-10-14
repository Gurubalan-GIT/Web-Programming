<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="server"; // Mysql password
$db_name="studb"; // Database name
$tbl_name="Login"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['uname'];
$mypassword=$_POST['pwd'];

$sql="SELECT * FROM $tbl_name WHERE uname='$myusername' and pwd='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
	$row=mysql_fetch_row($result);
 	$sname=$row[0];
	print("<h1>Welcome, $sname!<br></h1>");
	echo "<h2>Login Success!!!</h2>";
	
	if (isset($_POST['remuser'])){
		setcookie("UName",$myusername,time()+60*60*24);
		setcookie("Pwd",$mypassword,time()+60*60*24);
	}
	else
	{
		setcookie("UName","",time()-5);
		setcookie("Pwd","",time()-5);
	}

//	header("location:login_success.html");
}
else {
	echo "<h2>Login Failed!!!</h2>";
	//header("location:login_failed.php");
}
?>

