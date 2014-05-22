<!DOCTYPE html >
<html lang="pt-br">
  <head>
    <title>Mupi Escola!</title>

    <!-- Le meta -->
    <?php echo $this->Html->charset(); ?>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A primeira escola online de tecnologia criativa do Brasil!" />
    <meta name="author" content="Matchbox Ideas" />
    <meta property="og:title" content="Mupi Escola!" />
    <meta property="og:image" content="http://escola.mupi.me/img/mupilogo.png" />
    <meta property="og:image" content="http://escola.mupi.me/img/logoFB.jpg" />
    <meta property="og:image" content="http://escola.mupi.me/img/logomupi.png" />
    <meta property="og:description" content="A primeira escola online de tecnologia criativa do Brasil!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://escola.mupi.me" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />  
    <!-- Le scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />
    <!--[if lt IE 7]>
      <link href="css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->
    
    <?php
       // echo $this->Html->meta('favicon.ico');
    //	echo $this->Html->css('cake.generic');
      echo $this->Html->script('bootstrap.min.js');
      echo $this->Html->script('main.js');
      echo $this->Html->script('mailchimp.js');

      echo $this->Html->css('bootstrap.min.css');
      echo $this->Html->css('font-awesome.min.css');
      echo $this->Html->css('escola.css');
      echo $this->Html->css('bootstrap-responsive.min.css');
    ?>


    <!--start of Offerchat js code--><script type='text/javascript'>var ofc_key = 'c88b6490294d523a0fedbba330c1cf1f';(function(){  var oc = document.createElement('script'); oc.type = 'text/javascript'; oc.async = true;  oc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'd1cpaygqxflr8n.cloudfront.net/p/js/widget.min.js?r=1';  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oc, s);}());</script><!--end of Offerchat js code-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css' />
    <!--[if lt IE 7]>
        <link href="css/font-awesome-ie7.min.css" rel="stylesheet">
        <![endif]-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

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
      <!--<div id="main">-->
      <div class="navbar mupi-navbar navbar-fixed-top not_logged_header">
        <div class="container-fluid">        
          <div class="row-fluid">
            <div class="span2 participe visible-desktop">
              <h4>
                <?php
                   echo $this->Html->link('Matrícula', 
                                          array('controller' => '', 
                                                'action' => '#participe'), 
                                          null);
                ?>
              </h4>
            </div>
              <div class="span3 tel">
                <div class="phone">
                  <?php
                    echo $this->Html->link('', array('controller' => '', 'action' => '#participe'), array('class' => 'logo hidden-desktop'));
                  ?>
                  <a href="tel:+551932893914">
                    <i class="icon-phone "></i> +55 (19)32893914
                  </a>
                </div>
              </div>
              <div class="span5 offset1 menu visible-desktop">   
                <?php echo $this->Html->link('Entrar!', array('controller' => 'users', 'action' => 'register'), array('class' => 'btn btn-warning')); ?> 
                <?php
                   echo $this->Html->link('Nossos parceiros', 
                                          array('controller' => '', 'action' => '#parceiros'), array('style' => 'border-right: 1px solid white;'));
                ?>
                <?php
                  echo $this->Html->link('Quem Somos', array('controller' => '', 'action' => '#sobre'));
                ?>
              </div>
              <div class="span1 pull-right visible-desktop">
                <?php
                  echo $this->Html->link('', array('controller' => '', 'action' => '#participe'), array('class' => 'logo'));
                ?>
              </div>
            </div>
          </div>
        </div>
        <div id="content" class="main-bar">              
          <div class="about_container container-fluid">
            <div class="row-fluid escola">
              <div class="span2 offset1">
                <?php 
                   echo $this->Html->image('logo.png', array('alt' => 'Logo'));
                ?>
              </div>
              <div class="span8">
                <h1>escola online de Tecnologia Criativa</h1> 
                <span>aprenda com projetos reais</span>          
                <iframe class="pull-right" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fescolamupi&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=trebuchet+ms&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=292772274170801" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:35px;" allowtransparency="true"></iframe>

              </div>
            </div>
          </div>
          <?php echo $this->Session->flash(); ?>
	  <?php echo $this->fetch('content'); ?>
        </div>
      </div>
<!--    </div>-->
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
            <a class="ln" href=
               "http://www.linkedin.com/company/mupi" target="_blank"
               title="linkedin"></a>
          </li>

          <li>
            <a class="tw" href="https://twitter.com/mbideas"
               target="_blank" title="twitter"></a>
          </li>
        </ul>
      </div>
      <div class="span2 mixpan visible-desktop">
        <a href="https://mixpanel.com/f/partner"><img alt="Mobile Analytics" src="http://cdn.mxpnl.com/site_media/images/partner/badge_light.png"></a>
      </div>
    </div>
  </div>
</footer>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
