
<?php
echo '
<!DOCTYPE html>
<html>
<head>
	<title>Studywithcomp - Learn and Grow with Us</title>
	<style>
		/* Global styles */

		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 10px;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		nav li {
			margin: 0 10px;
		}

		nav a {
			color: #fff;
			text-decoration: none;
		}

		nav a:hover {
			text-decoration: underline;
		}

		main {
			max-width: 800px;
			margin: 20px auto;
			padding: 0 20px;
		}

		footer {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 10px;
		}

		/* Specific page styles */

		h1 {
			font-size: 36px;
			align-items: center;
			margin: 0;
		}

		h2 {
			font-size: 24px;
			align-items: center;
			margin: 30px 0 20px 0;
		}

		h3 {
			font-size: 20px;
			margin: 20px 0 10px 0;
		}

		p {
			line-height: 1.5;
		}

		a {
			display: inline-block;
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			margin: 20px 0;
			border-radius: 5px;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}

		a:hover {
			background-color: #666;
		}

		ul {
			padding: 0;
		}

		li {
			margin-bottom: 40px;
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}

		li img {
			max-width: 100%;
		}

		@media only screen and (max-width: 600px) {
			nav {
				flex-direction: column;
			}

			nav li {
				margin: 10px 0;
			}

			h1 {
				font-size: 24px;
			}

			h2 {
				font-size: 20px;
				margin: 20px 0;
			}

			h3 {
				font-size: 18px;
				margin: 10px 0;
			}

			p {
				font-size: 16px;
				line-height: 1.2;
			}
		}
	</style>
</head>
<body>
	<header>
		<h1>Studywithcomp</h1>
		<nav>
			<ul>
				<li><a href="https://studywithcomp.github.io/Home/">Home</a></li>
				<li><a href="https://studywithcomp.github.io/Home/courses.html">Courses</a></li>
				<li><a href="https://studywithcomp.github.io/Home/internships.html">Internships</a></li>
				<li><a href="https://studywithcomp.github.io/Home/contact.html">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<h2>Featured Courses</h2>
	<ul>
		<li>
			<img src="assets/images/C1.jpg" alt="Course 1">
			<h3>Great Learning Academy</h3>
			<p>Great Learning Academy is an initiative by Great Learning, a leading ed-tech company in India. They offer a wide range of free courses in various domains such as machine learning, data science, cloud computing, artificial intelligence, cybersecurity, digital marketing, etc. The courses are designed and delivered by industry experts with years of experience. 

The best part is that the courses are self-paced, learners receive a certificate of completion upon finishing a course. The courses also include interactive quizzes, videos, and case studies that make learning engaging and immersive. 

Overall, Great Learning Academies offers a great opportunity for anyone looking to upskill themselves in today\'s digital age.</p>
			
			<a href="https://olympus.mygreatlearning.com/login">Enroll Now</a>
		</li>
		<li>
			<img src="assets/images/C2.jpg" alt="Course 2">
			<h3>Data Science for Beginners</h3>
			<p>In this course, you\'ll learn the basics of data analysis using Python, and work on a real-world project to predict stock prices.</p>
			<a href="#">Enroll Now</a>
		</li>
		<li>
			<img src="assets/images/C3.jpg" alt="Course 3">
			<h3>Mobile App Development with React Native</h3>
			<p>In this course, you\'ll learn how to build mobile apps using React Native, a popular JavaScript framework for cross-platform development.</p>
			<a href="#">Enroll Now</a>
		</li>
	</ul>

	<h2>Featured Internships Platforms</h2>
	<ul>
		<li>
			<img src="assets/images/I1.png" alt="Internship 1">
			<h3>Future Ready Talent Internship Program - 2023</h3>
			<p>Future Ready Talent Program is a free virtual student internship program that upskills students to enhance their employability. Students can earn numerous learning benefits, in accordance with an AICTE approved curriculum. Upon successful completion of the internship, students will receive a certificate from Microsoft and NASSCOM, and will be eligible to access career drives and mentorship opportunities.</p>
			<a href="https://futurereadytalent.in/">Apply Now</a>
		</li>
		<li>
			<img src="assets/images/I2.jpeg" alt="Internship 2">
			<h3>Internshala Internship</h3>
			<p>Internshala is an online platform that provides internships to students and fresh graduates. It offers a wide range of internships across various domains such as engineering, management, media, law, design, and more. Internshala partners with various companies across India and provides students with opportunities to gain practical experience and enhance their skills. These internships can range from a few weeks to several months and can be part-time or full-time.</p>
			<a href="https://internshala.com/i/FRC34-ISP34STUD7066">Apply Now</a>
		</li>
		<li>
			<img src="assets/images/I3.jpg" alt="Internship 3">
			<h3>Graphic Design Internship</h3>
			<p>Join our design team and help us create beautiful visual assets for our marketing campaigns and products. You\'ll gain experience in Adobe Creative Suite, branding, and layout design.</p>
			<a href="#">Apply Now</a>
		</li>
	</ul>
</main>

<footer>
	<!--<div class="social-media">
		<!--<a href="#"><img src="facebook.png" alt="Facebook"></a>-->
		<!--<a href="#"><img src="twitter.png" alt="Twitter"></a>-->
		<!--<a href="#"><img src="instagram.png" alt="Instagram"></a>-->
	<!--</div>-->
	<div class="contact-info">
		<h4>Contact Us</h4>
		<!--<p><strong>Address:</strong> 123 Main Street, Anytown USA</p>-->
		<!--"<p><strong>Phone:</strong> (555) 123-4567</p>"-->
		<p><strong>Email:</strong> infostudywithcomp@gmail.com</p>
	</div>
	<p>&copy; 2023 Studywithcomp. All rights reserved.</p>
</footer>

';
?>
