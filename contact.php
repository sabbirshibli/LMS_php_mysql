<?php

$to='sabbirshibli@gmail.com';
$subject='Library Management Related';
$name=$_POST['name'];
$reg_no=$_POST['reg_no'];
$email=$_POST['email'];
$message=$_POST['message'];

$message= <<<EMAIL

Hi! My name is $name

$message

From
$name
$reg_no

EMAIL;

$header='$email';
if($_POST) {
	mail($to,$subject,$message,$header);
	$feedback='Thanks for your query!';
}

?>

<!doctype html>
<html lang='en'>
<head>
	<meta charset='utf-8' />
	<title>Contact</title>
	<link href='css/contact.css' type='text/css' rel='stylesheet' media='all' />
	<style type='text/css'>
		form{
			width: 400px;
		}
		form ul {
			list-style-type: none;
		}
		form ul li {
			margin: 15px 0;
		}
		form label {
			display: block;
			font-size: 2em;
		}
		form input,textarea,select {
			font-size: 2em;
			padding: 5px;
			border: #ccc 3px solid;
			width 100%;
		}
	</style>
</head>
<body>
	<div id='wrapper'>
		<div id='content'>
			<h2>Contact</h2>
			<p id="feedback"><?php echo $feedback; ?></p>
			 <form action="?" method="post">
				<ul>
					<li>
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" />
					</li>
					<li>
						<label for="subject">Registration No.:</label>
						<input type="text" name="reg_no" id="reg_no" />
					</li>
					<li>
						<label for="email">Email:</label>
						<input type="text" name="email" id="email" />
					</li>
					<li>
						<label for="message">Type your message here:</label>
						
						<textarea id="message" name="message" cols="42" rows="9"></textarea>
					</li>
					<li><input type="submit" value="Submit"></li>
				</ul>
			</form>
		</div>
	</div>
</body>