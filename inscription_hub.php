<?php
include "./include_register/db.php";
include "./include_register/inscription_model.php";
include "./include_register/inscription_control.php";

$name = $_POST["nom"];
$username = $_POST["pseudo"];
$picture = $_POST["picture"];
$bio = $_POST["bio"];
$banner = $_POST["banner"];
$password = $_POST["password"];
$password_repeat = $_POST["password_r"];
$email = $_POST["email"];
$birthday = $_POST["date"];   

$reg = new Registration($name, $username, $picture, $bio , $banner, $password, $password_repeat, $email, $birthday);
$reg->check_user();
