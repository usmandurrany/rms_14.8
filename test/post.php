<?php
include "cl_auth.php";
if (isset($_POST['login']))
{
  $g_username = $_POST['username'];
  $g_password = $_POST['password'];
  $g_type = $_POST['type'];
  $login = new auth($g_username,$g_password,$g_type);
  echo $login->user();
}
?>