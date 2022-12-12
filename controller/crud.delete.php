<?php 

include "../model/tour.php";

$admin = new Tour;
$conection = $admin->connection();

$id = $_GET["id"];

$delete = $admin->delete($conection, $id);

if($delete == true) {
    header("location: ../view/dashboard.php?delete=success");
} else {
    header("location: ../view/dashboard.php?delete=failure");
}