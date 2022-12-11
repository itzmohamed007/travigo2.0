<?php

session_start();
include '../model/admin.php';

$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];

$admin = new Admin;
$connectDb = $admin->connection();
$info = $admin->getData($connectDb);

if($inputEmail == $info["email"] and $inputPassword == $info["password"]) {
    $_SESSION["email"] = $inputEmail;
    $_SESSION["password"] = $inputPassword;

    header("location: ../view/dashboard.php");

}else {
    header("location: ../view/login_form.php");
}