<?php
 require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
  $wnm->RedirectToURL("login.php");
}

echo $wnm->Username();

?>


<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Walchand Network">
  <meta name="author" content="Harshal Khairnar">
  <title>Walchand Network</title>
  <link href="css/vendor/all.css" rel="stylesheet">
  <link href="css/app/app.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body onload="getTimeline()">

  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
          <a class="navbar-brand" href="index.php">Walchand Network</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav navbar-right">
            <!-- User -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> <?php echo $wnm->UserFName(); ?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#profile" onclick="getProfile()"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#messages" onclick="getMessages()"><i class="fa fa-envelope"></i> Messages</a></li>
                <li><a href="login.php?logout=true"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu">
      <div data-scrollable>
        <div class="sidebar-block">
          <div class="profile">
            <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle" />
            <h4><?php echo $wnm->UserPRN(); ?></h4>
          </div>
        </div>
        <div class="category">About</div>
        <div class="sidebar-block">
          <ul class="list-about">
            <li><i class="fa fa-map-marker"></i> <?php echo $wnm->UserCity(); ?></li>
            <li><i class="fa fa-link"></i> <a href="#">www.mosaicpro.biz</a></li>
            <li><i class="fa fa-twitter"></i> <a href="#">/mosaicprobiz</a></li>
          </ul>
        </div>
        <div class="category">Photos</div>
        <div class="sidebar-block">
          <div class="sidebar-photos">
            <ul>
              <li>
                <a href="#">
                  <img src="images/place1.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/place2.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/place3.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/food1.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/food1.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/place3.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/place2.jpg" alt="people" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="images/place1.jpg" alt="people" />
                </a>
              </li>
            </ul>
            <a href="#" class="btn btn-primary btn-xs">view all</a>
          </div>
        </div>
      </div>
    </div>

    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="fa fa-ellipsis-h"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="subnav">
                <ul class="nav navbar-nav ">
                  <li class="active"><a href="#timeline" onclick="getTimeline()"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a></li>
                  <li><a href="#about" onclick="getAbout()"><i class="fa fa-fw icon-user-1"></i> About</a></li>
                  <li><a href="#friends" onclick="getFriends()"><i class="fa fa-fw fa-users"></i> Friends</a></li>
                  <li><a href="#ads" onclick="getAds()"><i class="fa fa-fw fa-bullhorn"></i> Ads</a></li>
                </ul>
                <ul class="nav navbar-nav hidden-xs navbar-right ">
                  <li><a href="#messages" onclick="getMessages()">Chat <i class="fa fa-fw fa-comment-o"></i></a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>

          </nav>
          <div id="responseDiv"></div>
        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
      <strong>Walchand Network</strong> v1.0.0 &copy; Copyright 2016 <a href="cbainc.in">CBA Solutions</a>
    </footer>
    <!-- // Footer -->

  </div>
  <!-- /st-container -->

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "social-2",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        },
        "orange": {
          "primary-color": "#e74c3c"
        },
        "blue": {
          "primary-color": "#4687ce"
        },
        "purple": {
          "primary-color": "#af86b9"
        },
        "brown": {
          "primary-color": "#c3a961"
        },
        "default-nav-inverse": {
          "color-block": "#242424"
        }
      }
    };
  </script>
  <script src="js/vendor/all.js"></script>
  <script src="js/app/app.js"></script>
<script>
function getTimeline() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","timeline.php",true);
  xmlhttp.send();
}
function getAbout() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","about.php",true);
  xmlhttp.send();
}
function getFriends() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","friends.php",true);
  xmlhttp.send();
}
function getMessages() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","message.php",true);
  xmlhttp.send();
}
function getProfile() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","profile.php",true);
  xmlhttp.send();
}
function getAds() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","ads.php",true);
  xmlhttp.send();
}
function editAbout() {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("aboutDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","editAbout.php",true);
  xmlhttp.send();
}

function saveAbout() {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("responseDiv").innerHTML=xmlhttp.responseText;
    }
  }
    
    
    var dob=document.getElementById('dob').value;
var gender=document.getElementById('gender').value;
var city=document.getElementById('city').value;
var hometown=document.getElementById('hometown').value;
var dept=document.getElementById('dept').value;
var batchfrom=document.getElementById('batchfrom').value;
var batchto=document.getElementById('batch').value;
var email=document.getElementById('email').value;
var contact=document.getElementById('contact').value;
var year=document.getElementById('year').value;
  var query="?dob="+dob;
  query+="&gender="+gender+"&city="+city+"&hometown="+hometown+"&dept="+dept+"&batchfrom="+batchfrom+"&batchto="+batchto+"&email="+email+"&contact="+contact+"&year="+year;

  //ajaxRequest.open("GET","update_profile.php"+query,true);
  //ajaxRequest.send(null);
  xmlhttp.open("GET","update_profile.php"+query,true);
  xmlhttp.send();

 }


</script>
</body>
</html>