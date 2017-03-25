<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <style> 
#rcorners {
    background: #000;
    padding: 10px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-left: 10px;
    margin-right: 10px;  
}
#rcorner {
    background: #000;
    padding: 2px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-left: 0px;
    margin-right: 0px;  
}
</style>
    <!-- Bootstrap -->
        <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/font.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/profile.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/gridprofiles.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style> 
#rcorners1 {
    background-color: gray;
    width: 1340px;
    height: 400px;
    float: right;  
    display: block;
    overflow: hidden;
}
#rcorners2 {
    border-radius: 25px;
    background: #eee;
    padding: 20px; 
    width: 100%;
    height: 100%;
   
}
#cover {
    padding: 20px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-top: 120px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 1000px;  
}
.modal-dialog1 {
    width: 400px;
    margin-left: 500px;
    margin-top: 150px;
}
.modal-dialog2 {
    width: 600px;
    margin-left: 350px;
    margin-top: 100px;
}
img
{
  width: 1340px;
  height: 410px;
  vertical-align:baseline;
}
@media (min-width: 768px)
{header {
  margin-top: 70px;
  box-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  height:   400px;
  position: relative;
  width:auto;
}}
table, td{
    padding: 80px;
    text-align: center;
    float: center;
}
</style>
  <body>
        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div id="rcorners">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        </div>
          <a class="navbar-brand page-scroll" href="index"><b>StockOverflowing</b></a>
          <ul class="nav navbar-nav navbar-left">
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="q">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="button" data-toggle="modal" data-target="#logout"><i class= "fa fa-sign-out"> Logout</i></a></li>

            </ul>
          </div>
          </div>
        </div>
      </nav>

<header>
 <div class="container-fluid">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h1><center>User table</h1></center>
          </div>
  <div class="panel-body">
    <div class="panel-default">
      <table class="table table-bordered" style="color: black">
        <thead>
            <th> ID Number </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Last Name </th>
            <th> Username </th>
            <th> Password </th>
            <th> Address </th>
            <th> Email Address </th>
            <th> Contact </th>
            <th> Birthday </th>
            <th> Date Added </th>
            <th> Date Updated </th>
            <th> Action </th>
            </font>
        </thead>
        <tfoot>
            <th> ID Number </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Last Name </th>
            <th> Username </th>
            <th> Password </th>
            <th> Address </th>
            <th> Email Address </th>
            <th> Contact </th>
            <th> Birthday </th>
            <th> Date Added </th>
            <th> Date Updated </th>
            <th> Action </th>
            </font>
        </tfoot>
        <?php foreach($details as $detail){?>
        <tbody>
          <tr>
            <td> <?php echo $detail->idnumber." ";?> </td>
            <td> <?php echo $detail->fname." ";?> </td>
            <td> <?php echo $detail->mname." ";?> </td>
            <td> <?php echo $detail->lname." ";?> </td>
            <td> <?php echo $detail->username." ";?> </td>
            <td> <?php echo $detail->gender." ";?> </td>
            <td> <?php echo $detail->address." ";?> </td>
            <td> <?php echo $detail->emailadd." ";?> </td>
            <td> <?php echo $detail->contact." ";?> </td>
            <td> <?php echo $detail->bday." ";?> </td>
            <td> <?php echo $detail->date_added." ";?> </td>
            <td> <?php echo $detail->date_updated." ";?> </td>
            <td>
              <a href="edit.html"><i class="fa fa-edit"></i></a>
              <a href="remove.html"><i class="fa fa-trash"></i></a>
            </td>
            </tr>
        </tbody>
        <?php }?>
        <div class="panel-body">
          <div class="panel-default">
            <table class="table table-bordered" style="color: black">
              <thead>
                  <th>  <center> ID Number </center></th>
                  <th><center> Username </center> </th>
                  <th><center> Date and Time of Login </center> </th>
                  <th><center> Date and Time of Logout </center> </th>

              </thead>
              <?php foreach($bruh as $detail){?>
              <tbody>
                <tr>
                  <td> <?php echo $detail->history_id." ";?> </td>
                  <td> <?php echo $detail->users_id." ";?> </td>
                  <td> <?php echo $detail->date_login." ";?> </td>
                  <td> <?php echo $detail->date_logout." ";?> </td>
                  </tr>
              </tbody>
              <?php }?>
      </table>
    </div>
  </div>
    </div>
  </div>
     
 <!-- Modal -->
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">LOGOUT Confirmation</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Are you sure you want to logout?</p></center>
        </div>
        <div class="modal-footer">
          <Center>
            <a href="<?php echo base_url();?>home/logout" class="btn btn-primary">Yes</a></button>
            <a class="btn btn-primary" data-dismiss="modal">No</a></button>
          </Center>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="event" role="dialog">
    <div class="modal-dialog">


  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src="js/index.js"></script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
