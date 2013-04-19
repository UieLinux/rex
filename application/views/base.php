<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registro elettronico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/rex/assets/bs/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
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
    <link href="/rex/assets/bs/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../rex/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/rex/assets/bs/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/rex/assets/bs/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/rex/assets/bs/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/rex/assets/bs/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/rex/assets/bs/ico/favicon.png">
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
          <a class="brand" href="/rex/index.php">Registro Elettronico</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Utente:  <a href="#" class="navbar-link"><?php echo $username; ?></a>
            </p>
            <ul class="nav">
              <li><a href="#about">Info</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


    <?php echo $content; ?>


  <br />
  <footer>
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="row-fluid">
                    <div class="span6 offset5">
                    <p><a href="http://www.uielinux.org/">&copy; UIELinux 2013</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-transition.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-alert.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-modal.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-dropdown.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-scrollspy.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-tab.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-tooltip.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-popover.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-button.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-collapse.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-carousel.js"></script>
    <script src="/rex/assets/bs/js/bootstrap-typeahead.js"></script>

  </body>
</html>