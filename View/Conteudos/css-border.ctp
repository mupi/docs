<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Propriedade CSS border",
    "url" => "css-border", 
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
    <div class="tab-pane in" id="border">
      <h3>Border</h3>
      <p>Com as propriedades <code>border-*</code> conseguimos modificar o
      estilo das bordas dos elementos HTML. Veja a seguir algumas delas: 
      </p>
      <h5>Espessura da borda: <code>border-width</code></h5>
      <p>
        Podemos utilizar várias unidades de medida para a espessura da borda,
        mas a mais utilizada é pixels. 
      </p>
      <h5>Estilo da borda: <code>border-style</code></h5>
      <p>
        Passe o mouse nos valores abaixo para ver o estilo de cada borda no
        elemento <code>div</code>, o qual engloba o conteúdo com imagem e
        texto. Para declarar os valores para essa propriedade, a sintaxe
        é <code>div {border-style: valor;}</code>. 
      </p>
      <ul id="styles_exerc_machado" class="inline">
        <li>dotted</li>
        <li>dashed</li>
        <li>solid</li>
        <li>double</li>
        <li>groove</li>
        <li>ridge</li>
        <li>inset</li>
        <li>outset</li>
        <li>none</li>
        <li>hidden</li>
      </ul>
      <div id="exerc_machado">
        <?php 
          echo $this->Html->link(
            $this->Html->image(
              "machado.gif", 
              array("alt" => "Baixar obra completa de Machado de Assis")), 
            "http://machado.mec.gov.br/index.php?option=com_content&view=category&id=34&Itemid=123",
            array('escape' => false, 'target' => 'blank')
          );
        ?>
        <p>Clique na imagem para baixar a obra completa de Machado de Assis</p>
      </div>
      <h5>Cor da borda: <code>border-color</code></h5>
      <p>
        As formas para declarar as  <a href="http://escola.mupi.me/conteudos/design-cores"
        target="blank">cores</a> da borda são similares às da
        propriedade  <a href="http://escola.mupi.me/conteudos/css-color"
        target="blank"><code>color</code></a>: através do sistema hexadecimal ou
        RGB. Veja o exemplo a seguir em que é declarada a cor vermelha (em RGB)
        para a borda:
      </p>
      <p>
        <code>img {border-color: #000000;}</code>
      </p>
      <h5>A propriedade <code>border</code></h5>
      <p>
        A forma mais simplificada de declarar a borda é através da
        propriedade <code>border</code>. Ela já engloba as três propriedades
        descritas acima, sendo que a ordem deve
        ser <code>border-width</code>, <code>border-style</code>
        e <code>border-color</code>, como por exemplo em <code>div {boder: 2px solid
        #444;}</code>
      </p>
      <p>
        <span class="label label-info">Fica a dica!</span>
          Você pode declarar a borda de cada lateral de um elemento
          separadamente, caso elas tenham estilos diferentes. Para isso, usamos
          as propriedades <code>border-top</code>
          (superior), <code>border-left</code>
          (esquerda), <code>border-bottom</code> (inferior)
          e <code>border-right</code> (direita). Veja os exemplos a seguir:
      </p>
      <div 
         class="two-columns-example row-fluid" 
         data-code-title="Exemplo de elementos com bordas diferentes. (Dica:
         comece a notar a forma em que associamos as propriedades CSS aos
         elementos HTML)"
         data-render-title="No navegador, ele é apresentado assim:">
<style type="text/css">
  div.border-top-bottom{
    border-top: 2px dashed #444;
    border-bottom: 2px solid #444;
  }
  div.border-left-right{
    border-left: 1px solid #ff5e00;
    border-right: 1px solid #45d33f;
  }
</style>
<div class="border-top-bottom">
  Elemento com borda de 2 pixels serrilhada no topo e borda sólida 
  de 2 pixels embaixo.
</div>
<div class="border-left-right">
  Elemento com borda sólida vermelha de 1 pixel à esquerda e 
  verde à direita.
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
