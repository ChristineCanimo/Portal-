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
    width: 65px;
    height: left;  
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    margin-top: 100px;
    margin-left: 150px;
    padding: 20px; 
    width: 1000px;
    height: 460px;
   
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
                <button class="btn btn-default" type="submit" style="height: 34px;"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?php foreach($cntnotifs as $cntnotif){?>
            (<font color="white"><b><?php echo $cntnotif->countnotif;?></b></font>)<i style="font-size:20px" class="fa fa-globe"></i><?php }?></a>
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

              

              <?php foreach($notifgrpdetails as $notifgrpdetail){?>
                <?php if($notifgrpdetail->type=='grpcomment') { ?>

                <li>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <figure class="dp" 
                      style="background-image: url('<?php echo base_url();?>images/user<?php echo $notifgrpdetail->idnumber;?>_.jpg')">
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifgrpdetail->idnumber." " ;?>"><?php echo $notifgrpdetail->fname." ";?><?php echo $notifgrpdetail->lname." ";?></a>commented on the post in <?php foreach($getgrpcomments as $getgrpcomment){?><a href="<?php echo base_url();?>index.php/home/group/<?php echo $grp_id =  $getgrpcomment->group_id." " ;?>" style="color: red;text-transform: lowercase;"><?php $a = $notifgrpdetail->grpstat_id; $b = $getgrpcomment->grpstat_id; if($a==$b) { echo $getgrpcomment->group_name." ";?>.<?php } ?></a><?php } ?>
                  <a href="" class=""><i class="fa fa-settings"></i></a>
                    <hr>
                    <p class="time"><?php $time = new DateTime($notifgrpdetail->datetime);
                    $date = $time->format('n.j.Y');
                    $time2 = $time->format('H:i:s');
                    echo $date." | ".$time2;?></p>
                  </div>
                </li>
                <?php } ?>

                <?php if($notifgrpdetail->type=='grppost') { ?>

                <li>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <figure class="dp" 
                      style="background-image: url('<?php echo base_url();?>images/user<?php echo $notifgrpdetail->idnumber;?>_.jpg')">
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifgrpdetail->idnumber." " ;?>"><?php echo $notifgrpdetail->fname." ";?><?php echo $notifgrpdetail->lname." ";?></a>Posted on the group <?php foreach($get_grpposts as $get_grppost){?><a href="<?php echo base_url();?>index.php/home/group/<?php echo $grp_id =  $get_grppost->group_id." " ;?>" style="color: red;text-transform: lowercase;"><?php echo $get_grppost->group_name." ";?>.</a><?php } ?>
                  <a href="" class=""><i class="fa fa-settings"></i></a>
                    <hr>
                    <p class="time"><?php $time = new DateTime($notifgrpdetail->datetime);
                    $date = $time->format('n.j.Y');
                    $time2 = $time->format('H:i:s');
                    echo $date." | ".$time2;?></p>
                  </div>
                </li>
                <?php } ?>
                <?php } ?>

              <?php foreach($notifdetails as $notifdetail){?>
                <?php if($notifdetail->type=='comment') { ?>

                <li>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <figure class="dp" 
                      style="background-image: url('<?php echo base_url();?>images/user<?php echo $notifdetail->idnumber;?>_.jpg')">
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifdetail->idnumber." " ;?>"><?php echo $notifdetail->fname." ";?><?php echo $notifdetail->lname." ";?></a> commented on this<a href="<?php echo base_url();?>home/post_commented/<?php echo $notifdetail->stat_id." ";?>" style="color: red;text-transform: lowercase;"> post</a>
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
                    <figure class="dp" 
                      style="background-image: url('<?php echo base_url();?>images/user<?php echo $notifdetail->idnumber;?>_.jpg')">
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifdetail->idnumber." " ;?>"><?php echo $notifdetail->fname." ";?><?php echo $notifdetail->lname." ";?></a>Added you to a group <a href="<?php echo base_url();?>home/group/<?php echo $grp_id =  $notifdetail->group_id." " ;?>" style="color: red;text-transform: lowercase;">
                  <?php foreach($getgroups as $getgroup){?>
                  <?php $a = $notifdetail->group_id; $b = $getgroup->group_id; if($a==$b) { echo $getgroup->group_name." ";?>.<?php } ?><?php } ?></a>
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
                    <figure class="dp" 
                      style="background-image: url('<?php echo base_url();?>images/user<?php echo $notifdetail->idnumber;?>_.jpg')">
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="profile/<?php echo $userid =  $notifdetail->idnumber." " ;?>"><?php echo $notifdetail->fname." ";?><?php echo $notifdetail->lname." ";?></a>Posted on your <?php foreach($getposts as $getpost){?><a href="<?php echo base_url();?>home/profile/<?php echo $userid =  $getpost->to_whom." " ;?>" style="color: red;text-transform: lowercase;">wall.</a><?php } ?>
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
              
              <li><a href="<?php echo base_url() ?>home/home"><i class="fa fa-home"> HOME</a></i></li>
              <li class="active"><a href="<?php echo base_url() ?>home/index"><i class="fa fa-user"> PROFILE</a></i></li>
              <li><a href="<?php echo base_url() ?>home/aboutie"><i class="fa fa-exclamation-circle"> ABOUT</a></i></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a bgcolor="black" href="<?php echo base_url() ?>home/accsetting">Edit Profile</a></li></p>
                    <li><a bgcolor="black" href="#" class="button" data-toggle="modal" data-target="#myModal">Logout</a></li>
            </ul>
          </div>
          </div>
        </div>
      </nav>


 <div id="rcorners2">
 <center>
 <h1 style="font-size: 80px; line-height: 100px;">SUCCESSFULLY<br> EDITED!</h1><br><br><br>
 <h3><a href="index"><i class="fa fa-user-circle-o" style="font-size:26px"> Go back to Profile.</i></a></h3>
 </div>
     

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h6 class="modal-title">LOGOUT Confirmation</h6></center>
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

  
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src="js/index.js"></script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>