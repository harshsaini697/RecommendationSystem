<!DOCTYPE html>
<?php
session_start();
?>
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
			width:180px;
			font-weight:bold;
			color:#ffffff;
			background-color:D63333;	
			text-align:center;
			padding:30px;
			text-decoration:none;
			text-transform:uppercase;
		}
a.down:hover,a.down:active {	
			background-color:#DB4D4D;
		}

a:link,a:visited {
			display:block;
			width:180px;
			font-weight:bold;
			color:#ffffff;
			background-color:D63333;	
			text-align:center;
			padding:30px;
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
<a class="down" style="float:left;postion:top" href = "mhome.php">Home</a>
<a class="down" style="float:left;postion:top" href = "about_us.php">About us</a>




<?php 
if(isset($_SESSION['username']) && $_SESSION['username']!="")
{


	
      echo("<a href='logout.php'>Logout</a> ");
	echo  "<a  href='pro2.php'>" . "Hello " . $_SESSION["username"] . " !" . "</a>";
	

     	
}
else
{
      echo("<a  href='login.php'>Login</a> ");
	echo("<a href='sign.php'>Sign up!</a> ");	
}
?>
<h1 style="color:white;font-size:30px;margin-left:450px"> Recommendation System </h1></center>

</ul>
</div>
<br>



<div id="main">
<div class="m1-row">
  <div class="m1-half section" style="text-align:center">
   <img src="1.jpg"  alt="Car" style="width:90%;border-radius:50%">
  </div>
  <div class="m1-half section sectionexample">
    <div style="padding:40px">
  <center>  <h1>We are happy to help!</h1>
	<strong> <h2> What's bothering you? </h2><hr><br></strong></center>	
    
    
    
	 <center><form action="result_key.php" method="GET" >
    	 <input  style="width:42%;;padding:12px" type="text" name="play"><hr>
	<input class="m1-btn" type = "submit" name="search" value="Find me a sloution">
</form></center>
    </div></center>
  </div>
</div>


<div id="main">
<div class="m1-row-padding m1-center m1-margin-top" style="text-align:center">
<div class="m1-third">
  <div class="m1-card-4 m1-padding-top " style="min-height:460px">
<h4> Welcome User!! </h4><br>
 <i class="fa fa-css3 m1-margin-bottom m1-text-theme" style="font-size:120px"></i>
<p> We got every information you want </p>
<a href="http://localhost/colleges.php" style="color:#009688;">See all engineering colleges</a><br><br>
See all Commerce colleges</a><br><br>
See all Medical colleges</a><br><br>
<p> We wish to deliver great experience! </p>
</div>
</div>

<div class="m1-third">
  <div class="m1-card-4 m1-padding-top" style="min-height:460px">
  <h4>User Profiling</h4><br>
  <i class="fa fa-home m1-margin-bottom m1-text-theme" style="font-size:120px"></i>
  <p>We get to know you</p>
See all Central govt colleges</a><br><br>
See all State govt colleges</a><br><br>
See all Deemed colleges</a><br><br>
  <p>Experience our quiz!</p>
  </div>
</div>


<div class="m1-third">
  <div class="m1-card-4 m1-padding-top" style="min-height:460px">
  <h4>Searchify</h4><br>
  <i class="fa fa-css3 m1-margin-bottom m1-text-theme" style="font-size:120px"></i>
  <p>Time is precious!</p>
See colleges in Noida</a><br><br>
See colleges in Delhi</a><br><br>
See colleges in Gurgaon</a><br><br>
  <p>Your convenience is all that matters!</p>
  </div>
</div>
</div>>







<footer class="m1-container  " style="padding:4px;text-align:center;margin-top:90px;background-color:#D63333;color:white">
<center><p style="font-size:22px;font-family:verdana"> Remedies you can trust! </p></center>				
</footer>

</body>
</html>
    
     