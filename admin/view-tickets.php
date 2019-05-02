<?php 
    session_start();
    if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
      
    } else { 
        header('location: ../admin-login.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADD ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/styletest.css">
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="../dist/simplePagination.css" />
    <script src="../dist/jquery.simplePagination.js"></script>
    
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../db/logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
         <?php include "sidebar-nav.php"; ?>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h1 class="display-6">Tickets</h1>
                    <?php 
                        require "../db/connect.php";

                        $limit = 5;  
                        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
                        $start_from = ($page-1) * $limit;  

                        $sql = "SELECT * FROM tickets ORDER BY id ASC LIMIT $start_from, $limit";
                        $statement = $connection->prepare($sql);
                        $statement->execute();
                        $people = $statement->fetchAll(PDO::FETCH_OBJ);
                    ?>


            <table class="table table-bordered">
		
		<thead>
			<tr class="bg-info text-center" >
				<th>Status</th>
				<th>Ticket ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Timestamp</th>
        <th>EDIT</th>
        <th>REPLY</th>
			</tr>
		</thead>
		<tbody>
		 

            <?php foreach($people as $person): ?>
            <tr class="text-center">
                <td><?= $person->Status; ?></td>
                <td><?= $person->tkt_id; ?></td>
                <td><?= $person->Name; ?></td>
                <td><?= $person->Email; ?></td>
                <td><?= $person->Mobile; ?></td>
                <td><?= $person->Subject; ?></td>
                <td><?= $person->Message; ?></td>
                <td><?= $person->Timestamp; ?></td>                

                <td>
                <a href="edit-ticket.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
                </td>
                <td>
                <a href="reply.php?id=<?= $person->id ?>" class="btn btn-info"><span data-feather="send"></span></a>
                </td>
            </tr>
            <?php endforeach; ?>
		</tbody>
	</table>
   
    <?php  
        $sql = "SELECT COUNT(id) FROM tickets"; 
        
        $statement2 = $connection->prepare($sql);
        $statement2->execute();
        $results = $statement2->fetch(PDO::FETCH_BOTH);

       
        $total_records = $results[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                    $pagLink .= "<li><a href='view-tickets.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
?>


          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->

    
    <script type="text/javascript">
      $(document).ready(function() {
        $('.table').DataTable();
      } );
    </script>


  
  </body>
</html>


