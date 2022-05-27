<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['integral']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$integral = validate($_POST['integral']);
	$pass = validate($_POST['password']);

	if (empty($integral)) {
		header("Location: index.php?error=User Name or Voter ID is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$integral' OR data='$integral' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if (($row['user_name'] === $integral || $row['data'] === $integral) && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location:home.php");
		        exit();
            }else{
				header("Location:login.php?error=Incorect User_name/Voter_ID or password");
		        exit();
			}
		}else{
			header("Location:login.php?error=Incorect User_name/Voter_ID or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}