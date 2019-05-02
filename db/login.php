<?php
	session_start();
 
	require_once 'connect.php';
 
	$msg = ""; 
	if(isset($_POST['login'])) {
	  $username = trim($_POST['ausername']);
	  $password = trim($_POST['apassword']);
	  if($username != "" && $password != "") {
		try {
		  $query = "select * from `admin` where `admin_uname`=:ausername and `admin_pass`=:apassword";
		  $stmt = $connection->prepare($query);
		  $stmt->bindParam('ausername', $username, PDO::PARAM_STR);
		  $stmt->bindValue('apassword', $password, PDO::PARAM_STR);
		  $stmt->execute();
		  $count = $stmt->rowCount();
		  $row   = $stmt->fetch(PDO::FETCH_ASSOC);
		  if($count == 1 && !empty($row)) {
			/******************** Your code ***********************/
			$_SESSION['sess_user_id']   = $row['id'];
            $_SESSION['sess_user_name'] = $row['admin_uname'];
            header('location: ../admin/dashboard.php');
		   
		  } else {
				header('location: ../admin-login.php');
				$msg = "Invalid username and password!";
				echo $msg;
		  }
		} catch (PDOException $e) {
		  echo "Error : ".$e->getMessage();
		}
	  } else {
		$msg = "Both fields are required!";
		echo $msg;
	  }
	}
?>