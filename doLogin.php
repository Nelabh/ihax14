<?php
	session_start();
		include_once("db.php");

		
		$query2="Select username, name, level from ihax where username='".$_POST['username']."' and password = '".$_POST['password']."'";
		$res2=mysqli_query($conn,$query2);
		$num2=mysqli_num_rows($res2);
		
	
		
		if($num2==1)
		{
			$desc=mysqli_fetch_array($res2);	
		
			$_SESSION['name'] = $desc[0];
			$_SESSION['username'] = $desc[1];
			$_SESSION['level'] = $desc[2];
			header('Location: index.php');
							
			
			
		}
		else if($num2==0)
		{
		
					$_SESSION['error1'] = "Incorrect Username or Password!";
					
					header('Location: login.php');
					
			}
		
		mysqli_close($conn);

		?>