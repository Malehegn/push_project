<link rel="stylesheet" type="text/css" media="screen" href="screen.css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	
	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			
			agree: "required"
		},
		messages: {
			
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			
			agree: "Please accept our policy"
		}
	});
});
</script>