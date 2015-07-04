<?php

include_once('config.php');



session_start();
if(!empty($_GET['logout'])){
unset($_SESSION['online']);
header('Location:'.$script_file.'');
	exit();
}
if(isset($_SESSION['online'])){
tag();}

elseif(!isset($_POST['submit'])){
html_style();
login_form();}
elseif($_POST['security'] == $_SESSION['security_number']){

	
$security_code= $_SESSION['security_number'];
$security= $_POST['security'];
$pass= $_POST["password"];
$user= $_POST["username"];

	if(login_pass($pass,$user) && login_user($user) && $security === $security_code ){
	$_SESSION['online']=$user;
	tag();
	}
	else
 err("ERROR 401"," نام کاربری یا رمز عبور را اشتباه وارد کرده اید<br/> لطفا  برای برگشت <a href='$script_file'>اینجا رو کلیک کنید</a>");
	}
	else
	err("ERROR 401"," کد امنیتی اشتباه  است <br/> لطفا  برای برگشت <a href='$script_file'>اینجا رو کلیک کنید</a>");
	
?>