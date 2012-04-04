var Application = {
	init: function(){
		this.Signup.handleFormSubmit();
	},
	Signup: {
		handleFormSubmit: function(){
			$("#signup").submit(function(e) {
				$('#spinner').show();
				$('#submit').hide();
				var jqxhr = $.post("/signup.php", { email: $('#email').val() }, function() {})
		    .success(function() {
		    	Application.Signup.resetForm(true);
		    })
		    .error(function() {
		    	Application.Signup.resetForm(false);
		    });
				return false;
			});
		},
		resetForm: function(success) {
			setTimeout(function(){
				$('#spinner').hide();
				$('#submit').show();
				if(success) $('#email').val('E-mail');
				success ? alert("Thank you!  We'll send you an email when we launch.") : alert('Woops, something went wrong.  Please try again in a few minutes.');
			}, 500);
		}
	}
}