$(document).ready(function(){
	/* click to animate the login div */
	
	
	/* count the characters */
	$('textarea[name="contactComments"]').keyup(function(){
		/* get current number of characters */
		var numCharacters = $(this).val().length;
		// update characters
		$('.textInfo span').html(numCharacters);
	});
	
	/* is the name field left blank? */
	$('input[name="contactName"]').focusout(function(){
		/* find the length of the value of the input box */
		if(0 == $(this).val().length) {
			/* change the span to have the error message, make it red! */
			$(this).next('span').html('&nbsp;please do not leave name blank').css({
				'color': '#FF0000'
			});
		} else {
			/* this takes care of resetting the message when the user corrects the error */
			$(this).next('span').html('');
		}
	});
	
	/* is the email address a valid one? */
	$('input[name="contactEMail"]').blur(function() {
	   	/* set up some regex to test against */
	   	var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	   	var inputEmail = $(this).val();
	   	/* perform the test */
	   	var resultEmail = regexEmail.test(inputEmail);
	   	/* use the result to determine if the error message will be shown */
	   	if(!resultEmail){
	   		$(this).next('span').html('&nbsp;please enter a valid e-mail address').css({
				'color': '#FF0000'
			});
	   	} else {
	   		$(this).next('span').html('');
	   	}    	
	});
	
	/* did the drop down change? */
	$('select[name="subscriberStatus"]').change(function(){
		$(this).next('span').html('&nbsp;your subscriber status has changed');
	});
	
});