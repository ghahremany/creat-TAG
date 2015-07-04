<?php
################################### function ###################################
function login_pass($pass,$user){
$pass=sha1(md5($pass.$user));
$con=mysql_connect("localhost","root","usbw")
or die(mysql_error());
mysql_select_db("tag",$con)
or die(mysql_error());
$query="SELECT *
FROM `user`
WHERE `password` LIKE '$pass'";
$result=mysql_query($query,$con)
or die(mysql_error());
$row=mysql_fetch_array($result);
if($row['password'])
return 1;
else{
return 0;}


}

function login_user($user){
$con=mysql_connect("localhost","root","usbw")
or die(mysql_error());
mysql_select_db("tag",$con)
or die(mysql_error());
$query="SELECT *
FROM `user`
WHERE `email` LIKE '$user'";
$result=mysql_query($query,$con)
or die(mysql_error());
$row=mysql_fetch_array($result);
if($row['email'])
return 1;
else{
return 0;}


}
// register function input user pass search!= finde return 0
function sql_register($user,$pass){
$pass=sha1(md5($pass.$user));
$con=mysql_connect("localhost","root","usbw")
or die(mysql_error());
mysql_select_db("tag",$con)
or die(mysql_error());
$query="SELECT *
FROM `user`
WHERE `email` LIKE '$user'";
$result=mysql_query($query,$con)
or die(mysql_error());
$row=mysql_fetch_array($result);
if($row['email'])
return 0;
else{
$query="INSERT INTO `user`(`email`, `password`) VALUES ('$user','$pass')";
mysql_query($query,$con);
return 1;
}
mysql_close($con)
or die(mysql_error());
}
function register(){	
	
	print'<div class="box">
		<div class="x"><img src="Untitled.svg"></div>
		<div class="y"></div>
		<form method="post" >
			<label>ایمیل :</label><input type="text" name="username" required="required" />
			<label>کلمه عبور :</label><input type="password" name="password1" required="required" />
			<label>تکرار :</label><input type="password" name="password2" required="required" />
		    <label>کد امنیتی :</label><input type="text" name="security" required="required" />
		<img src="image.php" />
		
			<label></label><input type="submit" name="submit" class="button" value="ثبت نام">
		</form>
	</div>';
}	
function login_form(){	
	global $site_title,$script_file;
	print'<div class="box">
		<div class="x"><img src="Untitled.svg"></div>
		<div class="y"></div>
		<form method="post" action="'.$script_file.'">
			<label>نام کاربری :</label><input type="text" name="username" required="required" />
			<label>رمز عبور :</label><input type="password" name="password" required="required" />
			
		<label>کد امنیتی: </label>
		<input type="text" name="security" required="required" />
		<img src="image.php" /><a href="register.php" style="margin-right: 30%;">ثبت نام</a>
		
			<label></label><input  name="submit" type="submit" class="button" value="ورود">
		</form>
	</div>';
}
	
	
function err($x,$y){
	html_style();
	print'<div class="box">
		<div class="x">'.$x.'</div>
		<div class="y">'.$y.'</div>
	</div>';
}
	
function html_style(){
	global $site_title, $font_family, $body_color, $text_color, $link_color, $dots_color;
	print'<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="pragma" content="no-cache">
		<title>'.$site_title.'</title>
		<style type="text/css">
		body,td,div,input{
			direction:rtl;
			font-family:'.$font_family.';
			font-size:14px;
		}
		body,td,input{
			background-color:'.$body_color.';
			color:'.$text_color.';
		}
		a{
			color:'.$link_color.';
			text-decoration:none;
		}
		a:hover{
			color:'.$link_color.';
			text-decoration:underline;
		}
		hr.x{
			color:'.$body_color.';
			background-color:'.$body_color.';
			border:1px dotted '.$dots_color.';
			border-style:none none dotted;
		}
		td.y{
			vertical-align:bottom;
		}
		td.z{
			font-size:16px;
		}
		td.w{
			font-size:12px;
			text-align:right;
		}
		div.box{
				
			position:absolute;
			width:460px;
			height:200px;
			top:30%;
			left:50%;
			margin-left:-230px;
			margin-top:-100px;
		}
		div.box .x{
			font-size:14px;
			text-align:center;
			border-bottom:1px dotted '.$dots_color.';
			font-weight:bold;
			padding-bottom:10px;
		}
		div.box .y{
			font-size:13px;
			text-align:center;
			margin-top:10px;
		}
		form label{
			display:block;
			width:80px;
			padding-top:3px;
			margin-left:40px;
			float:right;
		}
		form input{
			display:block;
			margin-bottom:10px;
			padding:5px;
			border:solid 1px '.$dots_color.';
			width:250px;
			height:25px;
			font-size:12px;
		}
		.button{
			width:80px;
			font-size:12px;
			padding-top:3px;
		}
		</style>
	</head>
	<body>';
}
 ?>