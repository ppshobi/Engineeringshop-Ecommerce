<?php
require_once('app/DB2.php');

$con=new Mysql();

get_class_methods($con);
print_r($con);
$sql="SELECT * FROM users";
$res=$con->query($sql);
print_r($res);
?>