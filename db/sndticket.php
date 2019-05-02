<?php
require 'connect.php';
 
if (isset ($_POST['submit']) ) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Subject = $_POST['subject'];
    $Message = $_POST['txtarea'];
    $date = date("Y-m-d");
    $stamp = date("Ymdhis");
    $cmpid = "$stamp";
    $cmpid = str_replace(".", "", "$cmpid");
    $uid = "TKT-".$cmpid;
    
    $query = "INSERT INTO tickets (tkt_id,Name,Email,Mobile,Subject,Message)
                VALUES ('$uid','$Name','$Email','$Mobile','$Subject','$Message');";
  
    $statement = $connection->prepare($query);

    if($statement->execute(['tkt_id'=>$uid, ':Name'=>$Name,':Email'=>$Email,':Mobile'=>$Mobile,':Subject'=>$Subject,':Message'=>$Message])){
        header('location: ../success.php');
    }  
}

 ?>