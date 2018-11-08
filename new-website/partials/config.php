<?php

$path = isset($_POST['value']) ? $_POST['value'] : '';
$http = isset($_POST['value']) ? $_POST['value'] : '';
$index = isset($_POST['value']) ? $_POST['value'] : '';
$contact = isset($_POST['value']) ? $_POST['value'] : '';
$faq = isset($_POST['value']) ? $_POST['value'] : '';
$form = isset($_POST['value']) ? $_POST['value'] : '';
$privacy = isset($_POST['value']) ? $_POST['value'] : '';
$rates = isset($_POST['value']) ? $_POST['value'] : '';
$terms = isset($_POST['value']) ? $_POST['value'] : '';

$site = isset($_POST['value']) ? $_POST['value'] : '';
	
	$path = ($path) ?: 'http://localhost//git/usasecureloans/new-website/';
	//$http = ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != 'off')) ? 'https' : 'http';
	$index = ($index) ? $index : (($path == './') && preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact =  (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']));
	$faq =  (preg_match("/faq.php/",$_SERVER['SCRIPT_FILENAME']));
	$form =  (preg_match("/form.php/",$_SERVER['SCRIPT_FILENAME']));
	$privacy = (preg_match("/privacy.php/", $_SERVER['SCRIPT_FILENAME']));
	$rates = (preg_match("/rates.php/", $_SERVER['SCRIPT_FILENAME']));
	$terms = (preg_match("/terms.php/", $_SERVER['SCRIPT_FILENAME']));
 
	$site = (preg_match("/localhost/",$_SERVER['HTTP_HOST'])) ? 'http://localhost//git/usasecureloans/new-website/' : 'http://usasecureloans.com/';
?>