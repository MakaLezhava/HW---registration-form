<?php

session_start();

require_once('database.php');
//required fields
$user = $emailf = $pass = $cpass = FALSE;

$username = mysqli_real_escape_string($conn,$_POST['username']);
$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);

if(!empty($username)) $user = TRUE; else echo 'username is required!<br>';
if(!empty($email)) $emailf = TRUE; else echo 'email is required!<br>';
if(!empty($password)) $pass = TRUE; else echo 'password is required!<br>';
if(!empty($cpassword)) $cpass = TRUE; else echo 'confirm password is required!<br>';

if($user && $emailf && $pass && $cpass){
  $query = "INSERT INTO users (username,firstname,lastname,email,password,password_confirm,gender) 
    VALUES ('$username','$firstname','$lastname','$email','$password','$cpassword','$gender')";
	
	if(mysqli_query($conn,$query)){
	  $_SESSION['last_inserted_id'] = mysqli_insert_id($conn);
	  header('Location: index.php');
	  exit();
	}else{
	  exit();
	}
}
