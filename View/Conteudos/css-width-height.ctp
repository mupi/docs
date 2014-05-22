<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Propriedade CSS width, height",
    "url" => "css-width-height",
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
        <div class="step-pane in" id="width-height">
      <h3>Width e height</h3>
      <p>
        Todo elemento HTML tem um formato retangular. A partir deste pressuposto, é possível entender o conceito chamado <a href="http://escola.mupi.me/conteudos/modelo-de-caixa"
        target="blank"><strong>modelo de caixa</strong></a>, em que cada elemento HTML é
        representado por uma caixa.
      </p>
      <p>
       Estas caixas podem ser agrupadas uma dentro
       da outra. Observe, por
       exemplo, em <a href="http://escola.mupi.me/conteudos/tag-listas"
       target="blank">Listas</a>, como elas são construídas:
       todos os <code>li</code> estão contidos no elemento <code>ul</code>. 
     </p>
     <p>
      Levando em consideração o formato de retângulo para uma caixa, podemos
      considerar que todos os elementos possuem então como propriedade a altura 
      (height) e a largura (width). Estas duas propriedades podem ser
      definidas por CSS. 
    </p>
    <p>
      Para definir os valores de <code>width</code> e <code>height</code>,
      podemos utilizar as <a href="#" class="glossario pop" data-placement="top"
      data-original-title="Unidades de medida" data-content='Em CSS,
      utilizamos um sistema um pouco diferente de unidades de medida
      para as propriedades. Para saber mais sobre isso, sugerimos a
      tabela de conversão disponível na
      página <a href="http://reeddesign.co.uk/test/points-pixels.html"
      target="_blank">ReedDesign</a>.'>unidades de medidas</a> 
      como pixels, porcentagem e pontos. Essas unidades são utilizadas 
      também para a propriedade <code>font</code>.
    </p>
    <p>
      Veja o exemplo a seguir em que são determinadas a altura e a largura 
      de um elemento <code>div</code>.
    </p>
    <div 
    class="two-columns-example row-fluid" 
    data-code-title="Definindo largura e altura de uma div:"
    data-render-title="Note que o pai deste elemento é o retângulo que
    está em azul e a div de exemplo está com a metade da largura dele."> 
    <style type="text/css">
    div.exemplo-width-height{
      width: 50%;
      height: 200px;
      border: 1px solid #444;
    }
    </style>
    <div style="background-color: #64a7f8;">
      <div class="exemplo-width-height">
        Yey! tenho 50% de largura que é 50% da largura do meu pai (elemento me contém)
        e 200 pixels de altura.
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
