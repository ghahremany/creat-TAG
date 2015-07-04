<?php

include_once('config.php');
html_style();
session_start();
if(!isset($_POST['submit'])){

register();
}

elseif($_POST['security'] == $_SESSION['security_number']){

$pass2=$_POST["password2"];
$pass1=$_POST["password1"];
if($pass1 == $pass2){
$user=$_POST["username"];
$pass1=$_POST["password1"];
if(sql_register($user,$pass1)==0)
echo err("این نام کاربری قبلا ثبت شده است","  <br/> لطفا  برای برگشت <a href='$script_file'>اینجا رو کلیک کنید</a>");
else{
sql_register($user,$pass1);
echo err("ثبت نام با موفقیت انجام شد","  <br/>لطفا برای ورود به سایت <a href='index.php'>اینجا رو کلیک کنید</a>");}
}
else err("ERROR 401"," رمزهای عبور یکسان نیستند <br/> لطفا  برای برگشت <a href='$script_file'>اینجا رو کلیک کنید</a>");
}
else
err("ERROR 401"," کد امنیتی اشتباه  است <br/> لطفا  برای برگشت <a href='$script_file'>اینجا رو کلیک کنید</a>");




?>