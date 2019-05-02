<?php
require 'connect.php';
 
if (isset ($_POST['reg_user']) ) {
    $adminname = $_POST['ausername'];
    $adminpass = $_POST['apassword'];

    $query = "INSERT INTO admin (admin_uname,admin_pass)
                VALUES ('$adminname','$adminpass');";
  
    $statement = $connection->prepare($query);

    if ($statement->execute([':admin_uname' => $adminname, ':admin_pass' => $adminpass])) {
        echo "<script>window.open('../admin/add-admin.php')</script>";
      }
}

?>