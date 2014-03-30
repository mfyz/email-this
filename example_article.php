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

	<div class="content article">
		<h2>How to Lorem ipsum dolor sit amet?</h2>
		<div class="meta">
			2010-02-05 12:05:12 by admin
		</div>

		<div class="text">
			<div class="note">
				This page's "email this" contains a banner (image) about this article. You can see it in html code structure. There is "image" span contains that banners full url which will appear in mail content. It's explained in <a href="link.html" target="_blank"><u>documentation</u></a>
			</div>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
			<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
		</div>

		<div class="buttons">
			<!-- EMAIL THIS SECTION -->
			<span class="email_this">
				<span class="url">http://article-sharing-url</span>
				<span class="title">(Article) Sharing mail content title</span>
				<span class="desc">Short description about spesific content (Article)</span>
				<span class="image">mail_images/book_banner.gif</span>
				<!-- THIS PATH MUST FULL URL like http://www.domain.com/mail_images/photo.jpg -->
				<a href="#email_this"><b>Email This!</b></a>
			</span>
			<!-- //END: EMAIL THIS SECTION -->
		</div>

		<br><br>
		<a href="./">&larr; Back to example list</a>
	</div>

</body>
</html>