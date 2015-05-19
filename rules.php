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

<li><a href="login.php" >Login</a></li>
<?php } else {?>

<li><a href="logout.php">Logout</a></li>
<?php } ?>
<li><a href="rules.php" class="active">Rules</a></li>

<li><a href="leaderboard.php">Leaderboard</a></li>

</ul>
</font>
</div>
</div>
 <div id="reg">
 <font color="#CCCCFF" style="font-family: horr2;font-size: 35px;">Rules</font>
 </div>

 <div id="rules">
 <p><font color="#dddddd" style="font-family: horr;font-size: 14px;"><ul style="list-style:square;"><li>
It is an individual event. Players will register themselves on the spot. </li><li>

The event will consist of a series of levels which need to be completed in order. The first two players to do so, or the top two players at the highest position at the end of the event shall be declared the winner.</li><li> 

Any technical or non-technical assistance required for solving a level will be entertained only within the lab.</li><li>

Each level will be in the form of one or more html web pages, containing text, pictures or other data.</li><li>

There is no specific way of getting to the next level, players have to identify that themselves.</li><li>

All the clues and material needed to solve a particular question is given on the page itself.</li><li>

There will be no time restriction on a specific level.</li><li>

Any illicit hacking attempts will lead to immediate disqualification.</li><li>

The decision of the i-Hax organizing team shall be final.</li>
</ul></font></p>
 </div>
 <?php
	include_once("footer.inc.php");
?>	
    