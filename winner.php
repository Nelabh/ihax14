<?php

session_start();





if(!isset($_SESSION['username']))

	header('Location:login.php');

if($_SESSION['level'] < 23)

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

 <?php 



 ?><table width = 500 height = 300><td align = center>

  <b>

If you see this page then you are the one named "7H3 H@X0R".<br><br>

<br>


</b>

 </td></table>

 </div>

 

 <?php

	include_once("footer.inc.php");

?>	

    