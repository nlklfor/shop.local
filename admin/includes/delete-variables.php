<?php



require_once "connect.php";

$id = $_GET["id"];

mysqli_query($connect , "DELETE FROM `variables` WHERE `variables`.`id` = $id");

header("Location: http://shop.loc/admin/test.php");

?>