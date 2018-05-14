	<?php

	require 'db.php';
	if(isset($_POST['login'])){
		$email =$_POST['email1'];
		$pass =$_POST['password'];

		$result = $mysqli->query("SELECT * FROM users WHERE email='$email1'");
		if ($result->num_rows ==0){
			echo "<script type='text/javascript'>
			alert('user not found!!!');
			window.location.href ='login.php';
			</script>";
		}
		else { //existing
			$user = $result->fetch_assoc();
			if ($user['password'] ==$pass) {
			$_SESSION['logged']=1;
			header("location: index2.php");
		}
		else{
			echo "<script type='text/javascript'>
			alert('incorrect passwordd!!!');window.locatio.href ='login.php';
			</script>";
		}
	}
}
	if(isset($_POST['regis'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
		$Email = $_POST['Email'];
		$pass = $_POST['pass'];
		$bmonth = $_POST['bmonth'];
		$bday = $_POST['bday'];
		$byear = $_POST['byear'];
		$loc = $_POST['loc'];
		$additionalinfo = $_POST['additionalinfo'];
		$phone = $_POST['phone'];
		$mobile = $_POST['mobile'];
		$cpass = $_POST['cpass'];

		if  ($cpass == $pass){
			$result = $mysqli->query("SELECT * FROM users WHERE email='email'") or die($mysqli->error());
			if ($result->num_rows >0){
				echo "<script type ='text/javascript'> alert('existing user!!!'); window.location.href = 'register.php';</script>";
			}
			else {
				$sql = "INSERT INTO users (fname, lname, email, password, username, loc)"."VALUES ('$fname','$lname','$email','$pass','$uname','$loc')";
					echo "<script type ='text/javascript'>
						alert('Successfully Created');</script>";
					header("location: index.php");
					$_SESSION['uname'] = $uname;
			}
		}
	}
			else{
				echo "<script type='text/javascript'>alert('Password dont match');
					window.location.href = 'register.php';</script>";
			}
			if(isset($_POST['insert'])){
				$name=$_POST['hname'];
				$a = $_POST['a'];
				$loc = $_POST['b'];
				$c = $_POST['c'];
				$rate = $_POST['rate'];

				echo $des;

				$sql = "INSERT INTO tronixdb (hname, plan_a, plan_b, plan_c, loc,rating)"."VALUES('$name','$a','$b','$c','$loc','$rate')";
				if ($mysqli->query($sql)){
					echo "<script type='text/javascript'>alert('Succesfully Created');
					window.location.href='test.php';
					</script>";
				}
				else {
					echo "<script type='text/javascript'>
					alert('ERROR in saving');
					</script>";
				}
				}
			
?>