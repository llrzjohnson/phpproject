<?php
session_start();
ob_start();
//set timezone
date_default_timezone_set('Canada/Eastern');

//database credentials
define('DBHOST','localhost');
define('DBUSER','nndesi5_lesterad');
define('DBPASS','L3ster11');
define('DBNAME','nndesi5_phpproject');

//application address
define('DIR','http://phpproject.5ndesign.com/');
define('SITEEMAIL','shuai.jan28gmail.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>