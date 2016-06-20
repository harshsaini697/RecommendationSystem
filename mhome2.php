 
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
<script src="valid3.js" type="text/javascript"></script>
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
	<a class = "l" style="background-color:#DB4D4D" href='pro2.php'> Hello <?php echo $_SESSION["username"]; ?>!  </a>
	

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



<div id="main">

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


<div class="m1-row">
  <div class="m1-half section" style="text-align:center">
   <img src="1.jpg"  alt="Car" style="width:90%;border-radius:50%">
  </div>
  <div class="m1-half section sectionexample">
    <div style="padding:40px">
  <center>  <h1>We are happy to help!</h1>
	<strong> <h2> What's bothering you? </h2><hr><br></strong></center>	
    
    
    
	 <center><form action="result_key.php" method="GET" onsubmit="return validate_key()" >
	<p id = "key_m"></p>
    	 <input  style="width:42%;;padding:12px" type="text" name="play" id = "key"><hr>
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
<a href="#" style="color:#006699;text-decoration:none">Experts in stress management</a><br><br>
<a href="#" style="color:#006699;text-decoration:none">Experts in Axiety issues</a><br><br>

<p> We wish to deliver great experience! </p>
</div>
</div>

<div class="m1-third">
  <div class="m1-card-4 m1-padding-top" style="min-height:460px">
  <h4>User Satisfaction</h4><br>
  <i class="fa fa-home m1-margin-bottom m1-text-theme" style="font-size:120px"></i>
  <p>We get to know you</p>
<a href="#" style="color:#006699;text-decoration:none">Experts in Migraine</a><br><br>
<a href="#" style="color:#006699;text-decoration:none">Experts in Headache</a><br><br>

  <p>Experience our Site!</p>
  </div>
</div>


<div class="m1-third">
  <div class="m1-card-4 m1-padding-top" style="min-height:460px">
  <h4>Reccomend4you</h4><br>
  <i class="fa fa-css3 m1-margin-bottom m1-text-theme" style="font-size:120px"></i>
  <p>Time is precious!</p>
<a href="#" style="color:#006699;text-decoration:none">Experts in Acne</a><br><br>
<a href="#" style="color:#006699;text-decoration:none">Experts in Hair loss</a><br><br>

  <p>Your convenience is all that matters!</p>
  </div>
</div>
</div>







<footer class="m1-container  " style="padding:4px;text-align:center;margin-top:90px;background-color:#D63333;color:white">
<center><p style="font-size:22px;font-family:verdana"> Remedies you can trust! </p></center>				
</footer>

</body>
</html>
    
     