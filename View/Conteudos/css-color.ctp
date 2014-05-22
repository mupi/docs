<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Propriedade CSS color",
    "url" => "css-color",
  )); 
?> 
<?php 
 $this->Html->script("bootstro.js", array("inline" => false));
 $this->Html->script("exercise-inspector.js", array("inline" => false));
 $this->Html->script("html-lesson.js", array("inline" => false));
 $this->Html->script("css-lesson.js", array("inline" => false));
 $this->Html->css("css-lesson.css", null, array("inline" => false));
 $this->Html->css("exercise-inspector.css", null, array("inline" => false));
 $this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container unique-content">
  <!-- Steps content -->
  <div class="step-content">
    <!-- Isso é um exemplo -->
    <div class="tab-pane active in" id="color">
      <h3>Cor do texto - Color</h3>
      <p>
        <code>Color</code> (cor) é a propriedade CSS que nos permite mudar a
        <a href="http://escola.mupi.me/conteudos/design-cores"
        target="blank">cor</a> do texto dos elementos. 
      </p>
      <p>
        Para o valor desta propriedade, temos três principais maneiras de
        representação das cores, sendo ou hexadecimal, ou RGB, ou o nome da cor
        em inglês.
      </p>
      <div class="two-columns-example row-fluid"
           data-code-title="Por exemplo, a cor azul pode ser representada
                            como:"
           data-render-title="">
<div style="color: RGB(0,0,255);">
  Nós somos azuis!
</div>
<div style="color: #0000FF;">
  Todos nós!
</div>
<div style="color: blue;">
  Todos!
</div>
      </div>
      <div>
        <div 
           class="two-columns-example row-fluid" 
           data-code-title="Exemplos de como mudar as cores dos textos"
           data-render-title="">
<div style="color: RGB(0,0,255);">
  Azul
</div>
<div style="color: RGB(0,255,0);">
  Verde
</div>
<div style="color: RGB(255,0,0);">
  Vermelho
</div>            
<div style="color: #000099;">
  Um azul escuro
</div> 
<div style="color: yellow">
  Amarelo Sol!
</div> 
<div style="color: #EEE;">
  Cinza! Uma forma de representação diferente. 
</div> 
<div style="color: #EEEEEE;">
  Mesma cor!
</div> 
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  div#codePenModal {
    min-width: 800px;
    margin-left: -400px;
  }
  #codePenModal .modal-body {
    min-height: 455px;
  }
</style>

<div id="codePenModal" class="modal hide fade"  tabindex="-1" 
     aria-labelledby="CodePen" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"
            aria-hidden="true">×</button>
    <h3 id="myModalLabel">Sobre o CodePen</h3>
  </div>
  <div class="modal-body">
    <iframe id="video-codepen" width="504" height="378" 
            src="//www.youtube.com/embed/clZBhb3yXvs" 
            frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn">Fechar</a>
  </div>
</div>
