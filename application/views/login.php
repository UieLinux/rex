<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Un titolo originale: Registro elettronico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/bs/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/login_forms.css" rel="stylesheet">
    <style type="text/css">
      body {
         /*background: url(http://interfacelift.com/wallpaper/D47cd523/03148_officesatnight_1600x1200.jpg) no-repeat center center fixed; */
         /*background: url(/rex/assets/img/login_bg_1600x1200.jpg) no-repeat center center fixed;*/
         background: url(../assets/img/login_bg_1600x1200.jpg) no-repeat center center fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;

        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="../assets/bs/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../rex/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/bs/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/bs/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/bs/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/bs/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/bs/ico/favicon.png">
  </head>

  <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="../index.php">Registro Elettronico</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Utente: <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li><a href="#about">Info</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


















<div class="container-fluid">

<div id="body">
   
<div class="row-fluid">
<div class="span4"></div>
<div class="span4">

<!-- <?php echo form_open('admin'); ?> -->

<?php
   #$attributes = array('class' => 'form-horizontal'); 
   $attributes = array('class' => 'form-signin'); 
   echo form_open('auth', $attributes); 
?>
<h2 class="form-signin-heading">Please sign in</h2>
<p>
   <?php 
      //echo form_label('Email Address: ', 'email_address');
      echo form_input('email_address', set_value('email_address'), 'class="input-block-level" id="email_address" autofocus placeholder="nome utente"');
   ?>
</p>

<p>
   <?php 
      //echo form_label('Password:', 'password');
      echo form_password('password', '', 'class="input-block-level" id="password" placeholder="password"');
   ?>
</p>

<p>
   <?php echo form_submit('submit', 'Login', 'class="btn btn-large btn-primary"'); ?>
</p>
<?php echo form_close(); ?>



</div> <!-- span4 -->
<div class="span4"></div>
</div> <!-- row fluid -->

<div class="row-fluid">
   <div class="span2"></div>
   <div class="span8">
      <?php echo validation_errors('<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>'); ?>
   </div>
   <div class="span2"></div>
</div>

</div> <!-- body -->
</div> <!-- container -->

