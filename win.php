<?php



session_start();


 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"twelve plus one"))

	{

		if($_SESSION['level'] == "22")

		{

			include_once("db.php");



			$query = "update ihax set level = 23, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "23";

			

		}

		header('Location: winner.php');

	}

	else

		header('Location: win.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }



if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 22)

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

<li><a href="http://210.212.85.156/viewforum.php?f=38">Hints</a></li>



<li><a href="logout.php">Logout</a></li>

<?php } ?>

<li><a href="rules.php">Rules</a></li>



<li><a href="leaderboard.php">Leaderboard</a></li>

<li><a href="mailto:ihax@jssaten.ac.in">Contact Us</a></li>

</ul>
</font>
</div>

</div>

 

 <div id="ques">



<table width = 500 height = 300><td align = center>

 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 
<script language="JavaScript">

function checkpassword()
{

	
	var a = password.charAt(2)
	var b = password.charAt(8)
	var c = password.charAt(5)
	var d = password.charAt(4)
	var e = password.charAt(14)
	var f = password.charAt(13)
	var g = password.charAt(11)
	var h = password.charAt(7)
	var i = password.charAt(3)
	var j = password.charAt(9)
	var k = password.charAt(10)
	var l = password.charAt(6)
	var m = password.charAt(0)
	var n = password.charAt(1)
	var o = password.charAt(12)
	
	var riddle = "eleven plus two";

	if (a+""+b+""+c+""+d+""+e+""+f+""+g+""+h+""+i+""+j+""+k+""+l+""+m+""+n+""+o==riddle)
	{
		alert("Congratulations!");
	}
	else
	{
		alert("Wrong, but keep at it!");
		
	}

}
</script>


 
 <font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
<b>Password : </b>
<input type = "password" name = "ans" value = "">
<br>
</font>

 

 </form>
 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    

