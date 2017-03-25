<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to StockOverflowing!</title>
        <link href="<?php echo base_url()?>css/design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <header>
    <div class="header-inner">
      <img src="<?php echo base_url()?>images/bg.jpg" alt="img" width="1400px" height="708px">
      <div class="header-overlay">
        <div class="header-content">
        
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <center>
                <p><h3><font color="black">Incorrect Username and Password.<br></font></h3></p>
                <p class="text-warning"><small>Please Try Again.</small></p></center>
              </div>
              <div class="modal-footer">
                <div class="form-group">
                  <form action="process" method="POST">
                    <input type="text" class="form-control input-lg" placeholder="Username" name="username" required=""/>
                    <div class="form-group">
                      <input type="password" class="form-control input-lg" placeholder="Password" name="password" required="" />
                    </div>

                    <div class="form-group">
                      <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                    </div>

                    <div class="form-group">
                      <center><span><a href="balikmo" class="button">Go Back</a></span></center>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <font color="black"><h4 class="modal-title">Register Account</h4>
          </div>

          <div class="modal-body">
            <div class="form-group">
              <form action="register_validation" method="POST">
                <label>Username:</label>
                <input type="text" class="form-control input-md" placeholder="Enter Username" name="username" required/>

                <label>Password:</label>
                <input type="password" class="form-control input-md" placeholder="Enter Password" name="password" required/>
                 
                <label>First Name:</label>
                <input type="text" class="form-control input-md" placeholder="Enter First Name" name="firstname" required/>
                 
                <label>Middle Name:</label>
                <div class="form-group">
                  <input type="text" class="form-control input-md" placeholder="Enter Middle Name" name="mname" required/>
                </div>

                <label>Last Name:</label>
                <div class="form-group">
                  <input type="text" class="form-control input-md" placeholder="Enter Last Name" name="lastname" required/>
                </div>

                <label>City Address:</label>
                <div class="form-group">
                  <input type="text" class="form-control input-md" placeholder="Enter City Address" name="address" required/>
                </div>

                <label>Email Address:</label>
                <div class="form-group">
                  <input type="email" class="form-control input-md" placeholder="(e.g juantamad@yahoo.com)" name="e_address" required/>
                </div>

                <div class="form-group">
                  <label>Gender:</label>
                  <select name="gender">
                    <option value="Male" name="gender" required="">Male</option>
                    <option value="Female" name="gender" required="">Female</option>
                  </select>
                </div>

                <label>Contact:</label>
                <div class="form-group">
                  <input type="tel" class="form-control input-md" placeholder="Enter Contact" name="contact" required/>
                </div>

                <label>Birthday:</label>
                <div class="form-group">
                  <input type="date" class="form-control input-md" placeholder="Enter Birthday" name="bday" required/>
                </div>

                <div class="form-group">
                  <input id="myModal" type="submit" class="btn btn-block btn-lg btn-primary" value="Sign up"/>
                </div>

                <center><span><a href="" data-dismiss="modal">Go back</a></span></center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
</head>
</html>
  