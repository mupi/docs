<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "As cores na Web",
    "url" => "design-cores",
  )); 
?> 
<?php 
  //$this->Html->script("bootstro.js", array("inline" => false));
  //$this->Html->css("bootstro.css", null, array("inline" => false));
  // $this->Html->script("colorpicker.min.js", array("inline" => false));
  $this->Html->css("colorpickershowcase.css", null, array("inline" => false));
  $this->Html->css("colorpickerthemes.css", null, array("inline" => false));
?>

<div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="cores-web">
      <h3>Como funcionam as cores na Web</h3>
      <p>
        Nossos computadores e monitores utilizam o sistema RGB (Red Green Blue) para imprimir as cores na tela.
      </p>
      <p>
        <label class="label label-inverse">RGB</label><br/>
        RGB é um modelo aditivo de luz. Modelos aditivos de luz funcionam com a adição e combinação de cores-base para reprodução de outras cores. No caso do RGB, temos três cores de luz: Red - Vermelho, Green - Verde e Blue - Azul.  
      </p>
      <div class="img-polaroid cafeteira pull-right">
              <?php echo $this->Html->image('pixels.jpg', array('alt' => 'Pixels em um monitor')); ?>
              <label>Exemplo de pixels acesos em um monitor</label>
      </div>
      <p><label class="label label-inverse">Pixel</label><br/>
        Os monitores são formados por milhares de pontos de luz muito pequenos,
        que emitem as três cores primárias em intensidades diversas. Essas cores
        combinadas conseguem reproduzir todas as cores que vemos na
        tela e cada ponto desses é chamado de pixel. 
      </p>
      <p>
        Para o monitor conseguir mostrar uma tela, cada pixel recebe uma das três cores com um valor de intensidade. Cada cor pode ter um valor entre 0 e 255, sendo 0 apagada e 255 na maior intensidade. Por exemplo, para o monitor exibir a cor branca, nós escrevemos RGB(256,256,256), no qual todas as cores estão acesas com intensidade máxima. Para exibir preto é o contrário, RGB(0,0,0), que significa que todas as cores estão apagadas. Mesclando esses valores, conseguimos exibir uma gama imensa de cores.
      </p>
      <p>
        Outra forma bastante utilizada para notação de cores é o sistema numérico hexadecimal. Esse sistema vai de 0 a F, sendo F igual a 16. A notação em hexadecimal tem 3 pares de números, sendo que cada par equivale a uma das três cores. Por exemplo, a cor vermelha RGB(255,0,0) é representada por #FF0000.
      </p>
      <p>
        O seletor de cores abaixo mostra o valor da cor no formato RGB e em
        Hexadecimal. Deslize o mouse pela paleta para selecionar cores!
      </p>
      <div class="cpicker container-fluid">
        <div class="row-fluid">
          <div class="span4 offset2">
            <div id="default" class="cp cp-default clearfix"></div>
          </div>
          <div class="cTool span4">
            <div class="row">
              <div class="squareColor"></div>
              <p class="text-color">Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="rgb-labels row-fluid">
              <label>HEX</label>
              <input class="hex" type="text" value=""/>
            </div>
              
              
            <div class="rgb-labels row-fluid">
              <label>R:</label>
              <input class="rgb_r" type="number" value="" />
              <label>G:</label>
              <input class="rgb_g" type="number" value="" />
              <label>B:</label>
              <input class="rgb_b" type="number" value="" />
            </div>                
              
            <div class="rgb-labels row-fluid">
              <label>H:</label>
              <input class="hsv_h" type="text" value="" />
              <label>S:</label>
              <input class="hsv_s" type="text" value="" />
              <label>V:</label>
              <input class="hsv_v" type="text" value="" />
            </div> 
            <span class="rgb_css"></span><br/>
            <span class="hsv_css"></span>
          </div>
        </div>
      </div>
  
      <?php 
        $this->Html->script("colorpicker.js", array("inline" => false)); 
        $this->Html->script("showcase.js", array("inline" => false)); 
      ?>
      
      <p><span class="label label-info">Fica a dica!</span> Veja algumas ferramentas interessantes e gratuitas que auxiliam a utilizar cores:</p>
      <ul>
        <li><a href="https://kuler.adobe.com/" target="blank">Kuler</a> - ferramenta da Adobe que permite a criação de paletas de cores e mostra algumas relações entre elas.</li>
        <li><a href="http://colorschemedesigner.com/" target="blank">Color Scheme Designer</a> - ferramenta super completa para escolha de cores e combinações.</li>
      </ul>
    </div>
  </div>
</div>
