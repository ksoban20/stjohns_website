	
	<!--html head starts -->

	<?php include_once('head.php') ?>
	
	<!--html head ends -->
	
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
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.6025850816513!2d81.88188131501326!3d25.384632483809483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd766ab7f8948067b!2sSt.John&#39;s+Co+Ed+School!5e0!3m2!1sen!2sus!4v1475589451266" width="1340" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>


	<?php include_once('footer.php') ?>
	


</body>
</head>