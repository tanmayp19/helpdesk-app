<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ticket Generated</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>

   

    <main role="main" class="container">
    <?php 
                require "db/connect.php";
                $sql = 'SELECT tkt_id FROM tickets ORDER BY id DESC LIMIT 1';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $people = $statement->fetchColumn();
                
    ?>
      <div class="starter-template">
        <h1 class="text-danger">Please Note Down Your Ticket ID</h1>
        <p class="lead text-uppercase font-weight-bold"><br> <?= $people; ?></p>
        <br>
        <a href="index.php" class="btn btn-info" role="button">Go Back</a>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
