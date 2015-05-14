<!DOCTYPE HTML>  
<html>  
<head>  
    <title>My basic contact form</title>  
    <link href="css/bootstrap.min.css" rel="stylesheet">  
</head>  
<body>  
  
<div class="container">  

	<div class="page-header">  
		<h1>Contact Me</h1>  
	</div>  
	<form method="POST" action="contact-form-submission.php" class="form-horizontal">  
		<div class="control-group">  
			<label class="control-label" for="input1">Name</label>  
			<div class="controls">  
				<input type="text" name="contact_name" id="input1" placeholder="Your name">  
			</div>  
		</div>  
		<div class="control-group">  
			<label class="control-label" for="input2">Email Address</label>  
			<div class="controls">  
				<input type="text" name="contact_email" id="input2" placeholder="Your email address">  
			</div>  
		</div>  
		<div class="control-group">  
			<label class="control-label" for="input3">Message</label>  
			<div class="controls">  
				<textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="The message you want to send to me."></textarea>  
			</div>  
		</div>  
		<div class="form-actions">  
			<input type="hidden" name="save" value="contact">  
			<button type="submit" class="btn btn-primary">Send</button>  
		</div>  
	</form>  
  
</div>  
          
</body>  
</html>