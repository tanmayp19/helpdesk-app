<?php
require 'connect.php';
 
$id = $_GET['id'];


$sql = 'SELECT * FROM tickets WHERE id=:id';

$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);

$person = $statement->fetch(PDO::FETCH_OBJ);

if (isset ($_POST['email'])  && isset($_POST['mobile']) && isset($_POST['subject']) && isset($_POST['txtarea']) && isset($_POST['status']) ) {

    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Subject = $_POST['subject'];
    $Message = $_POST['txtarea'];
    $Status = $_POST['status'];

    try{
        $stmt = $connection->prepare("UPDATE tickets SET Email=:email, Mobile=:mobile, Subject=:subject, Message=:txtarea, Status=:status WHERE id=:id");
        
        $stmt->bindParam(":email", $Email);
        $stmt->bindParam(":mobile", $Mobile);
        $stmt->bindParam(":subject", $Subject);
        $stmt->bindParam(":txtarea", $Message);
        $stmt->bindParam(":status", $Status);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        header("location: ../admin/view-tickets.php");

    }
    catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
    }


}
 ?>