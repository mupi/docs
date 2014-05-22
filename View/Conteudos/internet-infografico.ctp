<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Como funciona a Internet - Infográfico",
    "url"   => "internet-infografico"
    )); 
    ?> 
    <?php 
    $this->Html->script("main.js", array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="infografico">
          <h3>Resumindo</h3>
          <p>
            O infográfico abaixo traz um resumo de como funciona a internet! 
            Navegue por ele atentando-se a todos os detalhes!
          </p>
          <div id="myCarousel" class="carousel slide internet-infographic">
            <div class="carousel-inner">
              <div class="item active">
                <?php 
                echo $this->Html->image(
                  'infoslide1.jpg', 
                  array(
                    'alt' => 'como funciona a internet - Linguagem'
                    ));
                    ?>
                  </div>
                  <div class="item">
                    <?php 
                    echo $this->Html->image(
                      'infoslide2.jpg', 
                      array(
                        'alt' => 
                        'como funciona a internet ' 
                        . '- Localiza&ccedil;&atilde;o e endereço'
                        ));
                        ?>
                      </div>
                      <div class="item">
                       <?php 
                       echo $this->Html->image(
                         'infoslide3.jpg', 
                         array(
                           'alt' => 
                           'como funciona a internet - Como algu&eacute;m ' 
                           . 'recebe um e-mail?'));
                           ?>
                         </div>
                         <div class="item">
                           <?php 
                           echo $this->Html->image(
                             'infoslide4.jpg', 
                             array('alt' => 'como funciona a internet - Juntando tudo'));
                             ?>
                           </div>
                         </div>
                         <a class="left carousel-control" href="#myCarousel"
                         data-slide="prev">‹</a>
                         <a class="right carousel-control" href="#myCarousel"
                         data-slide="next">›</a>
                       </div>
                     </div>
                   </div>
                   </div>