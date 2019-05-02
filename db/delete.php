<?php
require "connect.php";


$delid = $_GET['id'];

$stmt=$connection->prepare("DELETE FROM admin WHERE id=:id");
$stmt->execute(array(':id'=>$delid));
header("location:../admin/view-admin.php");

?>