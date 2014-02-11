<?php
session_start();
include ("../auth/includes/db_c_vars.php");

class auth {

	public $username="";
	public $password = "";
	public $type = "";
	public $loginerror="NULL";
   
 function auth($g_username,$g_password,$g_type)
 {
   $this->username = $g_username;
   $this->password = $g_password;
   $this->type = $g_type;
 }
  
  function user()
  {
	if ($this->type == "student"){
	$sql = mysql_query("SELECT * FROM stu_login WHERE `epnum` = '$this->username' AND `password` = '$this->password'") or die (mysql_error());
	$sql_results = mysql_fetch_array($sql);
	$user_exists = mysql_num_rows($sql);
	if ($user_exists == 1){
		$_SESSION['user_name'] = $sql_results[2];
		$_SESSION['user_ep'] = $sql_results[0];
		$_SESSION['valid_user'] = true;
		$_SESSION['user_type'] = "student";
		$this->loginerror = "Login sucessful.";
	}
		else $this->loginerror = "Incorrect username or password.";
	}
    if ($this->type == "admin"){
	$sql = mysql_query("SELECT * FROM admin_login WHERE `username` = '$this->username' AND `password` = '$this->password'") or die (mysql_error());
	$sql_results = mysql_fetch_array($sql);
	$user_exists = mysql_num_rows($sql);
	if ($user_exists == 1){
		$_SESSION['user_name'] = $sql_results[0];
		$_SESSION['valid_user'] = true;
		if ($sql_results[2]== "yes"){
		$_SESSION['user_type'] = "admin";
		$this->loginerror = "Login sucessful.";
		}
		else {
		$_SESSION['user_type'] = "faculty";
		$this->loginerror = "Login sucessful.";
		}
	}
	else $this->loginerror = "Incorrect username or password.";
	
	}

	return $this->loginerror;
  }
  
  function registerUser($user_det)//($epnum,$password,$full_name,$father_name,$semester,$section,$field_name,$age,$dob,$doa,$contact_no)
  		{
		mysql_query("INSERT INTO `stu_login`(`epnum`,`password`, `full_name`, `father_name`, `field_name`,`semester`,`section`, `age`, `dob`, `doa`, `contact_no`) VALUES ('$epnum','$password','$full_name','$father_name','$field_name','$semester','$section','$age','$dob','$doa','$contact_no')") or die (mysql_error());
		$errortext="Registered succesfully";
		return $errortext;
		}

}
  
  
 
?>