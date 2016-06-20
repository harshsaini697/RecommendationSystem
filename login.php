<!DOCTYPE html>
<?php
session_start();
?>
<html>
<title>Sign</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link href = "cstyle.css" rel = "stylesheet" type = "text/css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
h2 {font-size:15px;font-family:verdana}

#head1 {background-color:#D63333;margin-left:100px;margin-down:20px}

a.l:link,a.l:visited {
			display:block;
			width:170px;
			font-weight:bold;
			color:#ffffff;
			background-color:D63333;	
			text-align:center;
			padding:27px;
			text-decoration:none;
			text-transform:uppercase;
			float:right;
		}
a.l:hover,a.l:active {	
			background-color:#DB4D4D;
		}
ul

a.down:link,a.down:visited {
			display:block;
			width:160px;
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


a.set:link:,a.set:visited {
			display:block;
			width:50px;
			font-weight:bold;
			text-align:center;
			padding:30px;
			text-decoration:none;
			text-transform:uppercase;
			color:#ffffff;

				}
a.set:hover,a.set:active {	
			background-color:#F0F0F0;
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
?>
	<a href="#id03" class='l fa fa-search' style="font-size:25px"></a>
	      <a class= "l" href='logout.php'> Logout</a>
	<a class = "l"  href='pro2.php'> Hello <?php echo $_SESSION["username"]; ?>!  </a>
	

<?php   	
}
?>

<?php
if(!isset($_SESSION['username']))
{
 ?>
<a href="#id03" class='l fa fa-search' style="font-size:25px"></a>
     <a class="l" href='login.php'>Login</a> 
	<a class="l" href='sign.php'>Sign up!</a>
 

<?php	
 	
}
?>
<strong><h1 style="color:white;font-size:27px;margin-left:490px;margin-top:18px"> Recommend4you.com </h1></center><strong>
</ul>
</div><br>



<center> <div id="main" style="padding:10px">
	 <div class="m1-container m1-card-4 " style="width:50%;background-color:#F0FFF0;margin-top:80px"><form class="m1-container" action="validate_login.php" method="POST" onsubmit="return validate()" >
		<?php   
if (isset($_SESSION["message"]))
{
    echo $_SESSION["message"];
    unset($_SESSION["message"]);
}
?>

        <h2>Username </h2><input style="width:42%;margin-top:4px;padding:12px" type="text" id="una" name="username" >  <br>

	<h2>Password</h2>      <input style="width:42%;;padding:12px" type="password" id="psw"  name="password"><br><br>
    
      <input type="submit" class = "m1-btn m1-theme" style="margin-down:58px" name="login" value="Login"></input><br><br>
      </form>
      </div>
	</div></center>	

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

<footer class="m1-container  " style="padding:8px;text-align:center;margin-top:113px;background-color:#D63333;color:white">
<center><p style="font-size:20px;font-family:verdana"> Remedies you can trust! </p></center>				
</footer>

</body>
</html>