<?php

include "./include_register/db.php";
include "./include_login/login_model.php";
include "./include_login/login_control.php";

$password = $_POST["password"];
$email = $_POST["email"];

$login_u = new Login_cont($password, $email);
$login_u->login_checker();