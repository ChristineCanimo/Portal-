<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php foreach($names as $name){?>
  <title><?php echo $name->group_name." ";?> </title>
  <?php }?>
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
    <link href="<?php echo base_url()?>css/notification.css" rel="stylesheet">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<script> 
$(document).ready(function(){
    $("#taas").click(function(){
        $("#baba").slideToggle("slow");
    });
});
</script>
  </head>
  <style> 
#rcorners1 {
    background-color: gray;
    width: 1340px;
    height: 400px;
    float: right;  
    border-radius: 0%;
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
.modal-dialog3 {
    width: 500px;
    height: 100%;
    margin-left: 404px;
    margin-top: 130px;
}
img
{
  width: 65px;
  height: 65px;
  vertical-align:baseline;
}
textarea {
    resize: none;
}
#panel, #flip {
    padding: 5px;
    background-color: #fcf8e3;
    border: solid 1px #c3c3c3;
    width: 267px;
}

#panel {
    padding: 5px;
    display: none;
    overflow: auto;
    height: 200px;
}
#taas {
    padding: 5px;
    background-color: #fcf8e3;
    border: solid 1px #c3c3c3;
    width: 267px;
    width: 260px;
    padding-bottom: 20px;
}

.add {
    background: #e9ebee;
    border: 1px solid #9cb4d8;
    border-radius: 2px;
    color: #162643;
    cursor: default;
    display: block;
    float: left;
    height: 20px;
    margin: 0 4px 4px 0;
    padding: 0 3px;
    position: relative;
    white-space: nowrap;
}
.add .remove {
    left: 1px;
    margin: 0;
    outline: none;
    position: relative;
    top: 2px;
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
  <body style="background-color: #ece8ce">
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
          <a class="navbar-brand page-scroll" href="<?php echo base_url() ?>home/home"><b>StockOverflowing</b></a>
          <ul class="nav navbar-nav navbar-left">
          <form class="navbar-form" role="search" action="<?php echo base_url(); ?>home/search" method="post">
              <div class="input-group" style="width:230%">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
        </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?php foreach($cntnotifs as $cntnotif){?>
            (<font color="white"><b>*</b></font>)<i style="font-size:20px" class="fa fa-globe"></i><?php }?></a>
            <ul class="dropdown-menu notify-drop">
              <div class="notify-drop-title">
                <div class="row">
                <?php foreach($countnotifs as $count){?>
                  <div class="col-md-6 col-sm-6 col-xs-6">Notifications (<b>*</b>)</div>
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
              <li><a href="<?php echo base_url() ?>home/index"><i class="fa fa-user"> PROFILE</a></i></li>
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

  <div class="profile-stats">
    <ul>
    
      <li><?php foreach($names as $name){?><?php echo $name->no_members." ";?><span>Members</span><?php }?></li>
      <li><?php foreach($countfiles as $countfile){?><?php echo $countfile->countfile." ";?><?php }?> <span>Files</span></li>
      <li><?php foreach($eventnumbers as $eventnumber){?><?php echo $eventnumber->no_events." ";?><span>Events/Schedules</span><?php }?></li>
      <li>324   <span>blabla</span></li>
      
    </ul>
    <a href="" data-toggle="modal" data-target="#myModal1" class="status">Leave Group</a>
  </div><br>
  <?php foreach($names as $name){?>
  <h2><a style="color:#26225a" href="<?php echo base_url();?>index.php/home/group/<?php echo $grp_id =  $name->group_id." " ;?>"><?php echo $name->group_name." ";?></a> </h2>
  <?php }?>
</header>
<div class="info">
<div class="col-2 menu">
  <ul>
    <?php foreach($details as $detail){?>
    <li>
    <?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?>
    <li>
    <?php echo $detail->gender." ";?>
    </li>
    <li>
    <?php echo $detail->bday." ";?>
    </li>
    <li>
    <?php echo $detail->address." ";?>
    </li>
    <?php }?></li>
  </ul>
<br>
  <div id="flip" style="cursor: pointer;"><center><h2>Group List</h2></center></div>
    <div id="panel" class="menu form-control input-md">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search group.." title="Type in a name">
<br><br>
        <table id="myTable" style="width: 250px;">
        <?php foreach($groups as $group){?>
          <tr style="padding: 10px"><td>
            <label><a style="color: black;" href="<?php echo base_url() ?>home/group/<?php echo $grp_id =  $group->group_id." " ;?>"><?php echo $group->group_name." ";?></a></label>
            </td>
            </tr>
            <?php }?>
            </table>
    </div>
      </form>
  
</div>
 <div class="col-8 nav2">
  <ul>
    <li><a href="<?php echo base_url() ?>home/files/<?php echo $grp_id =  $name->group_id." " ;?>">Files</a></li>
    <li><a href="<?php echo base_url() ?>home/members/<?php echo $grp_id =  $name->group_id." " ;?>">Members</a></li>
    <li style="float:right"><a href="edit">Edit Profile</a></li>
  </ul>
</div>

<div class="col-6 dashboard" style="height: 400px; overflow: auto">
<p>Files</p>
<form action="<?php echo base_url() ?>home/upload_file/<?php echo $grp_id =  $name->group_id." " ;?>" method="POST" enctype="multipart/form-data" >
    Select File To Upload:<br />
    <table><tr><td>
    <font color="black"><input type="file" name="userfile" />
    </font></td><td>
    <input type="submit" name="submit" value="Upload" class="btn btn-success" />
    </td></tr></table>
</form>

<ol>
<?php foreach($getfiles as $getfile){?>
<h4>
<font color="black"><table style="width: 400px;"><tr>
<td>
<?php echo $getfile->document_name;?></td> <td style="color: green;float: right"> by:<?php echo $getfile->fname;?><?php echo $getfile->lname;?> <tr><td><td style="color: green;float: right"> <?php echo $getfile->date_uploaded;?></td></tr></td></tr></table></font>

    <a style ="float: right; color: red;" href="<?php echo base_url() ?>home/download/'.$row['file'];" class="dwn"> Download </a>

</h4>
<?php }?>

</ol>

</div>


<div class="col-3">
<div class="col-3 rightside">
<font color="black">
<p style="float: right"><a href="#" class="button" data-toggle="modal" data-target="#event">Create Event</a></p>
<br><br>
<div class="form-group">
            <font color="black"><?php foreach($names as $name){?>
            <form action="<?php echo base_url() ?>home/addmem/<?php echo $grp_id =  $name->group_id." " ;?>" method="POST"><?php }?>
            
          <div class="form-group" style="margin-bottom: 0px;">
          <div id="taas"><h3>Add Members</h3><br>
          <input type= text name="name" placeholder="" style="width: 200px;">
          <?php foreach($members as $member){?>
          <input type="hidden" name="member_id" value ="" />
          <input type="hidden" name="idnumber" value =""/><?php }?>
            <?php foreach($names as $name){?>
          <input type="hidden" value="<?php echo $name->group_id;?>" name="group_id"/>
              <?php }?>
               <br><br>
            <input type="submit" class="btn btn-primary" value="Add">
          </div> 
            </form>
        </div>
</div>
</div>
<div class="col-3 rightside">

<br>
<P>Events</P>
<?php foreach($events as $event){?>
<div class="col-2 events">
<h4><b>Event Name:</b><?php echo $event->event_name." ";?>
<br><b>Event Place:</b><?php echo $event->event_place." ";?>
<br><b>Date:</b><?php echo $event->event_date." ";?>
<br><b>Event Creator:</b><?php echo $event->event_creator." ";?></h4>
</div>
<?php }?>
</div>
</div>
<!-- Modal -->
  <div class="modal fade" id="addmem" role="dialog">
    <div class="modal-dialog3">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          
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
          <h4 class="modal-title">Leave Group Confirmation</h4>
        </div>
        <div class="modal-body">
         <p>Are you sure you want to leave this group?</p>
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url();?>index.php/home/leavegrp/<?php echo $grp_id =  $name->group_id." " ;?>" class="btn btn-primary">Yes</a></button>
          <a class="btn btn-primary" data-dismiss="modal">No</a></button>
        </div>
      </div>
    </div>
  </div>

 <!-- Modal -->
  <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog1">

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
            <a href="<?php echo base_url();?>index.php/home/logout" class="btn btn-primary">Yes</a></button>
            <a class="btn btn-primary" data-dismiss="modal">No</a></button>
          </Center>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="event" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="modal-title">Create Event</h3></center>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <font color="black">
            <form action="<?php echo base_url();?>index.php/home/create_event/<?php echo $grp_id =  $name->group_id." " ;?>" method="POST">
            <input type="hidden" value="<?php echo $this->session->userdata('idnumber'); ?>" name="idnumber">  
            <input type="hidden" value="" name="event_id">
            <?php foreach($details as $detail){?>
            <input type="hidden" value="<?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?>" name="event_creator"><?php }?>
            <?php foreach($names as $name){?>
            <input type="hidden" value="<?php echo $name->group_name;?>" name="group_name">
            <input type="hidden" name="member_id" value="<?php echo $name->member_id;?>">  
            <input type="hidden" value="<?php echo $name->group_id;?>" name="group_id"><?php }?>
            <label>Event Name:</label>
            <input type="text" name="event_name" class="form-control input-md" placeholder="Name of Event">
          </div>

          <div class="form-group">
            <label>Event Place:</label>
            <input  type="text" name="event_place" class="form-control input-md" placeholder="Venue of the Event">
          </div>

          <div class="form-group">
            <label>Event Date:</label>
            <input type="date" name="event_date" class="form-control input-md" min="2017-03-25" placeholder="Date of event">
          </div>

          <div class="modal-footer">
            <center><input type="submit" class="btn btn-default" value="CREATE"></center>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src="js/index.js"></script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>