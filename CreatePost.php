<!DOCTYPE html>
<html>

<head>
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 	
</head>

<body>
	<nav>
		<section class="nav-wrapper">
			<a href="BlogTemplate.php" class="nav-title">My Blog</a>
			<div class="nav-menu">
				<button class="nav-button" onclick="location.href = 'ViewPosts.php';"><i class="fa fa-search"></i></button>
				<button class="nav-button" onclick="location.href = 'CreatePost.php';"><i class="fa fa-pencil"></i></button>
			</div>
		</section>
	</nav>

	<header>
		<section class="intro-wrapper">
			<p>This page is where you can create a post to your blog.
				<br>Include the title of your post and your name.
				<br>It will upload the info to a MySQL database and redirect you to all the current posts.
		</section>
	</header>

	<section class="blog-area">
		<section class="blog-wrapper">
			<section class="blog-text">

				<h2>Write a Post</h2>
				<form action="connect.php" method="post" id="blogForm">
				  Title <input type="text" name="title" required>					
				  Author <input type="text" name="name" required>
				  <br><br>
				  <textarea rows="4" name="blogText" type="text" placeholder="What's on your mind?" required></textarea>
				  <br>					  
				  <input type="submit" class="blog-button" value="POST">
				</form>

			</section>			
		</section>		
	</section>

	<section class="footer-area">
		<section class="footer-wrapper">
			<section class="footer-text">
				<h2>OUR LOCATION</h2>
				<iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Columbus%20OHio+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" class="contact-map" width="600" height="216" frameborder="0"></iframe>
					123 Street
					<br>Columbus, OH
					<br>The United States of America
				<section>(123) 4567-890</section>
			</section>

			<section class="footer-text">
				<h2>ABOUT US</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
			</section>

			<section class="footer-text">
				<h2>NAVIGATION</h2>
				<ul>
					<li><a href="BlogTemplate.php">HOME</a></li>
					<li><a href="ViewPosts.php">VIEW ALL</a></li>
					<li><a href="CreatePost.php">CREATE POST</a></li>
				</ul>
			</section>
		</section>
	</section>

</body>
</html>