<?php
session_start();
include_once "dbconfig2.php";
if(isset($_POST['pro']))
{
$old = $_POST['o_pass'];
$new = $_POST['n_pass'];
$confirm = $_POST['c_pass'];
//$result = "SELECT 'password' from users where 'u_id' = '{$_SESSION['user_id']}'";
$result2 = mysql_query("select pass from users where U_ID = '{$_SESSION['user_id']}'");
$a_old = mysql_result($result2, 0 ,'pass');
if($a_old == $old)
{
	 
	if($new == $old)
	{
	$_SESSION['msg4'] = "New password cannot be same as old one!";
		header("Location:edit.php");
	}
	
	else if($new == $confirm)
	{
		$sql = "Update users SET pass = '$new' WHERE U_ID = '{$_SESSION['user_id']}'";
		mysql_query($sql);
		$res = mysql_query($sql);
		
		header("Location:edit.php");
		$_SESSION['msg3'] = "Your password has been changed!";
		}
		
	else
	{
		$_SESSION['msg1'] = "New password did'nt match!";
		header("Location:edit.php");
	
	}

}
else
{
$_SESSION['msg2'] = "Password didnt match!";
	header("Location:edit.php");

}


}
?>