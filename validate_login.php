<?php
session_start();
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("crawler",$conn);
$result = mysql_query("SELECT * FROM users WHERE name='" . $_POST["username"] . "' and pass = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION['user_id'] = $row['U_ID'];
$_SESSION['username'] = $row['name'];
$user_id = $row['U_ID'];
}

 else {
$_SESSION['message'] = "*Invalid Username or Password!";
header("Location:login.php");

}
}
if(isset($_SESSION['user_id'])) {
header("Location:mhome2.php");
}
?>