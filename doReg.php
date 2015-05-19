<?php
	session_start();
		include_once("db.php");		
		
		$query2="Select * from ihax where username='".$_POST['username']."'";
		$res2=mysqli_query($conn,$query2);
		$num2=mysqli_num_rows($res2);
		
	
		
		if($num2==1)
		{
			$_SESSION['info'] = "<font color=#fff >Username already exists!</font>";
			header('Location: register.php');
							
			
			
		}
		else if($num2==0)
		{
		
		
			$name1=$_POST['name'];											
			
			
			$phone1=$_POST['contact'];
			
			$clg1=$_POST['institute'];
			$email1=$_POST['email'];
			
			$pass1=$_POST['password'];
			$username = $_POST['username'];
			$time = time();
			$query = "insert into `ihax`(`username`, `password`, `name`, `institute`, `contact`, `email`, `timestamp`) values('$username','$pass1', '$name1', '$clg1', '$phone1', '$email1', '$time')";										
				$result = mysqli_query($conn,$query);
				if(mysqli_affected_rows($conn)==1)
				{	
					$_SESSION['name'] = $username;
					$_SESSION['username'] = $name1;
					$_SESSION['level'] = "0";
					header('Location: index.php');
					
				}
				else 
					echo "Database Error!";
			}
		
		mysqli_close($conn);

		?>