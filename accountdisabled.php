<?php
session_start();
 
if(!isset($_SESSION['username']))
	header('Location:login.php');
if($_SESSION['level'] != -1)
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
<li><a href="http://210.212.85.156/viewforum.php?f=35">Hints</a></li>

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

 ?><table width = 500 height = 300><td align = left><font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
  <b>
Dear Participant
<br><br>
We are sorry to inform you that your account has been disabled, as you have voilated the rules of i-hax. You have tried to hack indulged in sharing of information, which is strictly unacceptable.<br>
<br>
Please mail us at ihax@jssaten.ac.in in case of any queries.</font>
  <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" name = "frm">
 
 

 <input type = "hidden" name = "ans" value = ""></p>

 
 </form></b>
 </td></table>
 </div>
 
 <?php
	include_once("footer.inc.php");
?>	
    