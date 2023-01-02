<?php
session_start();
include "dbconn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
	   return $data;
	}

	$username = validate($_POST["username"]);
	$password = validate($_POST["password"]);

	$hashpassword = password_hash($password, PASSWORD_DEFAULT);

	if (empty($username)) {
		header("Location: index.php?error=username is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";

		if(password_verify($password, $hashpassword)){
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);
				if ($row['username'] === $username && $row['password'] === $password){
					$_SESSION['username'] = $row['username'];
					$_SESSION['rank'] = $row['rank'];
					header("Location: home.php");
					exit();
				}
				else{
					header("Location: index.php?error=Incorrect username or password");
					exit();
				}
			}
			else{
				header("Location: index.php?error=Incorrect username or password");
				exit();
			}
	
		}
		else{
			header("Location: index.php");
		}
	}
}