<?php



session_start();


 if(isset($_POST['ans'])) 

 {

	

	if(stristr($_POST['ans'],"127510"))

	{

		if($_SESSION['level'] == "2")

		{

			include_once("db.php");



			$query = "update ihax set level = 3, timestamp = '".time()."' where username = '".$_SESSION['name']."'";										

			$result = mysqli_query($conn,$query);

			$_SESSION['level'] = "3";

			

		}

		header('Location: nokia.php');

	}

	else

		header('Location: jvm1.php');

	include_once("log_function.inc.php");

	$ip = $_SERVER['REMOTE_ADDR'];

	$text = $_SESSION['name']."   ".$ip."   ".$_SESSION['level']."   ".$_POST['ans'];

	addLog($text);

 }



if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 2)

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

 <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">

 
<script> 

function checkpass()  
{ 

 pass=document.getElementById("ans").value;  
 a=125;
b=++a+a++;
c=a+b+--a;
d=--c-c--;
a=b*c;
a=a--;
abc=a+b+c+d;

 if(pass==abc)  
 {  
  alert('Congratz! You are good at Math'); 
  window.location.href=abc+".php"  
 }  
 else  
 {  
  alert('Sorry, try again when you learn more Math!'); 
  window.location.href="java3.php"
 } 

} 

</script> 


 
 <font color="#dddddd" style="font-family: horr;font-size: 15px;">
<b>Password : </b>
<input type = "password" name = "ans" id="ans" value = "">
<br>
</font>

 

 </form>
 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    