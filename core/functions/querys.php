<?php
/*
 * Full insert query that includes starting and ending odometer, note and date.
 */
function full(){
	$start = check_input($_POST[('start')]);
		if (preg_match("/\D/",$start)){
		    die("Please enter numbers only for your odometer readings");
		}
	$end = check_input($_POST[('end')]);
		if (preg_match("/\D/",$end)){
		    die("Please enter numbers only for your odometer readings");
		}
	$notes = check_input($_POST[('notes')]);
	$date = $_POST[('date')];
	$input = "INSERT INTO `phillip` (`start`, `end`, `note`, `date`) VALUES ( '$start', '$end', '$notes', '$date' )";
	$result = mysql_query($input) or die (mysql_error());	
}
/*
 * If only a starting odometer is entered for a certain day. Contains 
 */
function str_date(){
	$start = check_input($_POST[('start')]);
		if (preg_match("/\D/",$start)){
		    die("Please enter numbers only for your odometer readings");
		}
	$date = check_input($_POST[('date')]);
	$input = "INSERT INTO `phillip` (`start`, `date`) VALUES ('$start', '$date')";
	$result = mysql_query($input) or die (mysql_error());
}

/*
 * Starting odometer, with a note and date.
 */
function str_note_date(){
	$start = check_input($_POST[('start')]);
		if (preg_match("/\D/",$start)){
		    die("Please enter numbers only for your odometer readings");
		}
	
	$notes = check_input($_POST[('notes')]);
	
	$date = check_input($_POST[('date')]);
	
	$input = "INSERT INTO `phillip` (`start`, `note`, `date`) VALUES ('$start', '$notes', '$date')";
	$result = mysql_query($input) or die (mysql_error());
}

/*
 * If only an ending odometer is entered without a note. 
 * In this case, a starting odometer should already be enter for that day
 */ 
/*
function end_insert(){

	$end = check_input($_POST[('end')]);
		if (preg_match("/\D/",$end)){
		    die("Please enter numbers only for your odometer readings");
		}
		
	$date = check_input($_POST[('date')]);
	
	// Server and Connection variables
	$server = 'localhost';
	$username = 'root';
	$password = '';
	
	$conn = mysql_connect($server, $username, $password);
	$db = mysql_select_db('mileage_log', $conn);
		if(!$db){
			die('Cannot connect to the Mileage Log Database right now... Sorry!');
		}
	
	$last_id = $mysqli_insert_id($conn);
	
	$input = "UPDATE `phillip` SET `end` = '$end' WHERE 'date' = '$date' AND 'id' = '$last_id'";
	$result = mysql_query($input) or die (mysql_error());
}*/
function end_insert(){
	$end = check_input($_POST[('end')]);
		if (preg_match("/\D/",$end)){
		    die("Please enter numbers only for your odometer readings");
		}
		
	$date = check_input($_POST[('date')]);
	
	$input = "INSERT INTO `phillip` (`end`, `date`) VALUES ('$end', '$date')";
	$result = mysql_query($input) or die (mysql_error());
}

function end_note_insert(){
	$end = check_input($_POST[('end')]);
		if (preg_match("/\D/",$end)){
		    die("Please enter numbers only for your odometer readings");
		}
		
	$date = check_input($_POST[('date')]);

	$notes = check_input($_POST[('notes')]);
	
	$input = "INSERT INTO `phillip` (`end`, `note`, `date`) VALUES ('$end', '$notes', '$date')";
	$result = mysql_query($input) or die (mysql_error());
}
?>