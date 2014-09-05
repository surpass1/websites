<?php
session_start();
include('../connect.php');
$a = trim($_POST['code']);
$b = trim($_POST['name']);
$c = trim($_POST['cost']);
$d = trim($_POST['price']);
$e = trim($_POST['supplier']);
$f = trim($_POST['qty']);
// query
$sql = "INSERT INTO products (product_code,product_name,cost,price,supplier,qty) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: products.php");


?>