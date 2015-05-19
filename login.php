<?php
session_start(); 
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

<li><a href="login.php"  class="active">Login</a></li>
<?php } else {?>
<li><a href="logout.php">Logout</a></li>
<?php } ?>
<li><a href="rules.php">Rules</a></li>

<li><a href="leaderboard.php">Leaderboard</a></li>
</ul>
</font>
</div>
</div>
<div id="reg">
  <font color="#CCCCFF" style="font-family: horr2;font-size: 35px;">Login</font>
  </div>
  <br><font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 15px;">
 <div id = "info"><?php 
 if(isset($_SESSION['info']))
 echo $_SESSION['info'];
 $_SESSION['info'] = "";
 ?></div></font>
<br><br>
<font style="font-family: horr; font-size: 15px">
<div id="log">
 <form action = "doLogin.php" method = "POST">
		<table width = 100% cellpadding = 0 cellspacing = 0 align = center border = 0>
			<tr width = 100% align = center><td width = 100% align = center>
			 <table width = 100% cellpadding = 0 cellspacing = 0 align = center border = 0>
				<tr height = 35><td class = form align = right>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = text name = username size = 40></td></tr>
				<tr height = 35><td class = form align = right>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = password name = password size = 40></td></tr>
				
			 </table>
			</td></tr>
			<tr height = 70><td align = center>
			 <p><?php if(isset($_SESSION['error1'])){echo $_SESSION['error1']; unset($_SESSION['error1']);}?></p>
			 <input type = submit value = ENTER style = "font-family: horr; font-size: 15px; cursor: crosshair">
			</td></tr>
		</table>
	 </form>
	
	 </font>
 </div>
 <?php
	include_once("footer.inc.php");
?>	
    