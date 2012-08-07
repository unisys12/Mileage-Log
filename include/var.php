<?php
// Server and Connection variables
$server = 'localhost';
$username = 'root';
$password = '';

$conn = mysql_connect($server, $username, $password);
$db = mysql_select_db('mileage_log', $conn);
	if(!$db){
		die('Cannot connect to the Mileage Log Database right now... Sorry!');
	}
// Form variables, sent to database

/**
 * $start variable takes the input from the starting odometer
 * text field, runs it through the check_input() function
 * to the sanitize the data and checks if only numbers
 * were entered using preg_match.
 */
$start = check_input($_POST[('start')]);
if (preg_match("/\D/",$start)){
    die("Please enter numbers only for your odometer readings");
}

/**
 * $end variable takes the input from the ending odometer
 * text field, runs it through the check_input() function
 * to the sanitize the data and checks if only numbers
 * were entered using preg_match.
 */
$end = check_input($_POST[('end')]);
if (preg_match("/\D/",$end)){
    die("Please enter numbers only for your odometer readings");
}

/**
 * $notes variable is used for storing the string of info 
 * stored in the text field 'note'. 
 */
$notes = check_input($_POST['notes']);

?>