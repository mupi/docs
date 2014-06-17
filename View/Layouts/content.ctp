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
    
    <meta property="og:title" content="Mupi Escola!" />
    <meta property="og:image" content="http://docs.escolamupi.com.br/img/mupilogo.png" />
    <meta property="og:image" content="http://docs.escolamupi.com.br/img/logoFB.jpg" />
    <meta property="og:image" content="http://docs.escolamupi.com.br/img/logomupi.png" />
    <meta property="og:description" content="A primeira escola online de tecnologia criativa do Brasil!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://docs.escolamupi.com.br" />
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico" />  
    
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


    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51292901-1', 'docs.escolamupi.com.br');
      ga('send', 'pageview');

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
      <?php echo $this->fetch('content'); ?>
    <div class="container"> 
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'escolamupi'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
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
