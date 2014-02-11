<?php
session_start();
include ("db_c_vars.php");

class auth {
  $username;
  $password;
  $type;
  $user_det=array();
  
 auth($g_username,$g_password,$g_type)
 {
   $username = $g_username;
   $password = $g_password;
   $type = $g_type;
 }
  auth($g_user_det)
  {
    $user_det = $g_user_det;
  }
  function user ()
  {
	if ($type == "student"){
	$sql = mysql_query("SELECT * FROM stu_login WHERE `epnum` = '$user' AND `password` = '$password'") or die (mysql_error());
	$sql_results = mysql_fetch_array($sql);
	$user_exists = mysql_num_rows($sql);
	if ($user_exists == 1){
		$_SESSION['user_name'] = $sql_results[2];
		$_SESSION['user_ep'] = $sql_results[0];
		$_SESSION['valid_user'] = true;
		$_SESSION['user_type'] = "student";
		$loginerror = "Login sucessful.";
	}
	}
	else {
		$loginerror = "Incorrect username or password.";
	}
    if ($type == "admin"){
	$sql = mysql_query("SELECT * FROM admin_login WHERE `username` = '$user' AND `password` = '$password'") or die (mysql_error());
	$sql_results = mysql_fetch_array($sql);
	$user_exists = mysql_num_rows($sql);
	if ($user_exists == 1){
		$_SESSION['user_name'] = $sql_results[0];
		$_SESSION['valid_user'] = true;
		if ($sql_results[2]== "yes"){
		$_SESSION['user_type'] = "admin";
		$loginerror = "Login sucessful.";
		}
		else {
		$_SESSION['user_type'] = "faculty";
		$loginerror = "Login sucessful.";
		}
	}
	}
	else {
		$loginerror = "Incorrect username or password.";
	}

	return $loginerror;
  }
  
  function registerUser($user_det)//($epnum,$password,$full_name,$father_name,$semester,$section,$field_name,$age,$dob,$doa,$contact_no){
		mysql_query("INSERT INTO `stu_login`(`epnum`,`password`, `full_name`, `father_name`, `field_name`,`semester`,`section`, `age`, `dob`, `doa`, `contact_no`) VALUES ('$epnum','$password','$full_name','$father_name','$field_name','$semester','$section','$age','$dob','$doa','$contact_no')") or die (mysql_error());
		$errortext="Registered succesfully";
		return $errortext;
		}

}
  
  
 
?>