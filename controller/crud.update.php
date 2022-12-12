<?php

include("../model/tour.php");

// start of adding process example
$id = $_POST["id"];
$destination = $_POST["destination"];
$image_name = $_FILES["image"]["name"];
$oldLocation = $_FILES["image"]["tmp_name"];
$newLocation = "../public/added_imgs/" . $image_name;
$price = $_POST["price"];
$duration = $_POST["duration"];

$admin = new Tour;
$connection = $admin->connection();
$updating = $admin->update($connection, $id, $destination, $oldLocation, $newLocation, $price, $duration);

if($updating == true) {
    header("location: ../view/dashboard.php");
} else {
    echo "error";
}