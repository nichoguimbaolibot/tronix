<?php
	require 'db.php';
	session_start();
	if(isset($_POST['login'])){
		$email =$_POST['email1'];
		$pass =$_POST['pass1'];

		$result = $mysqli->query("SELECT * FROM register WHERE email='$email'");
		if ($result->num_rows ==0){
			echo "<script type='text/javascript'>
			alert('user not found!!!');
			window.location.href ='login.php';
			</script>";
		}
		else { //existing
			$user = $result->fetch_assoc();
			if ($user['pass'] ==$pass) {
			$_SESSION['logged']=1;
			$_SESSION['name']=$user['email'];
			header("location: index.php");
		}
		else{
			echo "<script type='text/javascript'>
			alert('incorrect passwordd!!!');window.locatio.href ='login.php';
			</script>";
		}
	}
}
	
?>