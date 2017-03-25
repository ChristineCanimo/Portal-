<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
    <?php foreach($details as $detail){?>
    <?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?><?php }?></title>
    <?php echo smiley_js(); ?>
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
    <link href="<?php echo base_url()?>css/tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/profile.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/notification.css" rel="stylesheet">
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
    $("label").click(function(){
        $("p").toggle();
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
    margin-top: 130px;
}
.modal-dialog3 {
    width: 500px;
    height: 100%;
    margin-left: 404px;
    margin-top: 130px;
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
.panelcomment, #comment {
    background-color: #fcf8e3;
    width: 440px;
}

.panelcomment {
    padding: 3px;
    display: none;
    /* overflow: auto; */
    height: 100%;
    border: 1px #000;
    box-shadow: none;

}

#panelsmiley {
    padding: 3px;
    display: none;
    width:100px;
    height: 100%;
    border: 1px #000;
    box-shadow: none;
    float: right;
    margin-right: 60px;
    margin-top: 5px;

}
figure.dp {
    background-position: center center;
    background-size: cover;
    /* border: 5px #efefef solid; */
    border-radius: 20%;
    /* bottom: -50px; */
    /* box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2), 1px 1px 4px rgba(0,0,0,0.3); */
    height: 60px;
    left: 150px;
    /* position: absolute; */
    width: 60px;
}
.fontRed{
  color: red;
}
.fontBlack{
  color: black;
}
img
{
  width: 19px;
  height: 19px;
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

          <a class="navbar-brand page-scroll" href="home"><b>StockOverflowing</b></a>
          <ul class="nav navbar-nav navbar-left">
            <form class="navbar-form" role="search" action="<?php echo base_url(); ?>home/search" method="post">
              <div class="input-group" style="width:250%">
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
                      <div class="col-md-6 col-sm-6 col-xs-6">Notifications (<b>*</b>)</div>
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
              <li><a href="home"><i class="fa fa-home"> HOME</a></i></li>
              <li class="active"><a href="index"><i class="fa fa-user"> PROFILE</i></a></li>
              <li><a href="aboutie"><i class="fa fa-exclamation-circle"> ABOUT</i></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <p><li><a href="accsetting"><i class="fa fa-cog"> Edit Profile</i></a></li></p>
                  <li><a href="#" class="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-out"> Logout</i></a></li>
                </ul>
              </li>
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
      <li><?php foreach($grpnumbers as $grpnumber){?><?php echo $grpnumber->no_groups." ";?> <span>Groups</span><?php }?></li>
    </ul>
  </div>
</header>

<div class="container">
  <center>
    <?php echo form_open_multipart('home/uploadcover');?>
  <?php foreach($details as $detail){?>
    <input type = "hidden" name = "cp" value = "usercover#<?php echo $detail->idnumber." ";?>" >
    <input type = "hidden" name="fileformat">
    <input type="file" class="btn btn-primary btn-md" name="userfile" size="25" />
    <input type="submit" class="btn btn-primary btn-md"  value="Upload Cover Photo" />
  <?php }?>
  </center>
</div>

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
            <label><a style="color: black;" href="group/<?php echo $grp_id =  $group->group_id." " ;?>"><?php echo $group->group_name." ";?></a></label>
            </td>
            </tr>
            <?php }?>
            </table>
    </div>
      </form>
  <div class="reply">
    <a style="text-align: center;float:right;margin-right: 60px;margin-top: 20px;width: 150px;height: 50px;" href=""  data-toggle="modal" data-target="#creategroup"><h3 style="
    margin-top: 7px;">CREATE GROUP</h3></a>
  </div>
</div>
 
 <div class="col-8 nav2">
  <ul>
    <li><?php foreach($details as $detail){?><a href="profile/<?php echo $userid =  $detail->idnumber." " ;?>"><?php }?>Status</a></li>
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
  
  <textarea placeholder="Well, say something!" id="status" cols="63" rows="5" name="text"></textarea>
  <div class="reply" style="padding-top: 10px;">
    <input type="submit" value="POST" style=" float: right; margin-right: 10px;">
    <a data-toggle="collapse" data-parent="#accordion" href="#smiley" style="float: right; margin-right: 10px">
    <img src="<?php echo base_url();?>images/smileys/emoticon.png" style=" float: right; width: 20px;height: 20px;vertical-align: text-bottom;"></a>
    <div id="smiley" class="collapse" style="float: left; padding-top: 5px;">
      <?php echo $smiley_table1; ?></div>
    </div>
  </div>
  </form>

<?php foreach($searchstatus as $searchstatus){?>
<div class="col-5 status" >
<table>
<tr><td>
<?php foreach($details as $detail){?>
<a href ="profile/<?php echo $userid =  $searchstatus->poster_id." " ;?>">
<figure class="dp" 
    style="background-image: url('<?php echo base_url();?>images/user<?php echo $searchstatus->poster_id;?>_.jpg')">
  </figure></td><td>
<h3>&nbsp;&nbsp;&nbsp;<a href ="profile/<?php echo $userid =  $searchstatus->poster_id." " ;?>">
<?php echo $searchstatus->fname." ";?><?php echo $searchstatus->mname." ";?><?php echo $searchstatus->lname." ";?></h3>
<?php }?>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $searchstatus->post_date." ";?> <?php echo $searchstatus->post_time." ";?></h5>
</td></tr></table>
<br><h4>
<?php echo $searchstatus->text." ";?></h4>
<hr style="margin-bottom: 5px;border-top: #000 1px solid;">
<div class="container">
<a data-toggle="collapse" data-parent="#accordion" href="#/<?php echo $comment =  $searchstatus->exstat_id." " ;?>" data-target="#comment<?php echo $searchstatus->exstat_id;?>"><i class="fa fa-comments-o" style="font-size:15px;color:red;cursor: pointer;"> Comments</i></a>
</div>
<div id="comment<?php echo $searchstatus->exstat_id;?>" class="panel-collapse collapse">
    <hr style="margin-bottom: 10px;margin-top: 5px;border-top: #000 1px solid;">
    <?php foreach($users as $user){?>
    <form action="<?php echo base_url() ?>index.php/home/commentprofile/<?php echo $userid =  $user->idnumber." " ;?>" method="POST" name="formcomment"><?php }?>
    <?php foreach($origs as $orig){?>
    <strong><?php echo $orig->fname." ";?> <?php }?></strong>
    <input type="hidden" name="usercomment_id" value="">
    <input type="hidden" name="idnumber" value="<?php echo $this->session->userdata('idnumber'); ?>">
    <input type="hidden" name="status_id" value="<?php echo $searchstatus->exstat_id;?>">
    <input type="hidden" name="comment_date" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d"); ?>">
    <input type="hidden" name="comment_time" value="<?php echo date("h:i:sa"); ?>">

    <input type="text" id="comments<?php echo $searchstatus->exstat_id;?>" name="comments" placeholder="Write a comment" style="width: 250px">
    <a data-toggle="collapse" data-parent="#accordion" href="#smiley<?php echo $searchstatus->exstat_id;?>">
    <img src="<?php echo base_url();?>images/smileys/emoticon.png" style=" width: 20px;height: 20px;vertical-align: text-bottom;"></a>
    <input type="submit" style="position: absolute; left: -9999px">
    <div id="smiley<?php echo $searchstatus->exstat_id;?>" class="collapse" style="float: right;padding-top: 5px;">
      <?php echo $smiley_tables; ?></div>
      </form>
    <hr style="margin-bottom: 10px;margin-top: 10px;">

    <?php foreach($comments as $comment){?>
        <?php $a = $searchstatus->exstat_id; $b = $comment->status_id; if($a==$b) { ?>
    <table width="430px">
    <tr><td style="padding-right: 5px;" width="40px">
    <img src="<?php echo base_url();?>images/user<?php echo $comment->idnumber;?>_.jpg" class="img-responsive1" alt="" style="width: 40px;height: 40px;"></td>
    <td>
        <font color="#756220"><strong>
    <?php $a = $searchstatus->exstat_id; $b = $comment->status_id; if($a==$b) { echo $comment->fname." ";?><?php echo $comment->lname." ";}?></strong></font>
    <?php $a = $searchstatus->exstat_id; $b = $comment->status_id; if($a==$b) { echo $comment->comments." ";}?>
        <h6 style="float: right;margin: 0px;margin-right: 12px; font-size: 13px;">
    <?php $a = $searchstatus->exstat_id; $b = $comment->status_id; if($a==$b) { echo $comment->comment_date." ";?>| <?php echo $comment->comment_time." ";}?></h6> </td></tr></table> 
    
        <hr style="margin-bottom: 5px;margin-top: 5px;">  
    <?php } ?>
    <?php }?>
    </div>
</div>
<?php }?>


<?php foreach($status as $status){?>
<div class="col-5 status" >
<table>
<tr><td>
<?php foreach($details as $detail){?>
<figure class="dp" 
    style="background-image: url('<?php echo base_url();?>images/user<?php echo $detail->idnumber;?>_.jpg')">
  </figure></td><td>
<h3>&nbsp;&nbsp;&nbsp;
<?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?></h3>
<?php }?>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $status->post_date." ";?> <?php echo $status->post_time." ";?></h5>
</td></tr></table>
<br><h4>
<?php echo $status->text." ";?></h4>
<hr style="margin-bottom: 5px;border-top: #000 1px solid;">
<div class="container">
<a data-toggle="collapse" data-parent="#accordion" href="#/<?php echo $comment =  $status->stat_id." " ;?>" data-target="#comment<?php echo $status->stat_id;?>"><i class="fa fa-comments-o" style="font-size:15px;color:red;cursor: pointer;"> Comments</i></a>
</div>
<div id="comment<?php echo $status->stat_id;?>" class="panel-collapse collapse">
    <hr style="margin-bottom: 10px;margin-top: 5px;border-top: #000 1px solid;">

    <form action="<?php echo base_url() ?>index.php/home/commentprofile/<?php echo $userid =  $detail->idnumber." " ;?>" method="POST" name="formcomment">
    <strong><?php echo $detail->fname." ";?></strong>
    <input type="hidden" name="usercomment_id" value="">
    <input type="hidden" name="idnumber" value="<?php echo $this->session->userdata('idnumber'); ?>">
    <input type="hidden" name="status_id" value="<?php echo $status->stat_id;?>">
    <input type="hidden" name="comment_date" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d"); ?>">
    <input type="hidden" name="comment_time" value="<?php echo date("h:i:sa"); ?>">

    <input type="text" id="comments<?php echo $status->stat_id;?>" name="comments" placeholder="Write a comment" style="width: 250px">
    <a data-toggle="collapse" data-parent="#accordion" href="#smiley<?php echo $status->stat_id;?>">
    <img src="<?php echo base_url();?>images/smileys/emoticon.png" style=" width: 20px;height: 20px;vertical-align: text-bottom;"></a>
    <input type="submit" style="position: absolute; left: -9999px">
    <div id="smiley<?php echo $status->stat_id;?>" class="collapse" style="float: right;padding-top: 5px;">
      <?php echo $smiley_tables; ?></div>
      </form>
    <hr style="margin-bottom: 10px;margin-top: 10px;">

    <?php foreach($comments as $comment){?>
        <?php $a = $status->stat_id; $b = $comment->status_id; if($a==$b) { ?>
    <table width="430px">
    <tr><td style="padding-right: 5px;" width="40px">
    <img src="<?php echo base_url();?>images/user<?php echo $comment->idnumber;?>_.jpg" class="img-responsive1" alt="" style="width: 40px;height: 40px;"></td>
    <td>
        <font color="#756220"><strong>
    <?php $a = $status->stat_id; $b = $comment->status_id; if($a==$b) { echo $comment->fname." ";?><?php echo $comment->lname." ";}?></strong></font>
    <?php $a = $status->stat_id; $b = $comment->status_id; if($a==$b) { echo $comment->comments." ";}?>
        <h6 style="float: right;margin: 0px;margin-right: 12px; font-size: 13px;">
    <?php $a = $status->stat_id; $b = $comment->status_id; if($a==$b) { echo $comment->comment_date." ";?>| <?php echo $comment->comment_time." ";}?></h6> </td></tr></table> 
    
        <hr style="margin-bottom: 5px;margin-top: 5px;">  
    <?php } ?>
    <?php }?>
    </div>
</div>
<?php }?>
</div>

<div class="col-3 rightside">
<br>
<P>Events (<?php foreach($eventnumbers as $numevents){?> <?php echo $numevents->numevents." ";?> <?php }?>) </P>
<?php foreach($events as $event){?>
<?php foreach($details as $detail){?>
<div class="col-2 events">
<h2><a href = "group/<?php echo $grp_id =  $event->group_id." " ;?>" style="background-color: transparent;box-shadow: none;padding: 0px;"><?php echo $event->group_name." ";?> </a></h2>
<h4><b>Event Name:</b><?php echo $event->event_name." ";?>
<br><b>Event Place:</b><?php echo $event->event_place." ";?>
<br><b>Date:</b><?php echo $event->event_date." ";?>
<br><b>Event Creator:</b><?php echo $event->event_creator." ";?></h4>
            
</div>
<?php }?> 
<?php }?>

</div>
</div>
</div>

   <!-- Modal -->
  <div class="modal fade" id="creategroup" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="modal-title">Create Group</h3></center>
        </div>
        
        <div class="modal-body">
          <div class="form-group">
          <form action="creategroup" method="POST">
            <input type="hidden" value="" name="group_id">
            <?php foreach($details as $detail){?>
            <input type="hidden" value="<?php echo $detail->fname." ";?><?php echo $detail->mname." ";?><?php echo $detail->lname." ";?>" name="group_creator"><?php }?>
            <input type="hidden" name="idnumber" value ="<?php echo $this->session->userdata('idnumber'); ?>">
            <input type="hidden" name="date_created" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa"); ?>">
            <input type="hidden" name="no_members" class="form-control input-md" value="1">
            <label>Group Name:</label>
            <input type="text" name="group_name" class="form-control input-md" placeholder="">
                <br><br>
            <input type="submit" class="btn btn-primary" value="Create"> 
            </form>
          </div>
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
        <div class="modal-footer"><?php foreach($groups as $group){?>
          <a href="<?php echo base_url();?>index.php/home/leave/<?php echo $grp_id =  $group->group_id." " ;?>" class="btn btn-primary">Yes</a></button> <?php }?>
          <a class="btn btn-primary" data-dismiss="modal">No</a></button>
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