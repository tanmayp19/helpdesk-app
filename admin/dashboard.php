<?php 
    session_start();
    if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
        $adminname = $_SESSION['sess_user_name'] ;
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

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>
    <div class="my-nav">
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
        
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <a class="nav-link" href="../db/logout.php"><span data-feather="log-out"></span> Sign out </a>
            </li>
        </ul>
        </nav>
    </div>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
         <?php include "sidebar-nav.php"; ?>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1 class="display-4 d-none d-sm-block">
            <?php echo"WELCOME,"." ".$adminname; ?>
        </h1>

        <?php 
            require "../db/connect.php";
            $sql = "SELECT COUNT( * ) FROM tickets WHERE Status = 'NEW' ";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $newcount = $statement->fetchColumn();

            $sql = "SELECT COUNT( * ) FROM tickets WHERE Status = 'PENDING' ";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $pendingcount = $statement->fetchColumn();

            $sql = "SELECT COUNT( * ) FROM tickets WHERE Status = 'CLOSED' ";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $closedcount = $statement->fetchColumn();
        ?>

        <div class="row mb-3">
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">New Tickets</h6>
                            <h1 class="display-4"><?php echo $newcount; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Pending Tickets</h6>
                            <h1 class="display-4"><?php echo $pendingcount; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Closed Tickets</h6>
                            <h1 class="display-4"><?php echo $closedcount; ?></h1>
                        </div>
                    </div>
                </div>

            <div class="card w-100 card-register mx-auto mt-3"> 
            <?php 
                require "../db/connect.php";
                $sql = 'SELECT * FROM tickets ORDER BY id DESC LIMIT 2';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $people = $statement->fetchAll(PDO::FETCH_OBJ);
            ?>
              <div class="card-header">LATEST TICKETS</div>
                <div class="card-body">
                <table class="admin-table table table-bordered">
                    <thead>
                        <tr class="bg-info text-center">
                            <th>ID</th>
                            <th>NAME</th> 
                            <th>EMAIL</th>
                            <th>SUBJECT</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <?php foreach($people as $person): ?>
                    <tr class="text-center">
                        <td><?= $person->tkt_id; ?></td>
                        <td><?= $person->Name; ?></td>
                        <td><?= $person->Email; ?></td>
                        <td><?= $person->Subject; ?></td>
                        <td><?= $person->Status; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                </div>
              </div>
            </div>

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
    
  </body>
</html>
