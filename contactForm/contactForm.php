<?php 
	$error = "";
	if($_POST["submit"]){
		$result = '<div class="alert alert-success">Form submitted</div>';

		if(!$_POST["name"]){
			$error = "<br>Please enter your name";
		}

		if(!$_POST["email"]){
			$error .= "<br>Please enter your email address";
		}

		if(!$_POST["comment"]){
			$error .= "<br>Please enter your comment";
		}

		if($error){
			$result = '<div class="alert alert-danger">There were error(s) in your form:'.$error.'</div>';
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Tenche Alexandru">
	<title>Contact Form</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		.emailForm{
			border: 1px solid grey;
			border-radius: 10px;
			margin-top: 20px;
		}
		textarea{
			height: 120px;
		}
		form{
			padding-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 emailForm">
				<h1>My Email Form</h1>

				<?php echo $result; ?>

				<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>				

				<form method="post">
					<div class="form-group">
						<label for="name">Your Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Your Name">
					</div>

					<div class="form-group">
						<label for="email">Your Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Your Email">
					</div>

					<div class="form-group">
						<label for="comment">Your Comment:</label>
						<textarea name="comment" class="form-control" placeholder="Your Comment"></textarea>
					</div>

					<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit">

				</form>
			</div>

		</div>
	</div><!-- container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>