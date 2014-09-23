<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/theme.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->    
    <?php include_stylesheets() ?>
             <script src="/js/jquery-1.4.3.min.js"></script>
           <!--  <script src="js/bootstrap.min.js"></script> 
            <script src="js/docs.min.js"></script> -->
            <script src="/js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript" src="/js/medidor.js"></script>

    <?php include_javascripts() ?>
  </head>
  <body>
    
        <script type="text/javascript">
            $(document).ready(function() {
                $("#resultadoBtn").click(function(){
                  $("#resultado").css("visibility","visible");
                  Ping();
                  
                });

                

                /*$('#wl-bwt').wlBWt({
                    BinPath: 'data',
                    Theme: 'default'
                });*/
            });
        </script>
<body role="document">

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Aquí va cualquier vaina</a>
                </div>

            </div>
        </div>

        <div class="container theme-showcase" role="main">


              <?php echo $sf_content ?>

            </div>
            
        </div>

  </body>
</html>
