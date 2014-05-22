<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Modelo de caixa",
    "url" => "modelo-de-caixa",
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
        <div class="step-pane in" id="modelo-caixa">
  <h3>Modelo de caixa</h3>
        <p>
          Todo elemento HTML tem o formato de uma caixa, mesmo que não seja visível ao usuário. Por isso, é possível atribuir a todo elemento propriedades como <a href="http://escola.mupi.me/conteudos/css-width-height"
        target="blank">altura e largura</a>. 
        </p>
        <p>
          Considerando ainda este modelo, seguem outras propriedades CSS referentes a ele:
        </p>
        
        <div class="row-fluid box-example">
          <div id="box-margin" title="Margin é o espaço que me distancia dos outros elementos" class="span6">
            margin
            <div id="box-border" title="Esta é minha borda">
              border
              <div id="box-padding" title="Padding serve para distanciar o conteúdo dos limites do elemento">
                padding
                <div id="box-conteudo" title="É tudo que está dentro das tags de qualquer elemento">
                  Conteúdo do elemento
                </div>
              </div>
            </div>
          </div>
          <div id="box-explanation" class="span6">
            <div id="exp-box" class="explanation hide">
              Passe o mouse no modelo ao lado para entender o que é cada propriedade.
            </div>
            <div id="exp-box-margin" class="explanation">
              A propriedade <code>margin</code> (que traduzida significa margem) é o espaço que fica entre o elemento e os que estão ao seu redor.
            </div>
            <div id="exp-box-border" class="explanation">
              A propriedade <code>border</code>, como o próprio nome diz, é a borda do elemento e ela pode receber diferentes tipos de estilo.
            </div>
            <div id="exp-box-padding" class="explanation">
              A propriedade <code>padding</code> serve para definir o espaço <strong>interno</strong> que fica entre a borda e o conteúdo do elemento.
            </div>
            <div id="exp-box-conteudo" class="explanation">
              E, para lembrar, o conteúdo é tudo que fica dentro das tags de cada elemento.
            </div>
          </div>
        </div>
        
          <p>
            <span class="label label-warning">Importante</span> As
            propriedades <code>margin</code> e <code>padding</code> são muito
            importantes para o visual da página. Elas dão o que podemos chamar de
            "respiro" ao conteúdo da página. Elas são os espaços entre, por exemplo,
            textos, imagens e seções, fazendo muita diferença para o usuário se
            sentir confortável ao navegar num site ou ler um texto.
          </p>
          <h3>Declarando margin e padding</h3>
          <p> 
            Seguindo a analogia da caixa, temos 4 lados que podem ser
            modificados, sendo eles: superior, direito, inferior e esquerdo.
          </p>
          <p>
            Para declarar os valores destas propriedades, temos duas opções:
            <ul>
              <li>
                Forma longa: em que podemos declarar um por um dos lados
              </li>
              <li>
                Forma resumida: em que podemos declarar mais de um por vez. 
                Nesta opção, a ordem específica - superior, direito, 
                inferior e esquerdo - é <strong>obrigatória</strong>.
              </li> 
            </ul>
          </p>
          <p>
            Veja os exemplos a seguir para entender melhor:
          </p>            
         
          <div 
            class="two-columns-example row-fluid" 
            data-code-title="Compare o código abaixo com seu modo de exibição ao lado. Tente entender o que está acontecendo."
            data-render-title="">
<style type="text/css">
  .sem-margin, .com-margin, .com-padding{
    border: 1px solid #666;
  }
  .com-margin{
    margin: 20px;
  }
  .com-padding{
    padding: 20px;
  }
</style>
<div class="sem-margin">
  Div sem nenhuma definição de margin ou padding. Observe que o texto fica "grudado" nas bordas.
</div>
<div class="com-margin">
  Div com 10 pixels de margem. Note os espaços em todas as laterais depois da borda.
</div>
<div class="com-padding">
  Div com 10 pixels de padding. Note os espaço nas laterais internas do elemento.
</div>
          </div>

          <p>
            A seguir, mais algumas formas de declarar os valores de margin e padding:
          </p>
          <ol>
            <li>A forma resumida (ou short hand em inglês), na qual é possível
              declarar com apenas um valor a margem ou o padding de todos os lados. 
              <div class="row-fluid">
                <div class="span7 offset2">
                  <pre class="prettyprint linenums">
/* O mesmo valor para todos os lados de uma vez */
img {
  margin: 10px;
}
                  </pre>
                </div>
              </div>
            </li>
            <li>
              Um valor diferente para cada lado numa mesma declaração.
              <div class="row-fluid">
                <div class="span7 offset2">
                  <pre class="prettyprint linenums">
/* Declaração da margin para os lados superior, direito, inferior e esquerdo. Sempre, nesta ordem! */
img {
  padding: 10px 5px 20px 30px;
}
                  </pre>
                </div>
              </div>
            </li>
            <li>
              Também é possível declarar apenas um lado por vez, caso queira dar valor apenas para um dos lados.
              <div class="row-fluid">
                <div class="span7 offset2">
                  <pre class="prettyprint linenums">
  /* Apenas a margem esquerda recebe o valor de 20px. Veja que poderia ser right, para direita, top, para cima, e bottom, para baixo. */
  img {
    margin-left: 20px;
  }
                  </pre>
                </div>
              </div>
            </li>
          </ol>
</div>
