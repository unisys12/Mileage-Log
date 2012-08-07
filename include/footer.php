<footer>
<p>
&copy; <small>2012 by Phillip Jackson, as project for Rayco Inc</small> 
</p>
</footer>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>
	(function(){
		$form = $('div').find('.form');//sets the form variable
		$calendar = $('div').find('.calander td');//sets the calendar variable
		
		$form.addClass('hidden');//hides the form when the page loads
		
		/*
		 * Creates the animation for the form to be shown
		 * when the user clicks on one of the dates in the
		 * calendar. 
		 */
		$calendar.click(function(){
			$('.form').slideToggle('fast');
		})
		
		function getDay(){
			$calendar.click(function(){
				$day = $(this).text();
				$('#day').prepend($day);
			});
		}
		getDay();
	})();
</script>
</body>
</html>