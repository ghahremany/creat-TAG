<?php
################################### SETTINGS ###################################
	$site_title  = 'تگ آنلاین';		//Title of the page or your website
	$file_dir    = 'demofiles';					//Folder to start indexing from
	$script_file = $_SERVER["PHP_SELF"];					//Script file name, default is index.php
	$admin_email = 'info@اسکریپت.com';		//E-mail address, displayed if error occurs
	$table_width = '920';						//Width of the table
	$font_family = 'tahoma';                   	//Font options
	$body_color  = '#FFFFFF';					//Page background color
	$text_color  = '#666666';					//Text color
	$link_color  = '#006699';					//Link color
	$dots_color  = '#888888';					//Dots/border color
	
	################################### SETTINGS ###################################
	ini_set("display_errors", 0);
	ini_set("log_errors" , 1);
	ini_set("error_log" , "Error.log"); 
	
include_once('function.php');

include_once('creat_tag.php');


?>