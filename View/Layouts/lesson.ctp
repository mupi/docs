<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width">

    <!-- !!! Titulo da página -->
    <title>mupi: O que significa HTML, principais termos; o que há de novo no HTML5</title>

    <!-- Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <?php echo $this->Html->css('font-awesome.min.css'); ?>
    <!--[if lt IE 8]>
      <?php echo $this->Html->css('font-awesome-ie7.min.css'); ?>
      <link rel="stylesheet" type="text/css" href="">
    <![endif]-->
    

    <?php
      // Bootstrap
      echo $this->Html->css('bootstrap.min.css');
      
      echo $this->Html->css('wizard.css');
      // echo $this->Html->css('jquery.mCustomScrollbar.css');
      echo $this->Html->css('toggle-switch.css');
      echo $this->Html->css('lesson.css');
      echo $this->Html->css('old_prettify.css');

      echo $this->fetch('css');

      echo $this->Html->css('bootstrap-responsive.min.css');
    ?>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <?php echo $this->Html->script('http://html5shim.googlecode.com/svn/trunk/html5.js'); ?>
    <![endif]-->

    <!-- !!! Fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body>
    <!-- !!! Navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
                <?php
                    echo $this->Html->link(
                        '',
                        array(
                            'controller' => '',
                            'action'  => 'index'
                        ),
                        array(
                            'class' => 'logo'
                        )
                    );
                ?>
        </div><!-- /.container -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
    
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>

    <!-- The scripts in the end of the page, so the page loads faster -->
    <?php
      // jQuery
      echo $this->Html->script('jquery-2.0.0.min.js');

      // Bootstrap
      echo $this->Html->script('bootstrap.min.js');

      echo $this->Html->script('prettify/prettify.js');
      // echo $this->Html->script('jquery.mCustomScrollbar.concat.min.js');

      // Our js
      echo $this->Html->script('escola.main.js');
      echo $this->Html->script('wizard.js');
    
      echo $this->fetch('script');
    ?>

    <script type="text/javascript"
            src="//releases.flowplayer.org/5.4.3/flowplayer.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
          href="//releases.flowplayer.org/5.4.3/skin/minimalist.css">
    

  </body>
</html>
