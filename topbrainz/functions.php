<?php
	
	
	function contact(){
		
		if(isset($_POST["send_message"])){
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
		
			$name = $_POST["name"];
			$email = $_POST["email"];
			$message = $_POST["message"];
			$to = "amotuka6@gmail.com";
			$headers = "From; " . $email . "\r\n";
			$subject = "Submitted application";
			$msg = $message . "\r\n";
			$msg .= "From: " . $name . "\r\n";  
			mail($to, $subject, $msg, $headers);
			
			
			
			if(!$name){
				echo '"<font color="#FF0000">Fill in your name</font>"';
			}
			else if(!$email){
				echo '"<font color="#FF0000">Fill in your email</font>"';	
			}
			else if(!$message){
				echo '"<font color="#FF0000">Please enter your message"</font>';	
			}
			else{
			
				$insert = "INSERT INTO message VALUES('', '$name', '$email', '$message')";
				
				
				$message_sent = mysql_query($insert);
				
				if(!$message_sent){
					echo '"<font color="#FF0000">Message sending failed.</font>"';
					
				}else{
					echo '"<font color="#FF0000">Your message has been sent.</font>"';	
					
				}
			}
		}
	}
	
	function retrieve_contact(){	

		$select = "select * from message";
		$output = mysql_query($select);
			
		while($fetch = mysql_fetch_row($output))
		{
			echo $fetch[0] . "<br/>";
			echo $fetch[1] . "<br/>";
			echo $fetch[2] . "<br/>";
			echo $fetch[3] . "<br/>";
		}
		
	}
		
		
	function signIn(){
		if(isset($_POST["sign_in"])){
			
			$email = trim($_POST["EmailAddress"]);		
			$password = trim($_POST["Password"]);
			$validate_email = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; 
					//if for validate
			if(!preg_match($validate_email,$email)){
				echo '<font color="#FF0000">Email not valid</font>';
			}
			else {
					
				$select = "SELECT * FROM signup WHERE EmailAddress = '$email' AND Password = '$password'";
				$test = mysql_query($select);
				
				// Starting session
				
				if(mysql_num_rows($test) == 1){
					session_start();
					$_SESSION['email'] = $email;
					//header('Location: quiz.php'); 
					echo '<script> location.href="quiz.php" </script>';
				}
				else{
					
					echo '<script> location.href="Sign in.php" </script>';
					//header('Location: Sign in.php');
				}
				
				
				}
			}
	}
	
	function signup(){
		
		if(isset($_POST["signUp"])){
			$username = trim($_POST["Username"]);
			$email = trim($_POST["EmailAddress"]);
			$password = trim(md5($_POST["Password"]));
			$vpassword = trim($_POST["VerifyPassword"]);
			$validate_email = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
				//if for validate
			if(!preg_match($validate_email,$email)){
				echo '"<font color="#FF0000">Email not valid</font>"';
			}
			
			if(!$username){
				echo '"<font color="#FF0000">Please enter your Username</font>"';
			}
			else if(!$email){
				echo '"<font color="#FF0000">Please enter your E-mail address</font>"';
			}
			else if(!$password){
				echo '"<font color="#FF0000">Please enter password</font>"';
			}
			else if(!$vpassword){
				echo '"<font color="#FF0000">Password not verified</font>"';
			}
			else if($vpassword != $password){
				echo '"<font color="#FF0000">Password does not match</font>"';
			}
			else{
				$insert2 = "INSERT INTO signup VALUES('', '$username', '$email', '$password')";
				$check = mysql_query($insert2);	
				if($check){
					session_start();
				    $_SESSION['email'] = $email;
					echo '<script>location.href="quiz.php"</script>';
					//header('Location: quiz.php');
				
				}
				else{
					echo'For now';
				}
			}
		}
	}
	
	
	
?>