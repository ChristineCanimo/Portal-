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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slick.css"/> 
    <link id="switcher" href="<?php echo base_url()?>assets/button.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/styles.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.modal-dialog1 {
    width: 500px; 
    margin-left: 430px;
    margin-top: 100px;
    margin-bottom: 30px;
}
.modal-dialog2 {
    width: 400px;
    margin-left: 500px;
    margin-top: 150px;
}
</style>

  <header>
    <div class="header-inner">
      <img src="<?php echo base_url()?>images/bg.jpg" alt="img" width="1400px" height="637px">
      <div class="header-overlay">
        <div class="header-content">
        <h1>Welcome to</h1>
        <h2 class="header-slide">StockOverflowing<br>
          <span>SHARE</span>
          <span>CONNECT</span>
          WITH PEOPLE</h2>
        <div class="header-btn-area">
          <a class="knowmore-btn btn btn-lg" data-toggle="modal" data-target="#myModal">Login</a>
          <a class="download-btn btn btn-lg" data-toggle="modal" data-target="#myModal1">Register Account</a>
        </div>
      </div>    
    </div>
  </header>
    </head>
    <body>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog2">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign in</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <form action="index.php/login_c/process" method="POST">

              <input type="text" class="form-control input-lg" placeholder="Username" name="username" required=""/>
              <div class="form-group">
                 <input type="password" class="form-control input-lg" placeholder="Password" name="password" required="" />
              </div>

               <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog1">
        <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <font color="black"><h4 class="modal-title">Register Account</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <form action="index.php/login_c/register_validation" method="POST">

            <label>Username:</label>
            <input type="text" class="form-control input-md" placeholder="Enter Username" name="username" required/>
          </div>

          <label>Password:</label>
          <input type="password" class="form-control input-md" placeholder="Enter Password" name="password" required/>
             
          <label>First Name:</label>
          <input type="text" class="form-control input-md" placeholder="Enter First Name" name="fname" required/>

          <label>Middle Name:</label>
          <input type="text" class="form-control input-md" placeholder="Enter Middle Name" name="mname" required/>

          <label>Last Name:</label>
          <input type="text" class="form-control input-md" placeholder="Enter Last Name" name="lname" required/>

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

            <input type="hidden" name="date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>"/>
            <input type="hidden" name="date_updated" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>"/>

          <div class="form-group">
            <input id="myModal" type="submit" class="btn btn-block btn-lg btn-primary" value="Sign up"/>
          </div>

          <center><span><a href="" data-dismiss="modal">Go back</a></span></center>
        </div>
      </div>
    </div>
  </div>

   <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
 </body>
 </html>
