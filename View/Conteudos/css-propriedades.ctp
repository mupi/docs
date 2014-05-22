<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Propriedades CSS",
    "url" => "css-propriedades",
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
        <div class="step-pane in" id="declarando">
      <h3>Declarando propriedades</h3>
      <p>
        Para inserir CSS <a href="#" class="mail-client pop"
        data-placement="right"
        data-content='<p> A palavra inline traduzida quer dizer "em linha". 
        Inline significa realizar alterações diretamente na tag do elemento 
        a ser estilizado no código html, através de um atributo chamado 
        <code>style</code>.</p>'>
        inline</a>, você precisa apenas declarar as propriedades
        que quer alterar e os valores dessas propriedades diretamente no
        elemento no código HTML, dentro do atributo style de cada tag, 
        como pode ser visto em: 
      </p>
      <p>
        <code>&lt;tag style="propriedade:valor;
          propriedade2:valor2;"&gt;&lt;/tag&gt;</code>               
        </p>
        <p>
          <span class="label label-warning">Importante</span> Atenção para o 
          fato de que cada propriedade é separada por <code>;</code>.
        </p>
        <p>
          Quando vamos utilizar a tag <code>&lt;style&gt;</code> ou um 
          <a href="#" class="mail-client pop"
          data-placement="right"
          data-content='<p> Utilizar um arquivo externo é uma outra forma 
          de inserir CSS.</p>'> arquivo externo</a> para inserir CSS, precisamos 
          primeiramente indicar os elementos que irão receber as propriedades 
          visuais que vamos declarar. Para isso, utilizamos os denominados 
          <span class="label label-inverse">Seletores</span>. Observe o exemplo 
          abaixo em que todo parágrafo (elemento <code>p</code>) terá texto de cor 
          "yellow" e sua fonte terá 14px:
        </p>
        <div class="row-fluid">
          <div class="span6 offset3">
            <pre class="prettyprint linenums">
              &lt;style type="text/css"&gt;
              p {
              color: yellow;
              font-size: 14px;
            }
            &lt;/style&gt; </pre>
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
