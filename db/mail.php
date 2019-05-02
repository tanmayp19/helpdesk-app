<?php
require 'connect.php';
 
$id = $_GET['id'];
$reply = $_POST['reply'];



if (isset ($_POST['submit']) && isset ($_POST['reply'])) {

    $sql = 'SELECT * FROM tickets WHERE id=:id';

$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);

$person = $statement->fetch(PDO::FETCH_OBJ);

    $name = $person->Name;
    $email = $person->Email;
    $tktid = $person->tkt_id;
    
    $message = $person->Message;
    $status = $person->Status;

   
    if($status == 'CLOSED'){
        $replystatus  = "Your Issue Has Been Resolved <br><br>";
    }else{
        $replystatus = "";
    }
    
  

    
    $subject = 'Testing PHP Mail';
    $message = '<br> Hello,'.$name.'<br><br>'.'Your Ticket ID :- '.$tktid.'<br><br> [ISSUE]<br><br>'.$message.'<br><br>'.$replystatus.'[REPLY]<br><br>'.$reply;
    $headers = 'From: noreply @ company . com';
    mail($email,$subject,$message,$headers);
 
    header('location: ../admin/view-tickets.php');

}
 ?>