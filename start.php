<?php

session_start();

 if(isset($_POST['ans'])) 

 {
	include_once("db.php");
	$query2="Select `password` from `ihax` where `name`='".$_SESSION['username']."'";
	$res2=mysqli_query($conn,$query2);
	$num2=$res2->fetch_array();
	$cpass=$num2['password'];
	echo $cpass;
	
	if(stristr($_POST['ans'],$cpass))

	{

		if($_SESSION['level'] == "0")

		{

			



			$query = "update ihax set level = 1, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "1";

			

		}

		header('Location: jss.php');

	}

	else

		header('Location: start.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }

if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 0)

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

 

 <div id="content">

 <?php 



 ?><table width = 500 height = 300><td align = center>

  <b>

<br>



  <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">


<br><br>
<div id="ques">
<br><br><br><br><br><br>
<font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
 Password : <input type = "password" name = "ans" value = "">
 </font>
 </div>


 

 </form></b>

 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    