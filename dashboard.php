<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Bright Future</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        h1 {
            color: #208245;
        }

        section.home {
            min-height: auto;
            height: 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            padding-top: 80px;
            text-align: center;
        }
    </style>
</head>
<body>
<section class="home" id="home">
    <nav class="main-navbar">
       
        <ul class="nav-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#courses">Courses</a></li>
            
        </ul>
        <a href="index.html" class="get-started-btn-container">
			<button type="submit" class="logout-btn get-started-btn btn">Logout</button>
		</a>
        <div class="menu-btn">
            <span></span>
        </div>
    </nav>
</section>
<div class="container">
    <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
</div>
<section class="courses" id="courses" style="margin-top: -80px;">
	<!--   *** Courses Header Starts ***   -->
	<section class="courses" id="courses">
			<!--   *** Courses Header Starts ***   -->
			<header class="section-header">
				<div class="header-text">
					<h1>Choose Your Favourite Course</h1>
					<p>Choose your favorite course and learn what you love at your own pace.

						Explore a wide range of courses tailored to your interests and goals!
					</p>
				</div>
				<button class="courses-btn btn">View All</button>
			</header>
			<!--   *** Courses Header Ends ***   -->
			<!--   *** Courses Contents Starts ***   -->
			<div class="course-contents">

				<div class="course-card">
					<img src="images/f4.png" ;>
					<div class="category">
						<div class="subject">
							<h3>Design</h3>
						</div>
						<img src="images/f3.png">
					</div>
					<h2 class="course-title"><a href="figma.html" style="text-decoration: none; color: black;">Figma
							Mastery: From Beginner to Advanced</a></h2>
					<div class="course-desc">
						<span><i class="fa-solid fa-users"></i> 1000+ Students</span>
					</div>
					<div class="course-ratings">
						<span>4.9 <i class="fa-solid fa-star"></i></span>
					</div>
				</div>

				<div class="course-card">
					<img src="images/h2.webp">
					<div class="category">
						<div class="subject">
							<h3>Design</h3>
						</div>
						<img src="images/h1.png">
					</div>
					<h2 class="course-title"><a href="html1.html" style="text-decoration: none; color: black;">Learn
							HTML: From Beginner to Advanced</a></h2>
					<div class="course-desc">
						<span><i class="fa-solid fa-users"></i> 2154+ Students</span>
					</div>
					<div class="course-ratings">
						<span>4.7 <i class="fa-solid fa-star"></i></span>
					</div>
				</div>

				<div class="course-card">
					<img src="images/c1.png">
					<div class="category">
						<div class="subject">
							<h3>Design</h3>
						</div>
						<img src="images/c1.png">
					</div>
					<h2 class="course-title"><a href="css.html" style="text-decoration: none; color: black;">Learn
							CSS: From Beginner to Advanced</a></h2>
					<div class="course-desc">
						<span><i class="fa-solid fa-users"></i> 154+ Students</span>
					</div>
					<div class="course-ratings">
						<span>4.9 <i class="fa-solid fa-star"></i></span>
					</div>
				</div>

				<div class="course-card">
					<img src="images/js1.png">
					<div class="category">
						<div class="subject">
							<h3>Development</h3>
						</div>
						<img src="images/js1.png">
					</div>
					<h2 class="course-title"><a href="javascript.html" style="text-decoration: none; color: black;">Learn
							JavaScript: From Beginner to Advanced</a></h2>
					<div class="course-desc">
						<span><i class="fa-solid fa-users"></i> 200+ Students</span>
					</div>
					<div class="course-ratings">
						<span>5 <i class="fa-solid fa-star"></i></span>
					</div>
				</div>

				<div class="course-card">
					<img src="images/cpp1.png">
					<div class="category">
						<div class="subject">
							<h3>Development</h3>
						</div>
						<img src="images/cpp1.png">
					</div>
					<h2 class="course-title"><a href="cpp.html" style="text-decoration: none; color: black;">Learn
							CPP: From Beginner to Advanced</a></h2>
					<div class="course-desc">
						<span><i class="fa-solid fa-users"></i> 215+ Students</span>
					</div>
					<div class="course-ratings">
						<span>4.9 <i class="fa-solid fa-star"></i></span>
					</div>
				</div>

				<div class="course-card">
					<img src="images/j2.jpeg">
					<div class="category">
						<div class="subject">
							<h3>Development</h3>
						</div>
						<img src="images/j1.png">
					</div>
					<h2 class="course-title"><a href="java.html" style="text-decoration: none; color: black;">Learn
							Java: From Beginner to Advance</a></h2>
					<div class="course-desc">
						<span><i class="fa-solid fa-users"></i> 2154+ Students</span>
					</div>
					<div class="course-ratings">
						<span>4.8 <i class="fa-solid fa-star"></i></span>
					</div>
				</div>

			</div>
	<!--   *** Courses Contents Ends ***   -->
	<section class="footer" id="footer">
			<div class="copy-rights">
				<p>&copy; copy-rights reserved(2025) | Designed with <i class="fa-solid fa-heart"></i> by <b>VIKESH,
						SHAGUN, PRIYA, PALAK.!!</b>
				</p>
			</div>
		</section>
</section>

</body>
</html>
