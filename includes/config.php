<?php
session_start();

//set timezone
date_default_timezone_set('Canada/Eastern');

//database credentials
define('DBHOST','localhost');
define('DBUSER','admin');
define('DBPASS','password');
define('DBNAME','phpproject');

//application address
define('DIR','http://127.0.0.1/myProject/mycrud/');
define('SITEEMAIL','noreply@domain.com');

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
