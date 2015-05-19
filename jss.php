<?php

session_start();



 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"kickstartz14.html"))

	{

		if($_SESSION['level'] == "1")

		{

			include_once("db.php");



			$query = "update ihax set level = 2, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "2";

			

		}

		header('Location: jvm1.php');

	}

	else

		header('Location: jss.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }



if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 1)

	header('Location:index.php');

	

	include_once("header.inc.php");

?>	
<script> function roundin()
{
	window.location="kickstartz14.html";
}

</script>
   
<div id="details">
 <div id="navlist">
 <font style="font-family: horr2; font-size: 25px;">

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

<font color="#dddddd" style="font-family: horr;font-size: 15px;">
 <b> Something simple to start with... <br>The submit button named "GO!!" takes us on a round trip to some location
		<br> Where does the button take us to?? </br>
		
		<button onclick="roundin()"> GO!! </button>
<br>
<br>
 </font>


 

 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 <input type = "password" name = "ans" value = "">



 

 </form></b>

 </td></table>


 </div>

 <?php

	include_once("footer.inc.php");

?>	

    