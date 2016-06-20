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
<head><title>Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylew3.css">
</head>
<style>
body{background-color:#ffffff}
h1,h2,h3{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}
</style>
<body id="my">
<nav class="m1-sidenav m1-dropnav m1-black m1-card m1-animate-left" style="display:none;z-index:2">
  <a href="javascript:void(0)" 
  onclick="m1_close()"
  class="m1-closenav m1-large">Close &times;</a><br>
  <a href="http://searchify.byethost17.com/colleges.php#my">Engineering</a><br>		
  <a href="#">Medical</a><br>		
  <a href="#">Commerce</a><br>	
  <a href="#">Law</a><br>		
  <a href="#">My profile</a><br>
  		
</nav>

<div id="id02" class="m1-modal">
  <div class="m1-modal-dialog">
    <div class="m1-modal-content m1-card m1-animate-top">
      <header class="m1-container m1-center-align m1-black"> 
        <a href="#" class="m1-closebtn">&times;</a>
        <center><h4>Login</h4></center>
        
      </header>
      <div class="m1-container"><form class="m1-container" action="checklogin2.php" method="post" onsubmit="return validateLog()">
           
         Username  <input class="m1-input" style="width:100%" type="text" name="username" id="u">
      
      
            
         Password  <input class="m1-input" style="width:100%" type="password" name="password" id="p"><br>
	
      
     
	
     <center> <input type="submit" class="m1-btn  m1-theme" name="log-save"><br>
	<p id="one" style="color:red"></p>
	<p id="two" style="color:red"></p>
	<span style="color:red"><?php   
if (isset($_SESSION["message"]))
{
    echo $_SESSION["message"];
    unset($_SESSION["message"]);
}  
if (isset($_SESSION["profile_msg"]))
{
    echo $_SESSION["profile_msg"];
    unset($_SESSION["profile_msg"]);
}  
if (isset($_SESSION["empty"]))
{
    echo $_SESSION["empty"];
    unset($_SESSION["empty"]);
} 
?></span></center>
      </div>  
      
      </form>
      </div>
      <footer class="m1-container">
      </footer>
    </div>
  </div>
</div>


<div class='m1-container top'>
<div class="m1-topnav m1-right m1-black m1-card" style="text-decoration:none;padding:8px 8px;float:right">

	<a href="http://searchify.byethost17/index.php#"><i class="fa fa-home " style = "font-size:25px"></i></a>
<?php
if(isset($_SESSION['username']) && $_SESSION['username']!="")
{
      echo("<a href='logout.php'>Logout</a> ");
     	
}
else
{
      echo("<a href='#id02'>Login</a> ");
	echo("<a href='http://searchify.byethost17/sign.php'>Sign up!</a> ");	
}
?>
<a href="#">Support</a>
</div>
<?php
if(isset($_SESSION["username"]) ) {
?>
<div class="m1-container top" style="padding:8px 8px;float:right;background-color:#87CEEB;color:#000;">
Welcome <?php echo $_SESSION["username"]; ?>!
</div>
<?php
}
?> 
<a href='http://searchify.byethost17/index.php#'><img src='home.jpg' alt='Searchify.com' height='98px' width='140px' class='img-responsive'></a><br>
 <form action="search3.php" method="GET" style="float:right">
    <input type="text" name="query" id="#id03" />
    <input class="m1-btn" type="submit" value="Search" />
</form>

<div class='toptext m1-wide' style="float:right">THE MOST INTERACTIVE INFORMATION RETRIEVAL SITE</div></div>


<div class="m1-topnav m1-large  m1-black" style="padding:8px 8px;padding-top:1px">
	 <pre><span class="m1-opennav m1-xlarge" onclick="m1_open()">&#9776;</span>                    <a href="http://searchify.byethost17.com/index.php#"><i class="fa fa-home " style = "font-size:40px"></i></a>   <a href="http://searchify.byethost17.com/about_us.php#">About us</a>   <a href="http://searchify.byethost17.com/colleges.php#">Colleges</a>   <a href="http://searchify.byethost17.com/user_reviews.php#my">User reviews</a>   <a href="http://searchify.byethost17.com/contact_us.php#my">Contact Us</a>     <a href='javascript:void(0);' class='topnav-icons fa fa-search ' style="font-size:25px" onclick="m1_open_nav('search')" title='Search Searchify'></a>
</pre></div><br> 
<center>
<div id = "main">
<div class="m1-row m1-card-4">
  <div class="m1-half section" >
   <img src="wel1.jpg" width="400px" height = "400px" style = "margin-right:110px"><br><br>
<i><u><h1 style = "font-size:35px;margin-right:110px">We wish you a good day!!</i></u></h1>
  </div>
  <div class="m1-half  ">
    <div style="padding:16px">
  <h1 style = "float:left;font-size:35px">Welcome To the searchify User! </h1><br><br><hr>
<?php 
$sql="SELECT * FROM users WHERE u_id ='{$_SESSION['user_id']}'";
$result = mysql_query($sql);
?>
<?php
		while($row = mysql_fetch_array($result))
		{
	
		?>
	
        <ul style="list-style-type:none">
        <li><h1 style = "font-size:27px;margin-right:120px">USERNAME: <?php echo $row[1]; ?></h1></li><hr>
        <li><h2 style = "font-size:27px;margin-right:120px">Email: <?php echo $row[3]; ?></li></h2><hr>
        <li><h3 style = "font-size:27px;margin-right:120px">AGE: <?php echo $row[4]; ?></li></h3><hr>
	<li><h4 style = "font-size:27px;margin-right:120px">PASSING YEAR: <?php echo $row[5]; ?></li></h4><hr>
        </ul>
        <?php
	
		}
	?>

<a href = "http://searchify.byethost17/profile.php#id05" class = "m1-btn" style = "margin-right:150px;">Edit </a>
    

   
    </div>
  </div>
</div>
</div><br>
<footer class="m1-container  m1-black" style="padding:32px;text-align:center">
  <h4>Follow Us</h4>
  <a class="m1-btn-floating m1-teal" href="javascript:void(0)" title="Rss"><i class="fa fa-rss"></i></a>
  <a class="m1-btn-floating m1-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="m1-btn-floating m1-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="m1-btn-floating m1-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="m1-btn-floating m1-teal" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>&#169; Copyright www.Searchify.com</p>			

  <div style="position:relative;bottom:103px;z-index:1;float:right" class="m1-tooltip">
    <span class="m1-text m1-padding m1-teal">Go To Top</span>   
    <a class="m1-btn m1-black" href="#my"><span class="m1-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>				
</footer>


<div id="id05" class="m1-modal">
  <div class="m1-modal-dialog">
    <div class="m1-modal-content m1-card m1-animate-top" style = "width:60%">
      <header class="m1-container m1-center-align m1-black"> 
        <a href="#" class="m1-closebtn">&times;</a>
        <center><h4>Login</h4></center>
        
      </header>
      <div class="m1-container"><form class="m1-container" action="checkProfile.php" method="post" onsubmit="return validateLog()">
           
         Old Password <input class="m1-input" style="width:80%" type="password" name="o_pass" id="u">
      
      
            
         New Password  <input class="m1-input" style="width:80%" type="password" name="n_pass" id="p"><br>


	 Confirm Password  <input class="m1-input" style="width:80%" type="password" name="c_pass" id="p"><br>
	
      
     
	
     <center> <input type="submit" class="m1-btn  m1-theme" name="pro"><br>
	<p id="one" style="color:red"></p>
	<p id="two" style="color:red"></p>
	<span style="color:red"><?php   
if (isset($_SESSION["msg1"]))
{
    echo $_SESSION["msg1"];
    unset($_SESSION["msg1"]);
}  
if (isset($_SESSION["msg2"]))
{
    echo $_SESSION["msg2"];
    unset($_SESSION["msg2"]);
}  
if (isset($_SESSION["msg3"]))
{
    echo $_SESSION["msg3"];
    unset($_SESSION["msg3"]);
} 
?></span></center>
      </div>  
      
      </form>
      </div>
      <footer class="m1-container">
      </footer>
    </div>
  </div>
</div>




<script>
function m1_open() {
 document.getElementById("main").style.marginLeft = "15%"
  document.getElementsByClassName("m1-sidenav")[0].style.width ="15%";
 document.getElementsByClassName("m1-sidenav")[0].style.display = "block";
 document.getElementsByClassName("m1-opennav")[0].style.display = 'none';
  document.getElementsByClassName("m1-sidenav")[0].style.opacity = "0.9";
}
function m1_close() {
 document.getElementById("main").style.marginLeft = "0%";
 document.getElementsByClassName("m1-sidenav")[0].style.display = "none";
 document.getElementsByClassName("m1-opennav")[0].style.display = "inline-block";
}



</script>

</body>
</html>