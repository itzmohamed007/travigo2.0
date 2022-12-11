<?php

include("../model/tour.php");

// start of adding process example
$destination = $_POST["destination"];
$image_name = $_FILES["image"]["name"];
$oldLocation = $_FILES["image"]["tmp_name"];
$newLocation = "../public/added_imgs/" . $image_name;
$price = $_POST["price"];
$duration = $_POST["duration"];

$admin = new Tour;
$connection = $admin->connection();
$adding = $admin->add($connection, $destination, $oldLocation, $newLocation, $price, $duration);

if($adding == true) {
    header("location: ../view/dashboard.php");
} else {
    echo "error";
}