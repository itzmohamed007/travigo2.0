<?php 

include "../model/tour.php";

$admin = new Tour;
$conection = $admin->connection();

$data = $admin->get($conection);