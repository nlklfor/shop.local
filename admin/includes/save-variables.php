<?php 

require_once "connect.php";

$title = $_POST["title"];
$value = $_POST["value"];
$id = $_POST["id"];


mysqli_query($connect , "UPDATE `variables` SET `title` = '$title', `value` = '$value' WHERE `variables`.`id` = $id");

header('Location: /admin/test.php');

?>