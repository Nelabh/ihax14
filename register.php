<?php
session_start(); 
	include_once("header.inc.php");
?>	
    
<script language="JavaScript">
<!--
function check_email(e)
{
	ok = "1234567890qwertyuiop[]asdfghjklzxcvbnm.@-_QWERTYUIOPASDFGHJKLZXCVBNM";

	for(i=0; i < e.length ;i++)
	{
		if(ok.indexOf(e.charAt(i))<0)
			return (false);
	} 

	if (document.images) 
	{
		re = /(@.*@)|(\.\.)|(^\.)|(^@)|(@$)|(\.$)|(@\.)/;
		re_two = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (!e.match(re) && e.match(re_two))
			return (-1);
	}
}


function check()
{

if (document.frm.username.value=="")
{

alert("Please fill in your 'Username'");
document.frm.username.focus();

return;
}
if (document.frm.password.value=="")
{

alert("Please fill in your 'Password'");
document.frm.password.focus();

return;
}
if (document.frm.password.value!=document.frm.conf_pass.value)
{

alert("Please fill in the same 'Password'");
document.frm.conf_pass.focus();

return;
}

if (document.frm.name.value=="")
{

alert("Please fill in your 'Name'");
document.frm.name.focus();

return;
}

if (document.frm.institute.value=="")
{
alert("Please fill in the 'Institute Name'");
document.frm.institute.focus();

return;
}



if(document.frm.contact.value=="")
{
alert("Please provide your 'Contact Number'");
document.frm.contact.focus();

return;
}
	
if (document.frm.email.value=="")
{
alert("Please fill in the 'E-mail'");
document.frm.email.focus();

return;
}

if (!check_email(document.frm.email.value))
{
alert("Please check the 'Email-Id'");
document.frm.email.focus();

return;
}



if (!document.frm.agree.checked)
{
alert("Please agree to the rules given.");
document.frm.agree.focus();
return;
}
document.frm.submit()
//alert("");
}


//-->

</script>			 

<div id="details">
 <div id="navlist">
<font style="font-family: horr2;font-size : 25px">
 <ul>
<li><a href="index.php">Home</a></li>
<li><a href="register.php"  class="active">Register</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="rules.php">Rules</a></li>

<li><a href="leaderboard.php">Leaderboard</a></li>
<li><a href="mailto:errata@jssaten.ac.in">Contact Us</a></li>
</ul>
</font>
</div>
</div>
<div id="reg">
	<font color="#CCCCFF" style="font-family: horr;font-size: 30px;">  Register </font>
	  <div id = "info"><?php 
 if(isset($_SESSION['info']))
 echo $_SESSION['info'];
 $_SESSION['info'] = "";
 ?></div>
 </div>
 <font style="font-family: horr;">
 <div id="regis">
	 <form action = "doReg.php" method = "POST" name = frm>
		<table width = 100% cellpadding = 0 cellspacing = 0 align = center border = 0>
			<tr width = 100% align = center><td width = 100% align = center>
			 <table width = 100% cellpadding = 0 cellspacing = 0 align = center border = 0>
				<tr ><td class = form align = right>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = text name = username size = 40></td></tr>
				<tr height = 35><td class = form align = right>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = password name = password size = 40></td></tr>
				<tr height = 35><td class = form align = right>Confirm Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = password name = conf_pass size = 40></td></tr>
				<tr height = 35><td class = form align = right>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = text name = name size = 40></td></tr>
				<tr height = 35><td class = form align = right>Institute&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = text name = institute size = 40></td></tr>
				
				<tr height = 35><td class = form align = right>Contact No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = text name = contact size = 40></td></tr>
				<tr height = 35><td class = form align = right>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type = text name = email size = 40></td></tr>
				
			 </table>
			</td></tr>
			<tr height = 20><td align = center class = form>
			 <font color="#c0c0c0"><input type=checkbox name="agree" id="agree" value="1">&nbsp; I have read all the instructions, and agree to stand by them. &nbsp;</font>
			</td></tr>
			<tr height =0><td align = center>
			<input type = button onclick = check() value = REGISTER style = " font-family:horr;font-size:15px;cursor:crosshair">
			</td></tr>
		</table></font>
	 </form>
	 
 </div>
 </div>
 
 <?php
	include_once("footer.inc.php");
?>	
    