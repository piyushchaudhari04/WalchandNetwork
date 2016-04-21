<?PHP
require_once("./include/membership_config.php");

if(isset($_POST['submitted']))
{
   if($wnm->Login())
   {
        $wnm->RedirectToURL("index.php");
   }
}
if(isset($_GET['logout']))
{
    if($_GET['logout'] == "true")
    {
      $wnm->LogOut();
    }
}
if($wnm->CheckLogin())
   {
        $wnm->RedirectToURL("about.php");
   }
?>
<!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Walchand Network">
  <meta name="author" content="Harshal Khairnar">
  <title>Login | Walchand Network</title>
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

<body class="login">

  <div id="content">
    <div class="container-fluid">

      <div class="lock-container">
        <h1>Walchand Network Login</h1>
        <div class="panel panel-default text-center">
          <img src="images/logo.jpg" class="img-circle">
          <div class="panel-body">
            <form id='login' action='<?php echo $wnm->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
            <input type='hidden' name='submitted' id='submitted' value='1'/>         
            <?php if($wnm->GetErrorMessage() != ''){
              ?>
              <div class="row">
              <div class="col-sm-12">
              <div class="alert alert-danger alert-dismissable">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">x</button>

              <?php echo $wnm->GetErrorMessage(); ?>
                </div>
                </div>
                </div>
              <?php }  ?>
            <?PHP 
            if(isset($_GET['logout']))
              {
              if($_GET['logout'] == "true")
              {
              ?>
              <div class="row">
              <div class="col-sm-12">
              <div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">x</button>

              You Have Logged out Successfully!
                </div>
                </div>
                </div>
              <?php } }  ?>
            <input type='text' name='username' id='username' value='<?php echo $wnm->SafeDisplay('username') ?>' maxlength="50" class="form-control" placeholder="Username" />
            <input type='password' name='password' id='password' maxlength="50" placeholder="Password" class="form-control" />

            <input type="submit" class="btn btn-primary" value="Login" name="Submit" id="Submit" />
            </form>
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>
        </div>
      </div>

    </div>
  </div>

   <footer class="footer">
      <strong>Walchand Network</strong> v1.0.0 &copy; Copyright 2016 <a href="cbainc.in">CBA Solutions</a>
    </footer>
  <!-- // Footer -->
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
</body>
</html>