<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOG IN</title>
    <meta name="description" content="travigo is a travelling company that is considered one of the best out there in the market" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!--header--->
    <header>
      <a href="#" class="logo">LOGO</a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li class="login"><a href="acceuil.php">RETURN</a></li>
      </ul>
    </header>

    <!-- inputs fields -->
    <div class="form-wrapper">
      <p class="login-title">LOG IN</p>
      <form action="../controller/login.php" method="post">
        <input type="email" placeholder="email" name="email" required />
        <input type="password" placeholder="password" name="password" required />
        <input class="submit" type="submit" value="log in" />
      </form>
    </div>
  </body>
</html>