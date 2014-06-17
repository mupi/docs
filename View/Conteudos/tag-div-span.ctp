<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Div e span",
    "url" => "tag-div-span",
  )); 
?> 
<?php 
  $this->Html->script("bootstro.js", array("inline" => false));
  $this->Html->script("exercise-inspector.js", array("inline" => false));
  $this->Html->script("html-lesson.js", array("inline" => false));
  $this->Html->css("html-lesson.css", null, array("inline" => false));
  $this->Html->css("exercise-inspector.css", null, array("inline" => false));
  $this->Html->css("bootstro.css", null, array("inline" => false));
?>

 <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="div-span">
   <h3>Div e Span</h3>
   <p>Ao se pensar em um layout ou na estilização de um conteúdo, por vezes 
    precisamos controlar apenas partes específicas da página, seja para posicionar 
    uma barra lateral que contém vários elementos ou deixar apenas uma frase 
    de um texto em vermelho, por exemplo. Nesses casos podemos utilizar os 
    elementos genéricos <code>div</code> para blocos de conteúdo e 
    <code>span</code>, para trechos.</p>
   <p>Esses dois elementos, funcionam como containers de conteúdo. Como são 
    genéricos, diferentemente dos outros elementos HTML eles não fazem 
    referência ao tipo de conteúdo que há dentro deles, mas eles são muito 
    úteis na hora de manipular a identidade visual da página com CSS. Para isso,
    utilizamos os atributos <em>class</em> e <em>id</em>.</p>
   <p>A <code>div</code> é utilizada para manipular <strong>blocos</strong> de conteúdo, como
    sessões inteiras de um site. É mais utilizada na hora de se pensar o 
    layout como um todo.</p>
   <p>O <code>span</code> é um elemento <strong>em linha</strong> utilizado para
    modificar pequenos trechos de texto que estão dentro de elementos em 
    <strong>bloco</strong>, como o <code>p</code>, por exemplo.
   </p>


   <h5>Elementos em bloco vs. em linha</h5>
   <p>Todos os elementos HTML são em bloco ou em linha.</p>
   <p> Na prática, a diferença é que um elemento em bloco inicia uma nova linha 
    numa página e ocupa toda a largura disponível, enquanto o elemento em linha 
    mantém-se no fluxo do documento, ocupando apenas a largura do seu conteúdo.</p>
    <p> Os elementos em bloco podem conter tanto elementos em bloco quanto em linha.
      Por exemplo: podemos colocar tanto parágrafos como imagens dentro de uma 
      <code>div</code>, assim como podemos inserir uma imagem, que é um elemento 
      em linha, dentro de um parágrafo, que é em bloco.
    </p>
    <p> Os elementos em linha não iniciam uma nova linha e eles não devem conter 
      elementos em bloco, por exemplo não devemos colocar um <code>p</code> dentro
      de um <code>span</code>.
    <p>Veja como isso funciona:</p>
    <div 
          class="two-columns-example row-fluid" 
          data-code-title="Abaixo usamos elementos em bloco e em linha para comparar
          como se comportam"
          data-render-title="Compare o código com o resultado abaixo:">
  <p>Esse parágrafo, é um elemento em bloco. Ele está ocupando toda a largura do 
    elemento que o contém, no caso essa caixinha azul, e sempre que inserido vai iniciar 
    uma nova linha na página. Se colocamos 
    <span style="color: red">esse span com texto vermelho</span> dentro desse parágrafo
     ele ocupa apenas o seu tamanho e mantém-se na mesma linha que o colocamos.
  </p>
  <p
    Assim como uma imagem <img src="http://docs.escolamupi.com.br/img/fotoGato1.png" 
                            alt="Foto do gato 1" title="Gato Otto Zepelin" width="100" /> 
    continua na mesma linha.
  </p>
  <div> Já se abrimos uma div dentro de outra div
  <div style="background-color: #ccc;">como essa, mesmo estando dentro da outra, por ser 
    um elemento em bloco, começa uma nova linha e ocupa toda a largura disponível.</div>
  <div style="background-color: lightgreen; width: 50%;">Para controlar sua largura utilizamos CSS, observe o atributo style.</div>
  </div>

</div>


 </div>
