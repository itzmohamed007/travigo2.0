<?php
	include("../controller/crud.get.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travigo - Travel for everyone</title>
	<meta name="description" content="travigo is a travelling company that is considered one of the best out there in the market">
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<link rel="stylesheet"

  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

	<!--header--->
	<header>
		<a href="#" class="logo">LOGO</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="acceuil.php">Home</a></li>
			<li><a href="tours.php">Tours</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact us.php">Contact Us</a></li>	
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Travigo <br> Travel</h1>
			<p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the world.</p>
			<a href="tours.php" class="home-btn">Let's go now</a>
		</div>
	</section>

	<!--container--->
	<section class="container">
		<div class="text">
			<h2>Start Your Vacation <br> with Lots of Services!</h2>
		</div>

		<div class="row-items">
			<div class="container-box">
				<div class="container-img">
					<img src="../public/imgs/trip1.png">
				</div>
				<h4>Ship Cruises</h4>
				<p>150 Properties</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img alt="image de page principale de travigo" src="../public/imgs/trip2.png">
				</div>
				<h4>Food Tours</h4>
				<p>150 Properties</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="../public/imgs/trip3.png">
				</div>
				<h4>Summer Rest</h4>
				<p>150 Properties</p>
			</div>

		</div>
	</section>

	<!--destination section--->
	<section class="destination" id="destination">
		<div class="title">
			<h2>Our Most Popular <br> Destination!</h2>
		</div>

		<div class="destination-content">
			<!-- modify from here -->
			<?php
			if($data != false) {
				foreach($data as $row) {
					$image = $row['image'];
					$destination = $row['destination'];
	
					echo '
					<div class="col-content">
						<img alt="image de machu picchu" src="' . $image . '">
						<h5>' . $destination . '</h5>
					</div>
					';
				}
			} else {
				echo '
						<div class="collection">
							<img src="../public/imgs/tours/Error.png" alt="nft image" width="100%" height ="300px">
							<h3>no tours to show</h3>
						</div>	
					';
				}
			?>
		</div>
	</section>

	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe For more HTML, CSS, and <br> coding tutorials</p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="tours.html">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="tours.html">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">98 West 21th Street</a></li>
						<li><a href="#">New York NY 10016</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
						<li><a href="#">info@travigo.com</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="https://www.facebook.com/YouCodeSchool/"><i class='bx bxl-facebook' ></i></a>
						<a href="https://www.instagram.com/youcodeschool/?hl=fr"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="https://twitter.com/YouCode18?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class='bx bxl-twitter' ></i></a>
						<a href="https://ma.linkedin.com/company/youcode-maroc"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | Travigo</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="../public/js/script.js"></script>

</body>
</html>