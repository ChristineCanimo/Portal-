<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Account Settings</title>
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

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>css/design.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/fonts.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/pictures.css" rel="stylesheet">
    <!-- Custom Fonts -->
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
    padding: 20px; 
    width: 100%;
    height: 100%;
    float: right;  
    margin-top: 120px;
    margin-left: 10px;
    margin-right: 10px;  
}
#rcorners2 {
    border-radius: 25px;
    background: #eee;
    padding: 20px; 
    width: 100%;
    height: 100%;
   
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
.developers {
   float: left;
   margin: 10px;
   padding: 10px;
   max-width: 300px;
   height: 300px;
   border: 1px solid black;
}
table, td{
    padding: 80px;
    text-align: center;
    float: center;
}
</style>
  <body id="page-top" class="index">
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
          <form class="navbar-form" role="search" action="<?php echo base_url(); ?>home/search" method="post">
              <div class="input-group" style="width:205%">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
        </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i style="font-size:20px" class="fa fa-globe"></i></a>
            <ul class="dropdown-menu notify-drop">
              <div class="notify-drop-title">
                <div class="row">
                <?php foreach($countnotifs as $count){?>
                  <div class="col-md-6 col-sm-6 col-xs-6">Notifications (<b><?php echo $count->count;?></b>)</div>
                   <?php }?>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="tümü okundu."><i class="fa fa-dot-circle-o"></i></a></div>
                </div>
              </div>
              <div class="drop-content">
              <?php foreach($notifdetails as $notifdetail){?>
                <?php if($notifdetail->type=='comment') { ?>

                <li>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="notify-img"><img src="<?php echo base_url();?>images/user<?php echo $notifdetail->idnumber;?>_.jpg" alt=""></div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifdetail->idnumber." " ;?>"><?php echo $notifdetail->fname." ";?><?php echo $notifdetail->lname." ";?></a> commented on your<a href="<?php echo base_url();?>index.php/home/post_commented/28" style="color: red;text-transform: lowercase;"> post</a> in BSIS
                  <a href="" class=""><i class="fa fa-settings"></i></a>
                    <hr>
                    <p class="time"><?php $time = new DateTime($notifdetail->datetime);
                    $date = $time->format('n.j.Y');
                    $time2 = $time->format('H:i:s');
                    echo $date." | ".$time2;?></p>
                  </div>
                </li>
                <?php } ?>

                <?php if($notifdetail->type=='member') { ?>

                <li>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="notify-img"><img src="<?php echo base_url();?>images/user<?php echo $notifdetail->idnumber;?>_.jpg" alt=""></div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifdetail->idnumber." " ;?>"><?php echo $notifdetail->fname." ";?><?php echo $notifdetail->lname." ";?></a>Added you to a group <a href="<?php echo base_url();?>index.php/home/post_commented/28" style="color: red;text-transform: lowercase;">groupname</a> in BSIS
                  <a href="" class=""><i class="fa fa-settings"></i></a>
                    <hr>
                    <p class="time"><?php $time = new DateTime($notifdetail->datetime);
                    $date = $time->format('n.j.Y');
                    $time2 = $time->format('H:i:s');
                    echo $date." | ".$time2;?></p>
                  </div>
                </li>
                <?php } ?>

                <?php if($notifdetail->type=='post') { ?>

                <li>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="notify-img"><img src="<?php echo base_url();?>images/user<?php echo $notifdetail->idnumber;?>_.jpg" alt=""></div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifdetail->idnumber." " ;?>"><?php echo $notifdetail->fname." ";?><?php echo $notifdetail->lname." ";?></a>Posted on your wall <a href="<?php echo base_url();?>index.php/home/post_commented/28" style="color: red;text-transform: lowercase;">posttitle</a> in BSIS
                  <a href="" class=""><i class="fa fa-settings"></i></a>
                    <hr>
                    <p class="time"><?php $time = new DateTime($notifdetail->datetime);
                    $date = $time->format('n.j.Y');
                    $time2 = $time->format('H:i:s');
                    echo $date." | ".$time2;?></p>
                  </div>
                </li>
                <?php } ?>

                <?php }?>

              </div>
              <div class="notify-drop-footer text-center">
                <a href=""><i class="fa fa-eye"></i>See all</a>
              </div>
            </ul>
          </li>
              <li><a href="home"><i class="fa fa-home"> HOME</i></a></li>
              <li><a href="index"><i class="fa fa-user"> PROFILE</i></a></li>
              <li><a href="aboutie"><i class="fa fa-exclamation-circle"> ABOUT</i></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a href="accsetting"><i class="fa fa-cog"> Edit Profile</i></a></li></p>
                    <li><a  href="#" class="button" data-toggle="modal" data-target="#logout"><i class="fa fa-sign-out"> Logout</i></a></li>
                  </ul>
              </ul>
            </div>
          </div>
        </div>
      </nav>

<br><br><br>
<div class="container-fluid">
  <div class="row">

      <div class="col-sm-2">
        <div class="user clearfix">
          <?php foreach($details as $detail){?>
          <div class="avatar">
            <img src='<?php echo base_url();?>images/user<?php echo $detail->idnumber;?>_.jpg' class="img-thumbnail img-profile")">
            <?php }?>
          </div>
          <?php echo form_open_multipart('index.php/home/upload');?>
            <?php foreach($details as $detail){?>
              <input type = "hidden" name = "dp" value = "user#<?php echo $detail->idnumber." ";?>" >
              <imput type = "hidden" name="fileformat">
              <input type="file" name="userfile" size="25" />
              <input type="submit" value="Upload Profile Picture" />
            <?php }?>
          </form>                                                                                   
        </div> 
      </div>

      <?php foreach($details as $detail){?>
      <div class="form-group" style="width: 600px;margin-left: 230px;margin-top: 30px;">
        <form action="register_validation" method="POST">

          <div class="form-group">
            <label style="float: left">Username:</label>
            <input type="text" value="<?php echo $detail->username;?>" class="form-control input-md" placeholder="Enter Username" name="username" required/>
          </div>

          <div class="form-group">
            <label style="float: left">Old Password:</label>
            <input type="password" class="form-control input-md" placeholder="Enter Old Password" name="password" required/>
          </div>

          <div class="form-group">
            <label style="float: left">Retype Old Password:</label>
            <input type="password" class="form-control input-md" placeholder="Enter Old Password" name="password" required/>
          </div>

          <div class="form-group">
            <label style="float: left">New Password:</label>
            <input type="password" class="form-control input-md" placeholder="Enter New Password" name="password1" required/>
          </div>

          <label style="float: left">First Name:</label>
          <input type="text" value="<?php echo $detail->fname;?>" class="form-control input-md" placeholder="Enter First Name" name="fname" required/>

          <label style="float: left">Middle Name:</label>
          <input type="text" value="<?php echo $detail->mname;?>" class="form-control input-md" placeholder="Enter Middle Name" name="mname" required/>

          <label style="float: left">Last Name:</label>
          <input type="text" value="<?php echo $detail->lname;?>" class="form-control input-md" placeholder="Enter Last Name" name="lname" required/>

          <label style="float: left">City Address:</label>
          <div class="form-group">
           <input type="text" value="<?php echo $detail->address;?>" class="form-control input-md" placeholder="Enter City Address" name="address" required/>
          </div>

          <label style="float: left">Email Address:</label>
          <div class="form-group">
            <input type="email" value="<?php echo $detail->emailadd;?>" class="form-control input-md" placeholder="Enter Email Address" name="e_address" required/>
          </div>

          <div class="form-group">
            <label style="float: left">Gender:&nbsp</label>
            <select name="gender" style="float: left" disabled>
              <option value="gender" name="gender" required=""><?php echo $detail->gender;?></option>
              <option value="Female" name="gender" required="">Female</option>
            </select>
          </div>

          <div class="form-group"><br><br>
            <label style="float: left">Contact:</label>
            <input type="text" value="<?php echo $detail->contact;?>" class="form-control input-md" placeholder="Enter Contact" name="contact" required/>
          </div>

          <label style="float: left">Birthday:</label></font>
          <div class="form-group">
            <input type="date" value="<?php echo $detail->bday;?>" class="form-control input-md" placeholder="Enter Birthday" name="bday" required/>
          </div>

          <div class="form-group">
            <input id="myModal" type="submit" class="btn btn-block btn-md btn-primary" value="Edit Profile"/>
          </div>
        </form>
      </div>
      <?php }?>
    </div>
  </div>
</div>

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
          <center>
            <a href="logout" class="btn btn-primary">Yes</a></button>
            <a class="btn btn-primary" data-dismiss="modal">No</a></button>
          </center>
        </div>
      </div>
    </div>
  </div>  

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>