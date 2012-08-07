/*
 * Try to capture the number of the day clicked, 
 * then add it to the title of the form. This way
 * the form will reflect, accurately the day that 
 * you are editing. 
 */

function getDay(){
	$('td').click(function(){
		console.log('clicked!');
	});
};
