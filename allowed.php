<?php

session_start();

 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"js6-window.open.php"))

	{

		if($_SESSION['level'] == "9")

		{

			include_once("db.php");



			$query = "update ihax set level = 10, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "10";

			

		}

		header('Location: bit.php');

	}

	else

		header('Location: notallowed.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }

if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 9)

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

 <?php 



 ?><table width = 500 height = 300><td align = center>
 <script language="Javascript">
function checkPass(){
Location  = document.form.password.value
Location = "js6-" + "window.open" + ".php"
if (document.form.password.value == Location ) {
    alert("Good Job!")
    window.open(Location)
    }

else{
    alert("Try Again!")
    }

}
</script>
<font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
 <b>Not so fast, now crack this..
 </b><br><br><br>




<form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

<b>Password : </b><input type = "password" name = "ans" value = "">
</font>


 

 </form>

 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    