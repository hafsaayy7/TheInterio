<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
</head>

<body style=" min-height: 100%;  display: flex; flex-direction: column;">
	<div>
		<?php include 'header.php'; ?>
	</div>
	<div class="container container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="contact-form-response.php" method="POST">
				<span class="contact100-form-title">
					Send Us A Message
				</span>
				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name" required="required" pattern="^[a-zA-Z]{3,}[ a-zA-Z]{0,}$">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone" required pattern="[0-9]{11}">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message" required></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="ml-auto mr-auto container-contact100-form-btn">
					<button class=" text-center contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<footer style="margin-top: auto;" id="footer" class="footer-1">
		<script>
			$('#footer').load('footer.html');
		</script>
	</footer>

</body>

</html>