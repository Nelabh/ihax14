<?php
session_start();



 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"55dd1da0d80e36d94ecbb7f8e3df3ac0eaccfe771f49b7cc44c29d98d87051fe"))

	{

	
if($_SESSION['level'] == "21")

		{

			include_once("db.php");



			$query = "update ihax set level = 22, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "22";

			

		}

		header('Location: win.php');

	}

	else

		header('Location: ankit.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }



if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 21)

	header('Location:index.php');

	

	include_once("header.inc.php");

?>	

   <div id="details">

 <div id="navlist">
<font style="font-family: horr2;font-size : 25px">
<ul>

<li><a href="index.php">Home</a></li>

	  <?php 

 if(!isset($_SESSION['username']))

 { 

 ?>

<li><a href="register.php">Register</a></li>



<li><a href="login.php">Login</a></li>

<?php } else {?>

<li><a href="logout.php">Logout</a></li>

<?php } ?>

<li><a href="rules.php">Rules</a></li>



<li><a href="leaderboard.php">Leaderboard</a></li>

</ul>
</font>
</div>
</div>


 

 <div id="ques">



<table width = 500 height = 300><td align = center>
<font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
 <b> 
 
  <img src="images/ankit.jpg" width="310px" height="200px" style = "vertical-align:middle" />
<br>
<br>
Hack the Hacker!!!
 <br>
<br>
 
 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 Password:<input type = "password" name = "ans" value = "">
<br>
<br>
<br>
</font>


 </form></b>

 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    