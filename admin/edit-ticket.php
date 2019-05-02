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

    <title>Create Ticket</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
         
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>

            $(document).ready(function(){ 
                $('#characterLeft').text('140 characters left');
                $('#message').keydown(function () {
                    var max = 140;
                    var len = $(this).val().length;
                    if (len >= max) {
                        $('#characterLeft').text('You have reached the limit');
                        $('#characterLeft').addClass('red');
                        $('#btnSubmit').addClass('disabled');            
                    } 
                    else {
                        var ch = max - len;
                        $('#characterLeft').text(ch + ' characters left');
                        $('#btnSubmit').removeClass('disabled');
                        $('#characterLeft').removeClass('red');            
                    }
                });    
            });

        </script>
    
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
        <?php require "../db/update-ticket.php"?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="card w-50 card-register mx-auto mt-3"> 
                <div class="card-header">Edit Ticket</div>
                  <div class="card-body">

                      <form method="post" action="../db/update-ticket.php?id=<?php echo $id; ?>">
                        
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-12">
                              <label for="exampleInputName">Email</label>
                              <input type="text" class="form-control" id="email" name="email" value="<?= $person->Email; ?>" required readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-12">
                              <label for="exampleInputName">Mobile No</label>
                              <input type="text" class="form-control" id="mobile" name="mobile" value="<?= $person->Mobile; ?>" required readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-12">
                              <label for="exampleInputName">Subject</label>
                              <input type="text" class="form-control" id="subject" name="subject" value="<?= $person->Subject; ?>" required readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-12">
                              <label for="exampleInputName">Message</label>
                              <textarea class="form-control" type="textarea" name="txtarea"  maxlength="140" rows="7"><?= $person->Message; ?></textarea>
                              <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span> 
                            </div>
                          </div>
                        </div><div class="form-group">
                          <div class="form-row">
                            <div class="col-md-12">
                              <label for="exampleInputName">Status</label>
                              <select name="status">
                                <option value="<?= $person->Status; ?>"><?= $person->Status; ?></option>
                                <option value="PENDING">PENDING</option>
                                <option value="CLOSED">CLOSED</option>
                              </select>
                            </div>
                          </div>
                        </div>


                        <button type="submit" class="btn btn-primary btn-block" name="submit">EDIT Ticket</button>

                      </form>
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
