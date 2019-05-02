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
        
          <div class="mx-auto col-md-8">
            <?php 
                require "../db/connect.php";
                $sql = 'SELECT * FROM admin';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $people = $statement->fetchAll(PDO::FETCH_OBJ);
            ?>

                <table class="admin-table table table-bordered">
                    <thead>
                        <tr class="bg-info text-center">
                            <th>#</th>
                            <th>Username</th> 
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <?php foreach($people as $person): ?>
                    <tr class="text-center">
                        <td><?= $person->id; ?></td>
                        <td><?= $person->admin_uname; ?></td>
                        <td>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="../db/delete.php?id=<?= $person->id ?>" class='btn btn-danger'>REMOVE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>

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