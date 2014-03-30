<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Email This Form</title>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<style type="text/css" media="screen">
		body {
			font: 12px "Lucida Grande", Lucida, Verdana, sans-serif;
			padding: 0;
			margin: 0;
			overflow: hidden;
		}
	</style>
	<script src="jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="form.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

	<div class="email_this_form">
		<form action="email_this/send.php" method="post" id="suggestform">
			<input type="hidden" name="email_this[url]"   value="<?php print urlencode($_GET[url]); ?>">
			<input type="hidden" name="email_this[title]" value="<?php print urlencode($_GET[title]); ?>">
			<input type="hidden" name="email_this[desc]"  value="<?php print urlencode($_GET[desc]); ?>">
			<input type="hidden" name="email_this[image]" value="<?php print urlencode($_GET[image]); ?>">

			<div class="form_overlay">&nbsp;</div>
			<div class="sending">
				<h3>Sending</h3>
				Please wait
			</div>
			<div class="send_error">
				<h3>Message Cannot Send!</h3>
				Please try again<br>
				<br>
				<a href="#close" onClick="$('.send_error, .form_overlay').fadeOut();">Close Error Message</a>
			</div>
			<div class="send_success">
				<h3>Succesful!</h3>
				Your friends notified!<br>
			</div>

			<h2>Email this to a friend</h2>
			<div class="note">
				Enter your contact information and your friend(s) information below.<br />
				You can send up to 3 friends at one time.
			</div>

			<div class="input_container">
				<div class="yourinfo">
					<ul>
						<li>
							<div class="error your_nameerror">
								Name field is required
							</div>
							<label for="your_name">Your Name</label>
							<input type="text" name="email_this[name]" value="" id="your_name" />
						</li>
						<li>
							<div class="error your_emailerror">
								Email field is required in right format
							</div>
							<label for="your_email">Your Email</label>
							<input type="text" name="email_this[email]" value="" id="your_email" />
						</li>
					</ul>
				</div>

				<div class="recipients">
					<div class="recipientserror error">
						You must give at least one friend's information
					</div>
					<h4>Recipient(s)</h4>
					<div class="head">
						<span class="names">Recipient Name</span>
						<span class="emails">Recipient Email</span>
					</div>

					<div class="row">
						<div class="error recipient1name recipientnameerror">
							Name is required
						</div>
						<div class="error recipient1email recipientemailerror">
							Email is required in right format
						</div>
						<div class="number">1.</div>
						<div class="name"><input type="text" name="email_this[recipients][1][name]" id="recipient1name" /></div>
						<div class="email"><input type="text" name="email_this[recipients][1][email]" id="recipient1email" /></div>
					</div>
					<div class="row">
						<div class="error recipient2name recipientnameerror">
							Name is required
						</div>
						<div class="error recipient2email recipientemailerror">
							Email is required in right format
						</div>
						<div class="number">2.</div>
						<div class="name"><input type="text" name="email_this[recipients][2][name]" id="recipient2name" /></div>
						<div class="email"><input type="text" name="email_this[recipients][2][email]" id="recipient2email" /></div>
					</div>
					<div class="row">
						<div class="error recipient3name recipientnameerror">
							Name is required
						</div>
						<div class="error recipient3email recipientemailerror">
							Email is required in right format
						</div>
						<div class="number">3.</div>
						<div class="name"><input type="text" name="email_this[recipients][3][name]" id="recipient3name" /></div>
						<div class="email"><input type="text" name="email_this[recipients][3][email]" id="recipient3email" /></div>
					</div>
				</div>

				<div class="button">
					<input type="image" src="img/sendbutton.png" />
				</div>
			</div>

		</form>
	</div>

</body>
</html>