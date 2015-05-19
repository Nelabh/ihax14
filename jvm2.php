<?php
session_start();
if(isset($_POST['ans'])) 
 {
	
	if(stristr($_POST['ans'],"f3395cd54cf857ddf8f2056768ff49ae"))
	{
		if($_SESSION['level'] == "4")
		{
			include_once("db.php");

			$query = "update ihax set level = 5, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										
			$result = mysqli_query($conn,$query);
			$_SESSION['level'] = "5";
			
		}
		header('Location: hearts.php');
	}
	else
		header('Location: jvm2.php');
	include_once("log_function.inc.php");
	$ip = $_SERVER['REMOTE_ADDR'];
	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];
	addLog($text);
 }
if(!isset($_SESSION['username']))
	header('Location:login.php');
if($_SESSION['level'] < 4)
	header('Location:index.php');
	
	include_once("header.inc.php");
?>	
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
 <?php 
 
 ?>
 <script language = "JavaScript">

	function ask()

	{

		document.frm.ans.value = prompt("Enter the password:","");

		document.frm.submit();

	}	

  </script>
<script language="JavaScript" src="images/level4script.js"></script>
 <table width = 500 height = 300><td align = center>
 <font style="font-family: horr;font-size: 16px;">
<button type="button" onclick="ask()">Click Me!</font></button>
<br>
<br>
 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 <input type = "hidden" name = "ans" value = "">
 </form><br><br>
 </td></table>
 </div>
 
 <?php
	include_once("footer.inc.php");
?>	
    