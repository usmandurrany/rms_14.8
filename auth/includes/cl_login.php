<?php
session_start();
include ("db_c_vars.php");

class login {
  $username;
  $password;
  $type;
  
 login($g_username,$g_password,$g_type)
 {
   $username = $g_username;
   $password = $g_password;
   $type = $g_type;
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

?>