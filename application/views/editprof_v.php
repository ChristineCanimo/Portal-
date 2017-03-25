<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home | Edit</title>
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
    width: 400px;
    margin-left: 420px;
    margin-top: 350px;
}
.modal-dialog3 {
    width: 500px;
    height: 100%;
    margin-left: 404px;
    margin-top: 180px;
}
.modal4 {
    width: 420px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
}
img
{
  width: 65px;
  height: 65px;
  border-radius: 20%;
  vertical-align:baseline;
}
textarea {
    resize: none;
}
@media (min-width: 768px)
{header {
  margin-top: 70px;
  box-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  height:   400px;
  position: relative;
  width:auto;
}}
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
              <li class="active"><a href="index"><i class="fa fa-user"> PROFILE</a></i></li>
              <li><a href="#"><i class="fa fa-globe"> NOTIFICATIONS</a></i></li>
              <li><a href="aboutie"><i class="fa fa-exclamation-circle"> ABOUT</a></i></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <p><li><a bgcolor="black" href="accsetting">Edit Profile</a></li></p>
                    <li><a bgcolor="black" href="#" class="button" data-toggle="modal" data-target="#myModal">Logout</a></li>
            </ul>
          </div>
          </div>
        </div>
      </nav>


<header>
  <figure class="profile-banner">
    <div id="rcorners1">
    <div class="row">
                <div class="col-lg-10">
                <div class="cover">
                      <?php foreach($details as $detail){?>
                       <img src="<?php echo base_url();?>images/usercover<?php echo $detail->idnumber;?>_.jpg" class="img-responsive1" alt=""></button>
                        <?php }?>
                      </div>
                    </div>
                </div>
                </div>
  </figure>
  <?php foreach($details as $detail){?>
  <figure class="profile-picture" 
    style="background-image: url('<?php echo base_url();?>images/user<?php echo $detail->idnumber;?>_.jpg')">
    <?php }?>
  </figure>
  <div class="profile-stats">
    <ul>
      <li><?php foreach($posts as $post){?><?php echo $post->no_of_status." ";?><span>Posts</span><?php }?></li>
      <li>1,354 <span>Groups</span></li>
      <li>32    <span>Friends</span></li>
      <li>324   <span>Files</span></li>
    </ul>
  </div>


</header>
<div class="info">
<div class="col-2 menu">
  <?php echo form_open_multipart('index.php/home/upload');?>
  <?php foreach($details as $detail){?>
    <input type = "hidden" name = "dp" value = "user#<?php echo $detail->idnumber." ";?>" >
    <imput type = "hidden" name="fileformat">
    <input type="file" name="userfile" size="25" />
    <input type="submit" value="Upload Profile Picture" />
  <?php }?>
  </form>
  <ul>
    <?php foreach($details as $detail){?>
    <li><input type="text" value="<?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?>"  style="background-color: #272020;width: 225px;">
    <li><input type="text" value="<?php echo $detail->gender." ";?>"  style="background-color: #272020;width: 225px;">
    </li>
    <li><input type="text" value="<?php echo $detail->bday." ";?>" style="background-color: #272020;width: 225px;">
    </li>
    <li><input type="text" value="<?php echo $detail->address." ";?>" style="background-color: #272020;width: 225px;">
    </li>
    <?php }?></li>
  </ul>
  <div class="reply">
 <a style="text-align: center; float:right;margin-right: 70px; margin-top: 20px" href="" disabled="" data-toggle="modal" data-target="#grouplist">Group List</a><br><br>
 <a style="text-align: center; float:right; margin-right: 50px;margin-top: 20px" href=""  data-toggle="modal" data-target="#creategroup" disabled="">CREATE GROUP</a>
</div>
</div>
 
 <div class="col-8 nav2">
  <ul>
    <li><a href="files">Files</a></li>
    <li><a href="members">Members</a></li>
    <li style="float:right"><a href="edit">Edit Profile</a></li>
  </ul>
</div>

<div class="col-6 dashboard">
<div class="col-5 status">
  <h2><font color="black">Status</h2>
  <form action="status" method="POST">  
  <input value="" type="hidden" name="stat_id">
  <input type="hidden" name="idnumber" value ="<?php echo $this->session->userdata('idnumber'); ?>">
  <input type="hidden" name="post_date" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d"); ?>">
  <input type="hidden" name="post_time" value="<?php echo date("h:i:sa"); ?>">
  
  <textarea placeholder="onclick-active (addmembers) editprofile upload dp&cp SEARCH" cols="59" rows="5" name="text" required="" disabled=""></textarea>
<div class="reply">
 <input type="submit" disabled="" value="POST<3"></button>
 </div>
</div>
</form>

<?php foreach($status as $status){?>
<div class="col-5 status" >
<table>
<tr><td>
<?php foreach($details as $detail){?>
<img src="<?php echo base_url();?>images/user<?php echo $detail->idnumber;?>_.jpg"></td><td>
<h3>&nbsp;&nbsp;&nbsp;
<?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?></h3>
<?php }?>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $status->post_date." ";?> <?php echo $status->post_time." ";?></h5>
</td></tr></table>
<br>
<?php echo $status->text." ";?>
<hr color="black">
HAHHAHAHHAHHA
</div>
<?php }?>
</div>

<div class="col-3 rightside">
<br>
<P>Events</P>
<div class="col-2 events">
<?php foreach($events as $event){?>
<h3><?php echo $event->group_name." ";?></h3>
<h4><?php echo $event->event_place." ";?>
<br><?php echo $event->event_date." ";?>
<br><?php echo $event->event_creator." ";?></h4>
<?php }?>
<div class="reply">
<a href="" style="float: right;" disabled="">Attend Event</h4></a>
</div>
</div>
<div class="col-2 events">
 <h3>Groupmoto#2</h3>
<h4>EB sa MOA<br>MArch 3, 2017<br>Acoe Si EventLeader#2</h4>
<div class="reply">
<a href="" style="float: right;" disabled="">Attend Event</h4></a>
</div>
</div>
</div>

<div class="col-3 rightside">
<P><font color="darkgray">Anything2</p></font>
<h6>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
  Resize the browser window to see how the content respond to the resizing.</p>
Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
 Resize the browser window to see how the content respond to the resizing.</p>
Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.
  Resize the browser window to see how the content respond to the resizing.</p></h6>
</div>
</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="grouplist" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="modal-title">Group Lists</h3></center>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <label>Group 1</label>
            <a href="" style="float: right;">Leave</a><a href="groups" style="float: right;">View</a>
          </div>

          <div class="form-group">
            <label>Group2</label>
            <a href="" style="float: right;">Leave</a><a href="groups" style="float: right;">View</a>
          </div>

          <div class="form-group">
            <label>Group3</label>
            <a href="" style="float: right;">Leave</a><a href="groups" style="float: right;">View</a>
          </div>

          <div class="modal-footer">
            <center><a href="" data-dismiss="modal" class="btn btn-default">close</a></button></center>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="creategroup" role="dialog">
    <div class="modal-dialog3">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="modal-title">Create Group</h3></center>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <font color="black">
            <form action="" method="POST">  
            <input type="hidden" value="" name="group_id">
            <input type="hidden" value="" name="group_creator">
            <label>Group Name:</label>
            <input type="text" name="group_name" class="form-control input-md" placeholder="">
          </div>

          <div class="form-group">
          <h3>
            <a style="text-align: center; float:left;" href=""  data-toggle="modal" data-target="#addmember">Add Members:</a><br>
                <p>si ano<br>
              si hahahaha<br>
              si ano uli<br>
              si hehehehe<br>
              enebe <br>
              harharharh<br>
              </p>
            <br>
            </h3>
          </div>
            <div class="modal" id="addmember">
            <div class="modal-dialog2 modal4">

             <!-- Modal content-->
              <div class="modal-content" style="padding: 20px;">
              <center><h6 class="modal-title">Add Members</h6></center>
              
            <div class="modal-body">
              <p>si ano<br>
              si hahahaha<br>
              si ano uli<br>
              si hehehehe<br>
              enebe <br>
              harharharh<br>
              </p></center>
            </div>
          <center>
          <a class="btn btn-primary" data-dismiss="modal">Done</a></button>
          </center>
          </div>
          </div>
          </div>
            <center><a href="groups" class="btn btn-default">Create</a></button></center>
        </div>
      </div>
    </div>
  </div>
    


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog1">

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