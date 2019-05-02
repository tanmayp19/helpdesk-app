<html>
    <head>        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/complaint-style.css">
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
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class="container">
            <div class="col-sm-4 col-sm-offset-4">
                 
                    <form method="POST" action="db/sndticket.php">
                    <br style="clear:both">
                                <h3 style="margin-bottom: 25px; text-align: center;">SEND A TICKET</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" name="txtarea" placeholder="Message" maxlength="140" rows="7"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                                </div>
                        
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                    </form>
            </div>
        </div>
    </body>
</html>



