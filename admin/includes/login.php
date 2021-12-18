<?php


$password = "admin";
$login = "admin";
if ($login === $_POST['login'] && $password === $_POST['password']){
    header("Location: http://shop.loc/admin/test.php");
} else {
    echo "NEVERNIY PAROL'";
}


?>