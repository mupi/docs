<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Formas e Utilizar CSS",
    "url" => "css-como-usar",
  )); 
?>  

<?php 
  $this->Html->script("bootstro.js", array("inline" => false));
  $this->Html->script("exercise-inspector.js", array("inline" => false));
  $this->Html->script("html-lesson.js", array("inline" => false));
  $this->Html->css("html-lesson.css", null, array("inline" => false));
  $this->Html->css("estruturando-lesson.css", null, array("inline" => false));
  $this->Html->css("exercise-inspector.css", null, array("inline" => false));
  $this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container unique-content">
  <div class="step-content">
    <div class="step-pane" id="step2">
      <h3>Como aplicar CSS em uma página?</h3>
      <p>
        Existem 3 formas básicas de aplicar css em uma página:
      </p>
      <ul>
       <li>
         <strong>Inline</strong>: que traduzido temos "em
         linha". Significa realizar alterações diretamente na tag do
         elemento a ser estilizado no código html, através do atributo
         chamado <code>style</code>.
         <div 
         class="two-columns-example row-fluid" 
         data-code-title="Veja como se insere CSS inline:"
         data-render-title="">
         <p style="color: #FF0000;">
          Oi! A cor deste parágrafo foi mudada inline através
          do <strong>atributo</strong> <code>style</code> na
          tag <code>p</code>.
        </p></div>
      </li>
      <li>
       <strong>Tag style</strong>: dentro do código html, é possível
       inserir uma <strong>tag</strong> de nome <code>style</code> que
       será lida apenas pelo navegador que pode conter o css de todos
       os elementos da página. 
       <div
       class="two-columns-example row-fluid"
       data-code-title="Veja como se insere CSS na tag style:"
       data-render-title="">
       <style type="text/css">
       p.exemplo{
         border: 1px dashed #00F;
       }
       </style>
       <p class="exemplo">
         Oi! A borda deste parágrafo foi mudada 
         através da tag <code>style</code>.
       </p></div>
     </li>
     <li>
       <strong>Arquivo externo</strong>: a forma mais utilizada e
       recomendada é colocar o css em um arquivo externo que terá
       que ser importado, através de um link entre arquivos, para a
       página HTML. Podem ser usados um ou mais arquivos e essa é
       uma decisão de organização do projeto que deve ser realizada
       de acordo com a complexidade dele. Esta é a forma mais
       recomendada pelos seguintes motivos:
       <ul>
        <li>
          Organização do projeto de um site, separando a parte de
          conteúdo da parte visual em arquivos específicos, de
          acordo com a linguagem (HTML ou CSS). 
        </li>
        <li>
          Permitir que o mesmo estilo seja aplicado em diferentes
          páginas do mesmo site e facilitando a modificação visual
          de elementos similares, já que suas propriedades visuais
          estão num mesmo arquivo CSS. Para isso, basta inserir o 
          link em toda página HTML que se queira usar esse estilo.
        </li>
        <li>
          Ao aplicar um mesmo estilo a diferentes páginas de um
          mesmo site, evitamos a repetição de código no projeto e
          dessa forma economizamos na quantidade de dados enviados
          para o usuário, que em certos dispositivos e conexões
          com a internet podem fazer uma grande diferença.
        </li>
      </ul>
      <p>
        Para inserir o CSS desta maneira, você precisa indicar o
        caminho de onde está o arquivo. Para isso, utilizamos a
        tag <code>link</code>, com os atributos <code>type</code>
        e <code>rel</code>, que indicam que o conteúdo do arquivo é
        uma folha de estilo em CSS, e o atributo <code>href</code>
        para indicar o caminho do arquivo:  <code>&lt;link
        rel="stylesheet" type="text/css" href="caminho/arquivo.css"
        /&gt;</code> 
      </p>
      <p>
        <span class="label label-warning">Importante</span> Este código deve ser 
        colocado dentro da tag <code>head</code>, no arquivo HTML 
        que receberá o estilo. Lembrando que é preciso repeti-lo em todo arquivo 
        HTML que for utilizá-lo.
      </p>
      <p>
        Já dentro de um arquivo CSS, escrevemos apenas as propriedades a
        serem atribuídas aos elementos, de forma totalmente
        independente do conteúdo HTML. 
      </p>
      <div class="mupi-example">
        <div class="row-fluid">
          <div class="span6">
            <span></span>
            <p>Exemplo no arquivo .css:</p>
            <pre class="prettyprint linenums">
              <code class="language-css">div.exemplo-css-externo {
                background-color: #f0c6f9;
              }</code></pre>
              <p>Exemplo no arquivo .html:</p>
              <pre class="prettyprint linenums">
                <code class="language-css">&lt;div class="exemplo-css-externo"&gt;
                  Minha cor de fundo &eacute; #f0c6f9
                  &lt;/div&gt;</code></pre>
                </div>
                <div class="span6">
                  <p>Exibição no navegador:</p>
                  <div class="span6 exemplo-css-externo">
                    Minha cor de fundo é #f0c6f9
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
