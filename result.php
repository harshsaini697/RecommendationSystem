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




<center><h1 style="font-family:verdana">Results</h1></center>

<?php
	
	include('dbconfig2.php');	
	$tbl_name="record";		
	// How many adjacent pages should be shown on each side?
	$adjacents = 5;
	
	
	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	
	
	$targetpage = "result.php"; 	
	$limit = 7; 								
	$page = isset($_GET['page']) ? mysql_real_escape_string($_GET['page']) : 0;
	if($page) 
		$start = ($page - 1) * $limit; 			
	else
		$start = 0;								
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					
	$prev = $page - 1;							
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$lpm1 = $lastpage - 1;						
	
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		
		if ($page > 1) 
			$pagination.= "<a  href=\"$targetpage?page=$prev\"> previous</a>";
		else
			$pagination.= "<span class=\"disabled\"> previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	
		{
			
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next </a>";
		else
			$pagination.= "<span class=\"disabled\">next </span>";
		$pagination.= "</div>\n";		
	}
?>

	<?php
		while($row = mysql_fetch_array($result))
		{
	
		?>
	<div class = "m1-card" style="padding:20px">
        
        <h1 style = "font-size:25px"><a class = "set" href="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></a></h1>
        </div>
        <?php
	
		}
	?>

<?=$pagination?>

<div id="id03" class="m1-modal">
  <div class="m1-modal-dialog">
    <div class="m1-modal-content m1-card m1-animate-top" style="width:30%;background-color:D63333">
      <header class="m1-container m1-center-align m1-black " style = "background-color:D63333"> 
        <a href="#" class="m1-closebtn">&times;</a>
        <center><h4>Search for a URL</h4></center>
        
      </header>
      <center><div class="m1-container m1-center" style="padding: 40px 40px">
	<form action="search3.php" method="GET">
    <center><input type="text" name="query" id="#id03" placeholder="Search by url,issue" /><br><br>
    <input class="m1-btn" type="submit"  name = "lol" value="Search" /></center>
</form></center>
      </div></center>
 
      </div>
    </div>
  </div>
</div>

<footer class="m1-container  " style="padding:8px;text-align:center;margin-top:70px;background-color:#D63333;color:white">
<center><p style="font-size:20px;font-family:verdana"> Remedies you can trust! </p></center>				
</footer>

</body>
</html>

