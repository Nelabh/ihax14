<?php
session_start();
if(!isset($_SESSION['username']))
	header('Location:login.php');

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

<li><a href="leaderboard.php"  class="active">Leaderboard</a></li>

</ul>
</font>
</div>
</div>
<div id="reg">
 <font color="#CCCCFF" style="font-family: horr;font-size: 35px;">The Hall of Fame..!!!</font>
 	</div>
	<div id="lead">
	<table width = 100% height = 300 cellpadding = 0 cellspacing = 0 align = center border = 0>
			<tr width = 100% align = center>
			<td width = 300 align = center style = "vertical-align:top;"><font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 14px;"><br><br>
			 <table width = 300 cellpadding = 3 cellspacing = 2 align = center border = 0>
				<tr height = 25 bgcolor = #545454><th align = center><font color="#89bad2" style="font-family: Arial, sans-serif;font-size: 15px;"><b>Username</b></font></th><th align = center><font color="#89bad2" style="font-family: Arial, sans-serif;font-size: 15px;"><b>Level</b></font></th></tr>
				<?php 
					include_once("db.php");
					$query2="Select username, level from ihax order by level desc, timestamp asc";
					$res2=mysqli_query($conn,$query2);
					$num2=mysqli_num_rows($res2);
					
					for($i = 1; $i <= 10 && $i <= $num2; $i++ )
					{
						$desc=mysqli_fetch_array($res2);	
						if($i%2 == 0)
							echo "<tr align = center height = 20 bgcolor = #444444><td>".$desc['username']."</td><td>".$desc['level']."</td></tr>";
						else
							echo "<tr align = center height = 20 bgcolor = #333333><td>".$desc['username']."</td><td>".$desc['level']."</td></tr>";
					}
					
					
				?>
				
			 </table></font>
			</td>
			<td width = 250 align = center><font color="#dddddd" style="font-family: Arial, sans-serif;font-size: 14px;">
			 <table width = 200 cellpadding = 0 cellspacing = 0 align = left border = 0>
				<tr height = 35><td align = right><b>My Level - &nbsp;</td><td>
				<?php echo $_SESSION['level']; ?>
				</td></tr>
				<tr height = 35><td align = right><b>Users above my level - &nbsp;</td><td>
				
				<?php 
				$query2="Select count(*) from ihax where level > ".$_SESSION['level'];
					$res2=mysqli_query($conn,$query2);
					$desc=mysqli_fetch_array($res2);
				echo $desc[0]; 
				?>
				</td></tr>
				<tr height = 35><td align = right><b>Users at my level - &nbsp;</td><td>
				<?php 
				$query2="Select count(*) from ihax where level = ".$_SESSION['level'];
					$res2=mysqli_query($conn,$query2);
					$desc=mysqli_fetch_array($res2);
				echo $desc[0]; 
				?>
				
				</td></tr>
				<tr height = 35><td align = right><b>Users below my level - &nbsp;</td><td>
				<?php 
				$query2="Select count(*) from ihax where level < ".$_SESSION['level'];
					$res2=mysqli_query($conn,$query2);
					$desc=mysqli_fetch_array($res2);
				echo $desc[0]; 
				?>
				
				</td> </tr>
				<?php 
					include_once("db.php");
					$query2="Select username, level from ihax order by level desc, timestamp asc";
					$res2=mysqli_query($conn,$query2);
					$num2=mysqli_num_rows($res2);
					
					for($i = 1; $i <= 10 && $i <= $num2; $i++ )
					{
						$desc=mysqli_fetch_array($res2);	
						//echo "<tr align = center height = 20><td>".$desc['username']."</td><td>".$desc['level']."</td></tr>";
					}
					
					
				?>
				
			 </table>
		</font>	
			</td>
			</tr>
			
		</table>
 </div>
 <?php
	include_once("footer.inc.php");
?>	
    