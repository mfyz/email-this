<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Simple Page Content</title>

	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="email_this/style.css">
	<script src="email_this/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="email_this/init.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

	<div class="content blog_entries">
		<!-- // BEGIN ENTRIES LOOP -->
		<div class="entry"><!-- ENTRY DIV LOOPS IN BLOG HTML STRUCTURE -->
			<div class="head">
				<h3>Blog entry title #1</h3>
				<div class="meta">
					<b>Author:</b> <a href="#">admin</a>, <b>Date:</b> 2010-02-01 14:35<br>
					<b>Tags:</b> html, css, javascript
				</div>
			</div>
			<div class="entry_content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
				<br>
				<a href="#">Read more...</a>
			</div>
			<div class="foot">

				<!-- EMAIL THIS SECTION -->
				<span class="email_this">
					<span class="url">http://blog-entry-sharing-url</span>
					<span class="title">(Blog) Sharing mail content title</span>
					<span class="desc">Short description about spesific content (Blog)</span>
					<a href="#email_this"><b>Email This!</b></a>
				</span>
				<!-- //END: EMAIL THIS SECTION -->

				&nbsp;&middot;&nbsp;
				<a href="#" onclick="alert('This is example bog entry sharing link');" class="disabled">Facebook</a>
				&nbsp;&middot;&nbsp;
				<a href="#" onclick="alert('This is example bog entry sharing link');" class="disabled">Twitter</a>
				&nbsp;&middot;&nbsp;
				<a href="#" onclick="alert('This is example bog entry sharing link');" class="disabled">FriendFeed</a>
			</div>
			<!-- // END LOOP -->
		</div>

		<br><br>
		<a href="./">&larr; Back to example list</a>
	</div>

</body>
</html>