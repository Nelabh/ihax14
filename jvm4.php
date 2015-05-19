<?php
session_start();



 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"d0d0f9"))

	{

	
if($_SESSION['level'] == "16")

		{

			include_once("db.php");



			$query = "update ihax set level = 17, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "17";

			

		}

		header('Location: fly.php');

	}

	else

		header('Location: jvm4.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }



if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 16)

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
<font color="#d0d0f9" style="font-family: Arial, sans-serif;font-size: 15px;">
 <b> 
 <script language = "JavaScript">

	function ask()

	{

		document.frm.ans.value = prompt("Enter the password: it's in my properties","");

		document.frm.submit();

	}	

  </script>
 <script language="JavaScript" src="level16script.js"></script>
<br>
<br>
<button type="button" onclick="ask()">Click Me!</button>
<br>
<br>
 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 <input type = "hidden" name = "ans" value = "">

</font>

 

 </form></b>

 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    