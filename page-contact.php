<html>
<head>
	<title>st johns academy</title>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="dist/css/style.css" />
</head>
<body>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	
	<!-- header starts -->

	<?php include_once('header.php') ?>

	<!-- header ends -->

	<!-- Contact Section Starts -->

	<div class="panel-wrapper">
		<div class="wrapper"><a href="index.php">Home</a>/Contact us</div>
		<div class="panel-container">
			<div class="form-panel">
				<div class="heading">Send a Message</div>
				<div class="contact-form">
					<form method="post" id="contactform" name="contactform" class="contact-form-1 clearfix" action="mail/page-contact.php">
                   		
                   		
						<input type="text"  name="name" id="name" placeholder="Your Name" size="30" />
						
						<input type="text" name="email" id="email" placeholder="Your Email" size="30" />
						
						<input type="text" name="subject" id="subject" placeholder="Subject for Message" size="30" />
						<textarea name="message" id="message" placeholder="Your Message" cols="30" rows="10" ></textarea>
										

						<button type="submit">Send</button>		
                </form>

				</div>
			</div>
			<div class="address-panel">
				<div class="heading">Reach us</div>
				<div class="contact-address">
					<div class="icon-bar">
						<div class="contact-icon"><i class="fa fa-phone"></i></div>
						<div class="contact-icon"><i class="fa fa-envelope"></i></div>
						<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
					</div>
					<div class="address-bar">
						<div class="contact-text">+91-9999999999</div>
						<div class="contact-text">abc@example.com</div>
						<div class="contact-text">123/1, Near Crossing Karchana, Naini <br /> Allahabad - 211010</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Section Ends -->

</body>
</head>