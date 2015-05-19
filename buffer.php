<?php



session_start();


 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"b2/frame.php"))

	{

		if($_SESSION['level'] == "6")

		{

			include_once("db.php");



			$query = "update ihax set level = 7, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "7";

			

		}

		header('Location: infection.php');

	}

	else

		header('Location: buffer.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }



if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 6)

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



<table width = 500 height = 200><td align = center>

 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 <font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
My friend Rish has begin to program in HTML and he made this IFRAME,<br>but the host of the website has kicked him out, and he doesnt remember where is this IFRAME reading it from.....
<br>
<br>
<IFRAME border='0' height='120' width='400' align='center' name='content' src='b2/frame.php' frameBorder='2' scrolling='yes'>
</IFRAME>
<br>
<br>
<br>
Password : <input type = "password" name = "ans" value = "">
<br>
<br>
</font>

 

 </form>
 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    