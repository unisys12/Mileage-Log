<div class="content">
<h4>Enter Your Starting & Ending Mileage</h4>
<form method="post" action="log.php">
	<label for="date">Date: </label>
		<input type="date" name="date" id="date" /><br />
	<label for="start">Starting Odometer: </label>
		<input type="number" name="start" id="start" /><br />
	<label for="end">Ending Odometer: </label>
		<input type="number" name="end" id="end" /><br /><br />
	<label for="notes">Notes: </label>
		<input type="text" name="notes" id="notes" />
	<input type="submit" value="Submit" name="submit" />	
	<?php
	include 'core/secure/sanitize.php';
	
	if (isset($_POST[('submit')])){
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
		$notes = check_input($_POST[('notes')]);
		
	}
	
	?>
	
</form>
</div>