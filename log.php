<?php
include 'core/init.php';


if (empty($end) && empty($note)){
	str_date();
	echo "Thank you for entering your Starting Odometer.";
}elseif (empty($end)){
	str_note_date();
	echo "Thank you for entering you Starting Odomenter and Note.";
}elseif (empty($start) && empty($notes)){
	end_insert();
	echo "Thank you for entering your Ending Odometer reading.";
}elseif (empty($start)){
	end_note_insert();
	echo "Thank you for entering your Ending Odometer reading and Note.";
}else{
	full();
	echo "Thank you for entering your Starting Odomenter, Ending Odomenter and Note.";
}

?>