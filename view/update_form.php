<?php
    include "../model/tour.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>update</title>
    <meta
      name="description"
      content="travigo is a travelling company that is considered one of the best out there in the market"
    />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--header--->
    <header>
      <a href="#" class="logo">LOGO</a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar tour_nav">
        <li><a href="acceuil.php">Home</a></li>
        <li><a href="tours.php">Tours</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact us.php">Contact Us</a></li>
        <li><a class="return" href="acceuil.php">RETURN</a></li>
      </ul>
    </header>

    <!-- inputs fields -->
    <div class="form-wrapper">
      <p class="login-title">ADD TOUR</p>
      <form action="../controller/crud.update.php?id='. $id .'" method="post" enctype="multipart/form-data">
        <?php
        $object = new Tour;
        $connection = $object->connection();

        $id = $_GET["id"];
        $result = $connection->query("SELECT * FROM tours WHERE id = '$id'");

        foreach($result as $row) {
            $destination = $row["destination"];
            $image = $row["image"];
            $price = $row["price"];
            $duration = $row["duration"];
        }

        echo '
            <input type="text" placeholder="tour destination" name="destination" value="'. $destination .'" required />
            <input type="file" placeholder="tour image" name="image" value="'. $image .'" />
            <input type="text" placeholder="tour price" name="price" value="'. $price .'" required />
            <input type="text" placeholder="tour duration" name="duration" value="'. $duration .'" required />
            <input type="text" placeholder="tour id" name="id" value=' . $id . ' readonly/>
            <input class="submit" type="submit" value="add" />
        '
        ?>
      </form>
    </div>

	<!--link to js--->
	<script type="text/javascript" src="../public/js/script.js"></script>
  </body>
</html>
