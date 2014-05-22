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
      
      // echo $this->Html->css('wizard.css');
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

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-35125468-1']);
      _gaq.push(['_setDomainName', 'mupi.me']);
      _gaq.push(['_trackPageview']);
      
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
    <div id="wrapper">
      <div class="navbar mupi-navbar navbar-fixed-top not_logged_header">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span2 participe visible-desktop">
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
            </div>
            <div class="tel span3">
                <?php
                    echo $this->Html->link(
                        '',
                        array(
                            'controller' => '',
                            'action'  => 'index'
                        ),
                        array(
                            'class' => 'logo-fluid hidden-desktop'
                        )
                    );
                ?>
              <div class="phone">
                <a href="tel:+551932893914">
                  <i class="icon-phone "></i> +55 (19)32893914
                </a>
              </div>
            </div>
            <div class="span6 offset1 menu visible-desktop info-menu">   
              <?php
                       echo $this->Html->link(
                         'Nossos parceiros', 
                         array(
                           'controller' => '', 
                           'action' => '#parceiros'), 
                         array(
                           'style' => 'border-right: 1px solid white;'));
              ?>
              <?php
                echo $this->Html->link(
                  'Quem Somos', 
                  array('controller' => '', 
                        'action' => '#sobre'), null);
              ?>
            </div>
          </div>
        </div>
      </div>
      
      <?php echo $this->Session->flash(); ?>
      <div class="container unique-content">
            <!-- Steps content -->
            <div class="step-content">
                <div>      
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
      </div>
    </div>
    <footer role="contentinfo">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span8 offset2 social">
            <ul class="social inline">
              <li>
                <a class="fb" href="http://www.facebook.com/escolamupi"
                   target="_blank" title="facebook"></a>
              </li>
              
              <li>
                <a class="ln" href="http://www.linkedin.com/company/mupi"
                   target="_blank" title="linkedin"></a>
              </li>
              
              <li>
                <a class="tw" href="https://twitter.com/mbideas" target="_blank"
                   title="twitter"></a>
              </li>
            </ul>
          </div>
          <div class="span2 mixpan visible-desktop">
            <a href="https://mixpanel.com/f/partner"><img alt="Mobile Analytics"
                                                          src="http://cdn.mxpnl.com/site_media/images/partner/badge_light.png"></a>
          </div>
        </div>
      </div>
    </footer>


    <!-- The scripts in the end of the page, so the page loads faster -->
    <?php
      // jQuery
      echo $this->Html->script('jquery-2.0.0.min.js');

      // !!!!! IMPORTANT - DONT MOVE !!!!!
      // Mixpanel

      // if(IS_PROD) echo $this->Html->script('mixpanel/lesson.js');

      // Bootstrap
      echo $this->Html->script('bootstrap.min.js');

      echo $this->Html->script('prettify/prettify.js');
      // echo $this->Html->script('jquery.mCustomScrollbar.concat.min.js');

      // Our js
      echo $this->Html->script('escola.main.js');
      //echo $this->Html->script('wizard.js');
    
      echo $this->fetch('script');
    ?>

    <script type="text/javascript"
            src="//releases.flowplayer.org/5.4.3/flowplayer.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
          href="//releases.flowplayer.org/5.4.3/skin/minimalist.css">
  </body>
</html>
