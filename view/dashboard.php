<?php

session_start();

include("../controller/crud.get.php");

if(!isset($_SESSION["email"])) {
	header("location: login_form.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD</title>
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
		<a href="../controller/logout.php?logout=1" name="logout" class="logo logout">logout</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar tour_nav">
        <li><a href="acceuil.php">Home</a></li>
        <li><a href="tours.php">Tours</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact us.php">Contact Us</a></li>
        <li><a class="return" href="acceuil.php">RETURN</a></li>
      </ul>
	</header>

	<!-- content -->
	<section class="display-table">
		<?php
			if($data != false) {
				foreach($data as $row) {
					$id = $row["id"];
	
					$image = $row['image'];
					$destination = $row['destination'];
					$duration = $row['duration'];
					$price = $row['price'];
					echo
					'
					<div class="collection">
						<img src="' . $image . '" alt="nft image" width="100%" height ="300px">
						<h3>destination: ' . $destination . '</h3>
						<p>price: ' . $price .'$</p>
						<p>duration: ' . $duration .'h</p>
						<div class="operation-td">
							<a href="../view/update_form.php?id='. $id .'" name="update" class="update"><i class="bx bxs-edit"></i>Update</a>
							<a href="../controller/crud.delete.php?id='. $id .'" name="delete" class="delete"><i class="bx bxs-eraser"></i>Delete</a>
						</div>
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
	</section>

	<div class="add-tour">
		<button><a href="add_tour.php">add tour</a></button>
	</div>



	<!--link to js--->
	<script type="text/javascript" src="../public/js/script.js"></script>

</body>
</html>