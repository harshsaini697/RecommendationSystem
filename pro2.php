<?php
session_start();
include_once "dbconfig2.php";
if(!isset($_SESSION['username'])){
$_SESSION["p_msg"] = "*You need to login to view Profile!";
header("Location:index.php#id02");

}
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylew2.css">
<link rel="stylesheet" href="stylew3.css">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
h2 {font-size:15px;font-family:verdana}

#head1 {background-color:#D63333;margin-left:100px;margin-down:20px}

a.new{color:black;text-decoration:none;display:line}

a.down:link,a.down:visited {
			display:block;
			width:165px;
			font-weight:bold;
			color:#ffffff;
			background-color:D63333;	
			text-align:center;
			padding:27px;
			text-decoration:none;
			text-transform:uppercase;
		}
a.down:hover,a.down:active {	
			background-color:#DB4D4D;
		}

a:link,a:visited {
			display:block;
			width:165px;
			font-weight:bold;
			color:#ffffff;
			background-color:D63333;	
			text-align:center;
			padding:27px;
			text-decoration:none;
			text-transform:uppercase;
			float:right;
		}
a:hover,a:active {	
			background-color:#DB4D4D;
		}
ul
	{	
		list-style-type:none;
		margin:0;
		padding:0;
		overflow:hidden;
	}
li
	{	
		float:right;
	}
</style>
<body id="my">
<div class="m1-topnav" style="padding:4px;color:black;background-color:#D63333">
	<ul>
<a class="down" style="float:left;postion:top" href = "mhome2.php">Home</a>
<a class="down" style="float:left;postion:top" href = "about_us.php">About us</a>
<a class="down" style="float:left;postion:top" href = "result.php">URLs </a>




<?php 
if(isset($_SESSION['username']) && $_SESSION['username']!="")
{


	echo("<a href='reviews.php'>Reviews!</a> ");
      echo("<a href='logout.php'>Logout</a> ");
	echo  "<a  href='pro2.php'>" . "Hello " . $_SESSION["username"] . " !" . "</a>";
	

     	
}
else
{
      echo("<a  href='login.php'>Login</a> ");
	echo("<a href='sign.php'>Sign up!</a> ");	
	echo("<a href='reviews.php'>Reviews!</a> ");	
}
?>
<strong><h1 style="color:white;font-size:30px;margin-left:495px;margin-top:16px"> Recommendation System </h1></center><strong>

</ul>
</div>

<br>

<div id = "main">
<div class="m1-row m1-card-4" style="margin-top:30px">
  <div class="m1-half section" >
   <img src="wel1.jpg" width="400px" height = "400px" style = "margin-left:85px"><br><br>
<i><u><h1 style = "font-size:35px;margin-left:85px">We wish you a good day!!</i></u></h1>
  </div>
  <div class="m1-half  ">
    <div style="padding:16px">
  <center><h1 style = "float:left;font-size:35px">Greetings  User, Keep Exploring ! </h1></center><br><br><hr>
<?php 
$sql="SELECT * FROM users WHERE u_id ='{$_SESSION['user_id']}'";
$result = mysql_query($sql);
?>
<?php
		while($row = mysql_fetch_array($result))
		{
	
		?>
	
        <ul style="list-style-type:none">
        <li><h1 style = "font-size:27px;margin-right:80px">USERNAME: <?php echo $row[1]; ?></h1></li><hr>
        <li><h2 style = "font-size:27px;margin-right:80px">Email: <?php echo $row[3]; ?></li></h2><hr>
        <li><h3 style = "font-size:27px;margin-right:80px">PHONE: <?php echo $row[4]; ?></li></h3><hr>
	</ul>
        <?php
	
		}
	?>

<a  href = "edit.php" class = "m1-btn" style = "margin-right:430px;width:120px;padding:10px;">Edit </a>
    

   
    </div>
  </div>
</div>
</div><br>

<div id="id03" class="m1-modal">
  <div class="m1-modal-dialog">
    <div class="m1-modal-content m1-card m1-animate-top" style="width:30%">
      <header class="m1-container m1-center-align m1-black"> 
        <a href="#" class="m1-closebtn">&times;</a>
        <center><h4>Search for a URL</h4></center>
        
      </header>
      <center><div class="m1-container m1-center" style="padding: 40px 40px">
	<form action="search3.php" method="GET">
    <center><input type="text" name="query" id="#id03" placeholder="Search by url,issue" /><br><br>
    <input class="m1-btn" type="submit" name = "lol" value="Search" /></center>
</form></center>
      </div></center>
 
      </div>
    </div>
  </div>
</div>

<footer class="m1-container  " style="padding:8px;text-align:center;margin-top:80px;background-color:#D63333;color:white">
<center><p style="font-size:20px;font-family:verdana"> Remedies you can trust! </p></center>				
</footer>

</body>
</html>
