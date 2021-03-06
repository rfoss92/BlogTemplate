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
			<p>This is a template for a simple blog.
				<br>This is where you put a description of your blog.
				<br>The background image can be swapped out.
				<br>The button below can be used to redirect.</p>
			<button class="header-button" onclick="location.href = 'CreatePost.php';">Write a post!</button>
		</section>
	</header>

	<section class="featured-page-area">
		<section class="featured-page-wrapper">
			<section class="featured-page">
				<img src="image3.jpg">
				<h1><a href="ViewPosts.php">MY FIRST POST</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><a href="ViewPosts.php" class="more-link">READ MORE</a></p>
			</section>

			<section class="featured-page">
				<img src="image2.jpg">	
				<h1><a href="ViewPosts.php">MY SECOND POST</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><a href="ViewPosts.php" class="more-link">READ MORE</a></p>			
			</section>

			<section class="featured-page">
				<img src="image1.jpg">	
				<h1><a href="ViewPosts.php">MY THRID POST</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><a href="ViewPosts.php" class="more-link">READ MORE</a></p>			
			</section>
		</section>
	</section>

	<section class="widget-area">
		<section class="widget-wrapper">
			<section class="widget-text">
				<h2>A LIST OF LINKS</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<ul>
					<li><a href="">Lorem ipsum dolor sit amet</a></li>
					<li><a href="">Consectetur adipisicing elit</a></li>
					<li><a href="">Sed do eiusmod
				tempor incididunt</a></li>
					<li><a href="">Labore et dolore magna aliqua</a></li>
				</ul>
			</section>

			<section class="widget-text">
				<h2>SOCIAL MEDIA</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua <a href="">this is a link</a>.</p>	
			</section>

			<section class="widget-text">
				<h2>RECENT NEWS</h2>
				<ul class="widget-news-list">
					<li>			
						<a href="">Important update!</a>
						<br><span class="date">Augsut 11, 2014</span>
					</li>
					<li>
						<a href="">More news</a>
						<br><span class="date">May 24, 2015</span>	
					</li>
					<li>
						<a href="">Anoter update</a>
						<br><span class="date">Octover 1, 2016</span>				
					</li>							
				</ul>
			</section>
		</section>
	</section>

	<section class="testimonial-area">
		<section class="testimonial-wrapper">
			<section class="testimonial-text">
				<p>Best blog I've ever read!</p>
				<h2>- John Smith</h2>
			</section>
			<section class="testimonial-text">
				<p>Fantastic design!</p>
				<h2>- Al Gore</h2>				
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