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
			<p>The content of the front page template is displayed here.
				<br>This is a great place to add your “call to action” with a brief message.
				<br>The image behind this text is added as a featured image.
				<br>If you wish to add a button like below, use a CSS class: button-minimal.</p>
			<button class="header-button">BUTTON</button>
		</section>
	</header>

	<section class="blog-area">
		<section class="blog-wrapper">
			<section class="blog-text">
				<?php
			    $mysqli = new mysqli("localhost", "root", "3sKCoNa1LjVwVAqY", "blogposts");
			    $result = $mysqli->query("SELECT * FROM posts");
			    // $numberOfRows = mysqli_num_rows($result);

			    $firstPost = mysqli_fetch_array($result);
			    // print_r($firstPost);			    

					$name = (string)$firstPost[1];
					$title = (string)$firstPost[2];
					$blogText = (string)$firstPost[3];
					echo "<section class='postHeader'>$title</section>"
						. "<section class='postAuthor'>by $name</section>"
						. "<br><section class='postBody'>$blogText</section><hr>";

			    $restOfThePosts = mysqli_fetch_all($result);
			    // print_r($restOfThePosts);

			    foreach($restOfThePosts as $post){

					$name = (string)$post[1];
					$title = (string)$post[2];
					$blogText = (string)$post[3];

					echo "<section class='postHeader'>$title</section>"
						. "<section class='postAuthor'>by $name</section>"
						. "<br><section class='postBody'>$blogText</section><hr>";

			    }



				?>
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