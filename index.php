

<?php
session_start(); 
	include_once("header.inc.php");
?>	
<div id="details">
<div id="navlist">
<font style="font-family: horr2;font-size : 25px">
<ul>
<li><a href="index.php" class="active">Home</a></li>	
  <?php 
  if(!isset($_SESSION['username'])) 
  {  
  ?>
  <li><a href="register.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <?php } 
  else {?>
  <li><a href="logout.php">Logout</a></li>
  <?php }
  ?>
  <li><a href="rules.php">Rules</a></li>
  <li><a href="leaderboard.php">Leaderboard</a></li>
  </ul>
  </font>
  </div>
  </div>

  </div></div>
  <div id="descrip">
 
  <font color="#dddddd" style="font-family: horr ;font-size: 15px;">
  <p>Welcome to i-Hax</p><br><p>i-Hax is not just another run of the mill hacking contest with lame puzzles and the same exploits over and over again. It has well thought exploits, and makes sure to test the hackers skills to the maximum.Keep the game spirit, and play it on .... Reach the levels after level.. And still there would be more to explore never leave the resources aside... Remember Ankit Fadia, Sunny Vaghela and various other prodigies. </p>
  <p>.......... Now wait no more , get your big dumb boots off, and crack i-Hax. To start Hacking.</p><br/>
  </font>
  
  <p align="center" >
  <a style="text-decoration:none" href = " <?php	include_once("db.php");			if(!isset($_SESSION['username']))		echo "login.php";	else	{		$query2="Select page from ihax_pages where level=".$_SESSION['level'];		$res2=mysqli_query($conn,$query2);				$desc=mysqli_fetch_array($res2);				$loc = $desc[0];		echo $loc;	}	?> "> <font  color=#CC0000; font-weight: "bold";><input type= submit value= "Click Here!!" style="font-family: horr;font-size:14px; font-weight: bold;"></a> </p> </div>
 <?php
	include_once("footer.inc.php");
?>	