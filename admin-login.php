<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>
   

    <div class="container-fluid">
            <div class="card w-25 card-register mx-auto mt-3"> 
              <div class="card-header">LOGIN</div>
                <div class="card-body">

                    <form method="post" action="db/login.php">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-12">
                            <label for="exampleInputName">Admin name</label>
                            <input class="form-control" id="exampleInputName" type="text"   name="ausername" autocomplete="off">
                          </div>
                        </div>
                       </div>

                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-12">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" name="apassword" >
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary btn-block" name="login">SIGN IN</button>

                    </form>
                  </div>
              </div>
            </div>
  
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