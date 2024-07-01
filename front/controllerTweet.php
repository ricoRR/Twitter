<?php

include ('../include_register/db.php'); 
session_start();

$obj = new Database();
$db = $obj->connect_db();

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("SELECT * from tweet where id_user = :id");
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();

$result = $stmt->fetchAll();

echo json_encode($result);




?>