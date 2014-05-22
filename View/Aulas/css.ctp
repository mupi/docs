<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "Introdução a CSS3",
 "aulas" => array(
  0 => array("Como funciona a internet", "internet"),
  1 => array("Sobre design", "design"),
  2 => array("Introdução ao HTML5", "html"),
  3 => array("Introdução a CSS3", "css", true),
  4 => array("Estrutura básica de projeto", "estrutura-projeto"),
  5 => array("JavaScript e jQuery", "js-jquery"),
  6 => array("Ferramentas externas","ferramentas-basico"),
  7 => array("Projetos","projetos-webdesign"),
  )
 ));  
?> 
<?php echo $this->element('wizard', array(
                          "steps" => array(
                                           "O que é",
                                           "Como usar",
                                           "Propriedades",
                                           "Pratique",
                                           "Modelo de Caixa",                                  
                                           "Posicionando",
                                           "Quiz"
                                           ))); ?>

 <?php 
 $this->Html->script("bootstro.js", array("inline" => false));
 $this->Html->script("exercise-inspector.js", array("inline" => false));
 $this->Html->script("html-lesson.js", array("inline" => false));
 $this->Html->script("css-lesson.js", array("inline" => false));
 $this->Html->css("css-lesson.css", null, array("inline" => false));
 $this->Html->css("exercise-inspector.css", null, array("inline" => false));
 $this->Html->css("bootstro.css", null, array("inline" => false));
 ?>

<div class="container wizard-content navbar-fixed-top">
  <!-- Steps content -->
  <div class="step-content">
    <!-- Isso é um exemplo -->
   

    <div class="step-pane active" id="step1">
      <h3>O que é CSS?</h3>

      <p>
        Nos estudos de <a href="html" target="_blank">HTML</a>, é dito algumas vezes que quem controla 
        a aparência e o estilo da página é a linguagem CSS. Mas bem, o que isso quer exatamente dizer? Vamos começar 
        a entender pelo exemplo a seguir: 
      </p>
          <div 
            class="two-columns-example row-fluid" 
            data-code-title="Compare o código abaixo com seu modo de exibição ao lado. Tente entender o que está acontecendo."
            data-render-title="">
<style type="text/css">
  /* Estilo para a section sobre o maquinário */
  .texto-maquinario{
    background: #d8d3a2;
    border: 1px dotted #87804c;
    padding: 10px;
    font-size: 15px;
    color: #444;
    border-radius: 4px;
  }
  .texto-maquinario h3{ 
    font-variant: small-caps;
    font-size: 18px;
  }
  /* Links dentro do texto sobre o maquinário */
  .texto-maquinario a{
    color: #910716;
  }
  /* Estilo ao passar o mouse no link*/
  .texto-maquinario a:hover{
    text-decoration: line-through;
    color: black;
  }
</style>
<section class="texto-maquinario">
  <h3>Texto com as definições visuais definidas pelo(a) desenvolvedor(a)</h3>
  <p>
    O <strong>Maquinário</strong> é um <a href="http://maquinariolab.blogspot.com.br/" target="_blank">laboratório de 
    animação da UFPE</a> com projetos como Animando Histórias e Cordéis Animados.
  </p>
  <p>
    Um de seus últimos sucessos foi 
    <a href="http://www.youtube.com/watch?v=PXa3eYOh96I" target="_blank">O Canganceiro</a>, 
    uma animação baseada em literatura de cordel que 
    narra a história de Lampião, misturando realidade e lenda.
  </p>
</section>
<section>
  <h3>Texto com as definições visuais básicas do navegador</h3>
  <p>
    O <strong>Maquinário</strong> é um <a href="http://maquinariolab.blogspot.com.br/" target="_blank">laboratório de 
    animação da UFPE</a> com projetos como Animando Histórias e Cordéis Animados.
  </p>
  <p>
    Um de seus últimos sucessos foi 
    <a href="http://www.youtube.com/watch?v=PXa3eYOh96I" target="_blank">O Canganceiro</a>, 
    uma animação baseada em literatura de cordel que 
    narra a história de Lampião, misturando realidade e lenda.
  </p>
</section>
</div>
      <p> 
        Tudo que está dentro da tag <code>style</code> é CSS! Em poucas
        palavras, temos que <span class="label label-inverse">CSS</span>, sigla
        para Cascading Style Sheets ou em português Folhas de Estilo em Cascata, é
        a linguagem utilizada para definir o estilo visual da página. 
      </p>
      <p>
        Os arquivos CSS são arquivos de texto, produzidos em editores de código
        fonte (não como o Microsoft Word), cuja 
        <a href="#" class="glossario pop" data-placement="top"
           data-original-title="Extensão"
           data-content='O nome dos arquivos é composto por duas partes: uma é o
           seu nome propriamente dito e a outra é sua extensão, indicando de qual
           tipo ele é. Ela possui geralmente 3 ou 4 caracteres precedidos por um
           ponto e é colocada ao final do nome do arquivo. Acesse
           o <a href="http://pt.wikipedia.org/wiki/Extens%C3%A3o_de_nome_de_ficheiro"
                target="_blank">verbete</a> sobre isso da Wikipedia para visualizar
           alguns exemplos.'>  extensão 
        </a> é <code>.css</code>.
      </p>
      <p>
        É o que define cores, posicionamento dos elementos, tipografia e tudo o que está relacionado à aparência. HTML e CSS são 
        linguagens <strong>independentes</strong>, lembrando que HTML é utilizada para a criação e organização do conteúdo.
      </p>
      <p>
        Com o exemplo acima, podemos perceber que praticamente todo o conteúdo de uma página HTML pode ser modificado visualmente através do CSS.
      </p>
      <p>
        <span class="label label-warning">Importante</span> Ao exibir qualquer página HTML, o <strong>próprio navegador define</strong> algumas propriedades básicas. Acima, por exemplo, note que o elemento <code>h3</code> do texto, devido às definições básicas do navegador, ficou com a fonte bem maior, quando comparamos ao resto do conteúdo, e em negrito. Essas mudanças já são CSS, mesmo que você (desenvolvedor(a)) não tenha definido nada!
      </p>
      <h3>E o CSS3?</h3>
      <p>O <span class="label label-inverse">CSS3</span> é a mais nova versão do CSS, que estava na versão 2.1. Ele trouxe mudanças significativas em relação ao controle do layout e do visual da página. Antes, já era possível definir muitos detalhes visuais, porém, em alguns casos, imagens e manipulação em javascript ainda eram necessárias para implementar layouts.</p>
      <p>Agora, existem novas formas de selecionar elementos! É possível, apenas com CSS, fazer degradê, bordas arredondadas, manipulação de opacidade, sombras em texto e elementos, rotação de elementos, controle de perspectiva, animação, entre outras possibilidades. O trabalho do Web Designer foi consideravelmente facilitado com relação à criação de sites mais ricos e bem acabados visualmente.
      </p>
    </div>

    <div class="step-pane" id="step2">
     <h3>Como aplicar CSS em uma página?</h3>
     <p>
      Existem 3 formas básicas de aplicar css em uma página:
    </p>
    <ul>
      <li>
        <strong>Inline</strong>: que traduzido temos "em linha". Significa realizar alterações diretamente na tag do elemento a ser estilizado no código html, através do atributo chamado <code>style</code>.
        <div 
            class="two-columns-example row-fluid" 
            data-code-title="Veja como se insere CSS inline:"
            data-render-title="">
<p style="color: #FF0000;">
Oi! A cor deste parágrafo foi mudada inline através do <strong>atributo</strong> <code>style</code> na tag <code>p</code>.
</p>
        </div>
      </li>
      <li>
       <strong>Tag style</strong>: dentro do código html, é possível inserir uma <strong>tag</strong> de nome <code>style</code> que será lida apenas pelo navegador que pode conter o css de todos os elementos da página. 
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
  Oi! A borda deste parágrafo foi mudada através da tag <code>style</code>.
</p>
        </div>
     </li>
     <li>
      <strong>Arquivo externo</strong>: a forma mais utilizada e recomendada é
      colocar o css em um arquivo externo que terá que ser importado, através de
      um link entre arquivos, para a página HTML. Podem ser usados um ou mais
      arquivos e essa é uma decisão de organização do projeto que deve ser
      realizada de acordo com a complexidade dele. Esta é a forma mais
      recomendada pelos seguintes motivos:
      <ul>
        <li>
          Organização do projeto de um site separando a parte de conteúdo da
          parte visual em arquivos específicos de acordo com a linguagem (HTML
          ou CSS)
        </li>
        <li>
          Permitir que o mesmo estilo seja aplicado em diferentes páginas do
          mesmo site e facilitando a modificação visual de elementos similares,
          já que suas propriedades visuais estão num mesmo arquivo CSS.
        </li>
        <li>
          Ao aplicar um mesmo estilo a diferentes páginas de um mesmo site,
          evitamos a repetição de código no projeto e dessa forma economizamos
          na quantidade de dados enviados para o usuário, que em certos
          dispositivos e conexões com a internet podem fazer uma grande diferença
        </li>
      </ul>
      <p>
        Para inserir o CSS desta maneira, você precisa indicar o caminho de onde está o arquivo. Para isso, utilizamos a tag <code>link</code>, com os atributos <code>type</code> e <code>rel</code>, para indicar que o conteúdo do arquivo é uma folha de estilo em CSS, e o atributo <code>href</code> para indicar o caminho do arquivo:  <code>&lt;link rel="stylesheet" type="text/css" href="caminho/arquivo.css" /&gt;</code>
      </p>
      <p>
        Dentro de um arquivo CSS, escrevemos apenas as propriedades a serem atribuídas aos elementos, de forma totalmente independente do conteúdo HTML.
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
<code class="language-css">&lt;div class="exemplo-css-externo"&gt;Minha cor de fundo &eacute; #f0c6f9&lt;/div&gt;
</code></pre> 
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
<p>
  <span class="label label-warning">Importante</span> No próximo tópico, para que você aprenda um pouco mais sobre CSS, utilizaremos o 
  <strong>inline</strong> ou a tag <code>style</code> como forma de trabalho. No entanto, o mais recomendado (e sugerido por nós para ser <strong>sempre</strong> utilizado) 
  é o <strong>arquivo separado</strong>, que será abordado um pouco mais para o fim dessa aula!
</p>

</div>
      <div class="step-pane" id="step3">
        <h3>Declarando propriedades</h3>
        <p>
          Para inserir CSS inline, você precisa apenas declarar as propriedades
          que quer alterar e os valores dessas propriedades diretamente no
          elemento no código HTML, dentro do atributo style de cada tag, como pode 
          ser visto em: 
        </p>
        <p>
          <code>&lt;tag style="propriedade:valor;
          propriedade2:valor2;"&gt;&lt;/tag&gt;</code>               
        </p>
        <p>
          <span class="label label-warning">Importante</span> Atenção para o fato de que cada propriedade é separada por <code>;</code>.
        </p>
        <p>
          Quando vamos utilizar a tag <code>&lt;style&gt;</code> ou um arquivo
          externo para inserir CSS, precisamos primeiramente indicar os elementos que irão
          receber as propriedades visuais que vamos declarar. Para isso, utilizamos os denominados <span class="label label-inverse">Seletores</span>. Observe o exemplo 
          abaixo:
        </p>
        <div class="row-fluid">
          <div class="span6 offset3">
          <pre class="prettyprint linenums">
&lt;style type="text/css"&gt;
  /* Todo paragrafo terá texto de cor yellow 
     e sua fonte terá 14px */
  p {
    color: yellow;
    font-size: 14px;
  }
&lt;/style&gt; </pre>
          </div>
        </div>
      <p>
A seguir, temos 5 propriedades básicas de CSS para iniciarmos mais a fundo nosso estudo. São elas <code>color</code>, <code>font</code>, <code>border</code>, <code>width</code> e 
<code>height</code>.
      </p>
                
        <!--aqui começam as abas. Será uma aba para cada elemento-->
        <ul id="css-propriedades-1" class="nav nav-tabs" >
          <li class="active"><a href="#color" data-toggle="tab">Color</a></li>
          <li class=""><a href="#font" data-toggle="tab">Font</a></li>
          <li class=""><a href="#border" data-toggle="tab">Border</a></li>
          <li class=""><a href="#wh" data-toggle="tab">Width e height</a></li>
        </ul>   
        
        <div id="myTabContent" class="tab-content">
      <!--aba 1 lista-->
      <div class="tab-pane active in" id="color">
        <h4>Cor do texto - Color</h4>
        <p>
          <code>Color</code> (cor) é a propriedade CSS que nos permite mudar a cor do texto dos elementos.
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
      <div class="tab-pane in" id="font">
        <h4>Propriedades de fonte</h4>
        <p>
          Uma das principais formas de modificar o visual de uma página é realizar alterações em como o texto é exibido para o usuário. Para isso, temos <code>font-*</code> que representa um conjunto de propriedades que modificam a fonte tipográfica dos textos 
          exibidos em uma página HTML. Vejamos a seguir algumas delas:
        </p>
        
        <h5>Família de fonte: <code>font-family</code></h5>
        
        <div class="row-fluid">
          <div class="span6">
            <p>
              Esta propriedade indica qual será a fonte do texto e quais serão as fontes de reserva caso a desejada <a href="#" class="glossario pop" data-placement="top"
              data-original-title="Fontes e navegadores" data-content='Video de como funciona a renderização de fontes e como usar uma fonte externa com o google webfonts.'>não seja carregada pelo navegador</a>. Para definir as fontes, ou melhor, para <a href="#" class="glossario pop" data-placement="right" data-content='
              Termo mais comum no linguajar técnico.'>
              declarar</a> as fontes, definimos o elemento HTML em que ela será utilizada e inserimos em ordem de preferência as famílias separadas por vírgula. A sintaxe utilizada para este caso deve ser conforme o exemplo a seguir, que declara fontes para o elemento <code>p</code>:
            </p>
          </div>
          <div class="span6">
           <p>
            <code>p {font-family: 'Georgia', 'Courier New', serif;}</code>
          </p>
          <p>A declaração acima significa que todo elemento <code>p</code>, ou seja, todos os parágrafos da página serão exibidos com a fonte de nome <strong>Georgia</strong>. Caso o navegador não encontre esta fonte ou tenha problemas para exibi-la, ele utilizará a fonte de nome Courier New para a exibição dos parágrafos. E, por fim, caso esta também não funcione, ele utilizará qualquer fonte com <a href="#" class="glossario pop" data-placement="top"
            data-original-title="Serifa" data-content='explicação fonte com serifa e sem serifa'>serifa</a>, do inglês <strong>serif</strong>.</p>
          </div>
        </div>
      
          <h5>Tamanho da fonte: <code>font-size</code></h5>
          <div class="row-fluid">
            <div class="span6">
              <p>
                Com esta propriedade, conseguimos modificar o tamanho do texto numa página. Existem vários tipos de <a href="#" class="glossario pop" data-placement="top"
            data-original-title="Unidades de medida" data-content='Em CSS, utilizamos um sistema um pouco diferente de unidades de medida para as propriedades. Para saber mais sobre isso, sugerimos a tabela de conversão disponível na página <a href="http://reeddesign.co.uk/test/points-pixels.html" target="_blank">ReedDesign</a>.'>unidade de medida</a> para se declarar o tamanho da fonte, como pixels, porcentagem e pontos. Em nossos exemplos, utilizaremos <code>px</code> que é a unidade de medida em pixels.
              </p>
            </div>
            <div class="span6">
             <p>No exemplo abaixo, declaramos que todo parágrafo (ou seja, texto contido dentre as tags <code>&lt;p&gt;&lt;/p&gt;</code>) da página HTML terá seu texto exibido com tamanho de 14 pixels:</p>
             <p>
              <code>p {font-size: 14px;}</code>
            </p>
          </div>
        </div>
        <h5>Estilo de fonte: <code>font-style</code></h5>
        <div class="row-fluid">
          <div class="span6">
            <p>
              A propriedade <code>font-style</code> tem três possibilidades de valor a ser atribuído: normal, italic (traduzindo, itálico) e oblique 
              (traduzindo, oblíquo).
            </p>
            <p>Tipograficamente falando, <code>italic</code> é uma variante da fonte criada pelo designer tipográfico com o intuito de criar uma versão caligráfica e inclinada do texto. Já o valor <code>oblique</code> é uma forma simplificada na qual a fonte é inclinada em apenas alguns graus.
            </p>
          </div>
          <div class="span6">
          <p>O exemplo abaixo mostra como declarar esta propriedade a um elemento HTML, no caso <code>p</code>:</p>
          <p>
            <code>p {font-style: italic;}</code>
          </p>
           <p>
           <span class="label label-warning">Importante</span> O valor itálico é o mais utilizado, apesar de nem todas as fontes possuírem uma versão em itálico.
          </p>
        </div>
      </div>
        <h5>Peso da fonte:  <code>font-weight</code></h5>
        <div class="row-fluid">
          <div class="span6">
            <p>Para dar destaque a algum conteúdo, é comum deixarmos o texto em negrito. Para este caso, podemos dizer que aumentamos o "peso" da fonte. É desse contexto que vem o nome da propriedade, em que a palavra inglesa weight, quando traduzida para o protuguês, significa peso. Para ela, podemos atribuir cinco valores: <code>normal</code>, <code>bold</code> (negrito), <code>bolder</code> (um valor mais pesado que o negrito), <code>lighter</code> (que traduzido temos "mais leve", ou seja, que deixa a fonte mais "fina") e <code>inherit</code> (que traduzido temos "herdado", ou seja, ele recebe o valor que foi atribuído a elementos que o contém).
            </p>
          </div>
          <div class="span6">
            <p>
              Também é possível utilizar como valor a escala de números de 100, 200, 300, 400, 500, 600, 700, 800 e 900, sendo que 100 é o mais leve/fino e 900 o mais pesado/grosso. Entretanto, para usar esses valores é preciso verificar antes se a fonte escolhida possui essas variações, senão, não irá funcionar.
            </p>
            <p>Observe o exemplo abaixo:</p>
            <p>
              <code>p {font-weight: bold;}</code>
            </p>
          </div>
        </div>
        <h5>Altura da linha: <code>line-height</code></h5>
        <div class="row-fluid">
          <div class="span6">
            <p>
              A propriedade <code>line-height</code> refere-se à distância entre duas linhas de um texto, ou seja, controla o <strong>espaçamento</strong> das linhas. Os valores que podem ser atribuídos são similares aos possíveis no <code>font-size</code> e as medidas mais utilizadas são pixel, porcentagem ou valores numéricos. 
            </p>
            <p> 
              <span class="label label-warning">Importante</span> Ao utilizar a medida em pixel, você está atribuindo um valor <strong>estático/absoluto</strong> à linha, que independe de outras propriedades. Isso quer dizer que se, por exemplo, for atribuído 30px à altura da linha, ela terá sempre o espaçamento de 30px.
            </p>
          </div>
          <div class="span6">
            <p> 
              Porcentagem e numeral são valores <strong>dinâmicos</strong> que se baseiam no tamanho da fonte do texto. Por exemplo, se o texto tem o <code>font-size</code> de 14px, ao atribuir um <code>line-height</code> de 100%, a linha terá a altura de 14px. Mas, mantendo a <code>font-size</code> de 14px e atribuindo o valor 2 para a <code>line-height</code>, o espaçamento terá a altura de 28px, sendo 14px multiplicado por 2.</p>
              <p>
                <code>p {line-height: 2;}</code>
              </p>
            </div>
          </div>
        <h5>A propriedade <code>font</code></h5>
        <p>
          Diferentemente da propriedade <code>color</code> que recebe apenas um valor, a propriedade <code>font</code> é uma forma resumida de aplicar todas as propriedades acima de uma só vez. Para isso, deve-se escrever os valores desejados na seguinte ordem: <code>font-style</code>, <code><a href="#" class="glossario pop" data-placement="top"
          data-original-title="font-variant" data-content='Exibe o texto em pequena caixa alta (versalete) ou normal. Os valores aceitos são small-caps, para pequena caixa-alta, e normal.'>font-variant</a></code>, <code>font-weight</code>, <code>font-size</code>, <code>line-height</code> e <code>font-family</code>, conforme o exemplo a seguir:
        </p>
        <p>
          <code>p {font: italic, normal, bold, 14px, 100%, Georgia;}</code>
        </p>
        <p>
          <span class="label label-warning">Importante</span> Exceto <code>font-size</code> e <code>font-family</code>, as outras propriedades são opcionais.
        </p>
      </div>
       <div class="tab-pane in" id="border">
        <h4>Border</h4>
        <p>Com as propriedades <code>border-*</code> conseguimos modificar o estilo das bordas dos elementos HTML. Veja a seguir algumas delas:
        </p>
        <h5>Expessura da borda: <code>border-width</code></h5>
        <p>
          Podemos utilizar várias unidades de medida para a expessura da borda, mas a mais utilizada é pixels. 
        </p>
        <h5>Estilo da borda: <code>border-style</code></h5>
        <p>
          Passe o mouse nos valores abaixo para ver o estilo de cada borda no elemento <code>div</code>, o qual engloba o conteúdo com imagem e 
          texto. Para declarar os valores para essa propriedade, a sintaxe é <code>div {border-style: valor;}</code>.
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
                  $this->Html->image("machado.gif", array("alt" => "Baixar obra completa de Machado de Assis")), "http://machado.mec.gov.br/index.php?option=com_content&view=category&id=34&Itemid=123",
                  array('escape' => false, 'target' => 'blank')
              );
           ?>
           <p>Clique na imagem para baixar a obra completa de Machado de Assis</p>
        </div>
        <h5>Cor da borda: <code>border-color</code></h5>
        <p>
          As formas para declarar as cores da borda são similares às da propriedade <code>color</code>: através do sistema hexadecimal ou RGB. Veja o exemplo a seguir em que é declarada a cor vermelha (em RGB) para a borda:
        <p>
          <code>img {border-color: #000000;}</code>
        </p>
        <h5>A propriedade <code>border</code></h5>
        <p>
          Assim como para a propriedade <code>font</code>, a forma mais simplificada de declarar a borda é através da propriedade <code>border</code>.Ela já engloba as três propriedades descritas acima, sendo que a ordem deve ser <code>border-width</code>, <code>border-style</code> e <code>border-color</code>, como em <code>div {boder: 2px solid #444;}</code>
        </p>
        <p>
          <span class="label label-info">Fica a dica!</span>
          Você pode declarar a borda de cada lateral de um elemento separadamente, caso elas tenham estilos diferentes. Para isso, usamos as propriedades <code>border-top</code> (superior), <code>border-left</code> (esquerda), <code>border-bottom</code> (inferior) e 
          <code>border-right</code> (direita). Veja os exemplos a seguir:
        </p>
          <div 
            class="two-columns-example row-fluid" 
            data-code-title="Exemplo de elementos com bordas diferentes. (Dica: comece a notar a forma em que associamos as propriedades CSS aos elementos HTML)"
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
  Elemento com borda de 2 pixels serrilhada no topo e borda sólida de 2 pixels embaixo.
</div>
<div class="border-left-right">
  Elemento com borda sólida vermelha de 1 pixel à esquerda e verde à direita.
</div></div>
        </div>
        <div class="tab-pane in" id="wh">
            <h4>Width e height</h4>
            <p>
              Todo elemento HTML tem um formato retangular. Este é o chamado <strong>modelo de caixa</strong>, sendo que cada elemento é representado por uma caixa. Estas caixas podem ser agrupadas uma dentro da outra. Observe, por exemplo, <a href="http://escola.mupi.me/aulas/html#step2" target="blank">na aula de HTML</a> como as listas são construídas: todos os <code>li</code> estão contidos no elemento <code>ul</code>.
            </p>
            <p>
              Levando em consideração o formato do retângulo, todos os elementos possuem como propriedade a altura (height) e a largura (width). Estas duas propriedades podem ser definidas por CSS.
            </p>
            <p>
              Para definir os valores de <code>width</code> e <code>height</code>, podemos utilizar as unidades de medidas já apresentadas paras as outras propriedades.
            </p>
          
          <div 
            class="two-columns-example row-fluid" 
            data-code-title="Definindo largura e altura de uma div:"
            data-render-title="Note que o pai deste elemento é o retângulo que está em azul e a div de exemplo está com a metade da largura dele.">
<style type="text/css">
  div.exemplo-width-height{
    width: 50%;
    height: 200px;
    border: 1px solid #444;
  }
</style>
          <div style="background-color: #64a7f8;">
            <div class="exemplo-width-height">
              Yey! tenho 50% de largura que é 50% da largura do meu pai (elemento me contém) e 200 pixels de altura.
            </div>
          </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="step-pane" id="step4">
       <h3>Exercício para praticar!</h3>
        <p>
          Nesse exercício, iremos montar parte de uma rede
          social, ou seja, de um site. Será um <a href="#" class="mail-client pop"
             data-placement="top"
             data-original-title="Widget"
             data-content='Um componente de uma interface gráfica.'>
          widget</a> desse site com a função de mostrar sugestões de amigos para 
          o usuário. O designer enviou as especificações que podem ser visualizadas abaixo
          juntamente com uma imagem da versão final.
        </p>
        <p>
          Utilize o editor de código para colocar os estilos conforme é solicitado pelos itens a seguir. Os itens que já foram feitos estão marcados!
        </p>
        <ul>
          <li>Cada item de "sugestão de amigo" será separado por uma borda inferior cinza
          (#eee) de espessura de 1px.</li>
          <li class="done">A imagem do amigo sugerido ficará à esquerda e, o restante do
            texto, à direita, com um espaço de 10px entre eles.</li>
          <li>O elemento inteiro terá borda cinza (#eee) superior e à direita, com a mesma espessura da borda que separa os contatos (1px).</li>
          <li  class="done">No cabeçalho, o título ficará posicionado à esquerda e o link à
            direita; o background do cabeçalho será cinza.</li>
          <li>O nome do contato sugerido ficará em negrito e sua cor será #64522e.</li>
          <li>O item que indica amigos em comum será de cor #979590 e sua fonte terá
            tamanho de 12px.</li>
          <li>O elemento não terá borda a esquerda, de forma que possa parecer
            encaixado no site.</li>
          <li class="done">Haverá uma margem superior e esquerda de 10px e um
            padding de 20px inferior.</li>
          <li>O widget terá 275px de largura exatamente.</li>
          <li>As imagens de perfil devem ter tamanho de 50px, tanto na altura
          quanto na largura.</li>
          <li>A fonte utilizada em todo o elemento será 'Arial' e como segunda
          opção será uma fonte sans-serif.</li>
        </ul>
        
        <?php echo $this->Html->image('css_widget.png'); ?>
  
        <p>
          Atenção para o fato de que cada elemento a ser modificado está com o
          atributo <code>class</code> e o CSS a ser colocado para cada um deles está
          associado a essas classes. Veja que, dessa forma, você não precisa
          colocar propriedades CSS para cada um dos elementos, mas sim para
          uma classe inteira dele.
        </p>
        
        <div id="exercicio-css" class="tab-content">
          <!--aba 1 lista-->
          <div class="tab-pane active in" id="pratica">
      
            <?php echo $this->element('exercise-editor-full', array(
          "exClass" => "exPratic1"
          , "lang"    => "html"
          , "exTitle" => ""
          , "exRenderBtn" => "Mostrar"
          , "showRespBtn" => "Mostrar nossa solução"
          , "initialContent" => "
&lt;style type=&quot;text/css&quot;&gt;
  div.sugestoes-r {
    
    margin: 0 auto;
  }

  div.cabecalho-r {
    
    background-color: #f3f1f1;
  }

  h6.cabecalho_titulo-r {
    float: left;
    padding-left: 2px;
  }
  
  a.cabecalho_link-r {
    float: right;
    margin: 10px 2px;          
  }

  div.sugestao-r{
    
    margin-left: 10px;
    margin-top: 10px;
    padding-bottom: 20px;
  }

  div.sugestao_imagem-r {
    float: left;
    margin-right: 10px;
  }

  .sugestao_nome-r a {
    
    
  }

  .sugestao_info-r a {
    
  }

  a.sugestao_adicionar-r {
    
  }        
&lt;/style&gt;

&lt;div class=&quot;sugestoes-r&quot;&gt;
  &lt;div class=&quot;cabecalho-r clearfix&quot;&gt;
    &lt;h6 class=&quot;cabecalho_titulo-r&quot;&gt;Pessoas que voc&#234; talvez conhe&#231;a&lt;/h6&gt;
    &lt;a href=&quot;#&quot; class=&quot;cabecalho_link-r&quot;&gt;Ver todas&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;sugestoes_container-r&quot;&gt;
    &lt;div class=&quot;sugestao-r&quot;&gt;
      &lt;div class=&quot;sugestao_imagem-r clearfix&quot;&gt;
        &lt;img src=&quot;http://escola.mupi.me/img/marina.jpg&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;sugestao_dados-r&quot;&gt;
        &lt;div class=&quot;sugestao_nome-r&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Marina Mendez&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sugestao_info-r&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;7 amigos em comum&lt;/a&gt;
        &lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar-r&quot;&gt;Adicionar aos amigos&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sugestao-r&quot;&gt;
      &lt;div class=&quot;sugestao_imagem-r clearfix&quot;&gt;
        &lt;img src=&quot;http://escola.mupi.me/img/luisa.jpg&quot;&gt;              
      &lt;/div&gt;
      &lt;div class=&quot;sugestao_dados-r&quot;&gt;
        &lt;div class=&quot;sugestao_nome-r&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Luisa Bandeira&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sugestao_info-r&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;25 amigos em comum&lt;/a&gt;
        &lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar-r&quot;&gt;Adicionar aos amigos&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sugestao-r&quot;&gt;
      &lt;div class=&quot;sugestao_imagem-r clearfix&quot;&gt;
        &lt;img src=&quot;http://escola.mupi.me/img/joao.jpg&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;sugestao_dados-r&quot;&gt;
        &lt;div class=&quot;sugestao_nome-r&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Jo&#227;o Maria Carvalho&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sugestao_info-r&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;1 amigos em comum&lt;/a&gt;
        &lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar-r&quot;&gt;Adicionar aos amigos&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;"
          , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
          , "respTitle" => "Nossa solução"
          , "respRenderTitle" => "Fica assim:"
          , "respComment" => ""
          , "respContent" => "
&lt;style type=&quot;text/css&quot;&gt;
  div.sugestoes {
    width: 275px;
    margin: 0 auto;
    border-right: 1px solid #eee;
    font-family: &#39;Arial&#39; sans-serif;
  }

  div.cabecalho {
    border-top: 1px solid #eee;
    background-color: #f3f1f1;
  }

  h6.cabecalho_titulo {
    float: left;
    padding-left: 2px;
  }
  a.cabecalho_link {
    float: right;
    margin: 10px 2px;          
  }

  div.sugestao{
    border-bottom: 1px solid #eee;
    margin-left: 10px;
    margin-top: 10px;
    padding-bottom: 20px;
  }

  div.sugestao_imagem {
    float: left;
    margin-right: 10px;
                width: 50px;
                height: 50px;
  }

  .sugestao_nome a {
    color: #64522e;
    font-weight: bold;
  }

  .sugestao_info a {
    color: #979590;
    font-size: 12px;
  }

  a.sugestao_adicionar {
    color: #64522e;
  }        
&lt;/style&gt;

&lt;div class=&quot;sugestoes&quot;&gt;
  &lt;div class=&quot;cabecalho clearfix&quot;&gt;
    &lt;h6 class=&quot;cabecalho_titulo&quot;&gt;Pessoas que voc&#234; talvez conhe&#231;a&lt;/h6&gt;
    &lt;a href=&quot;#&quot; class=&quot;cabecalho_link&quot;&gt;Ver todas&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;sugestoes_container&quot;&gt;
    &lt;div class=&quot;sugestao&quot;&gt;
      &lt;div class=&quot;sugestao_imagem  clearfix&quot;&gt;
        &lt;img src=&quot;http://escola.mupi.me/img/marina.jpg&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;sugestao_dados&quot;&gt;
        &lt;div class=&quot;sugestao_nome&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Marina Mendez&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sugestao_info&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;7 amigos em comum&lt;/a&gt;
        &lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar&quot;&gt;Adicionar aos amigos&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sugestao&quot;&gt;
      &lt;div class=&quot;sugestao_imagem  clearfix&quot;&gt;
        &lt;img src=&quot;http://escola.mupi.me/img/luisa.jpg&quot;&gt;              
      &lt;/div&gt;
      &lt;div class=&quot;sugestao_dados&quot;&gt;
        &lt;div class=&quot;sugestao_nome&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Luisa Bandeira&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sugestao_info&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;25 amigos em comum&lt;/a&gt;
        &lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar&quot;&gt;Adicionar aos amigos&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sugestao&quot;&gt;
      &lt;div class=&quot;sugestao_imagem  clearfix&quot;&gt;
        &lt;img src=&quot;http://escola.mupi.me/img/joao.jpg&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;sugestao_dados&quot;&gt;
        &lt;div class=&quot;sugestao_nome&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Jo&#227;o Maria Carvalho&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sugestao_info&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;1 amigos em comum&lt;/a&gt;
        &lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar&quot;&gt;Adicionar aos amigos&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;"
          ));?>
          </div>
        </div>
    </div>
      <div class="step-pane" id="step5">
          <h2>Modelo de caixa</h2>
        <p>
          Ao explicar as propriedades de altura e largura, comentamos que todo elemento HTML tem o formato de uma caixa, mesmo que não seja visível ao usuário. Considerando este modelo, o esquema abaixo mostra as propriedades CSS referentes a ele:
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
              A borda pode ser definida através da propriedade <code>border</code>, a qual já estudamos. É, como o próprio nome diz, a borda do elemento e ela pode receber diferentes tipos de estilo.
            </div>
            <div id="exp-box-padding" class="explanation">
              A propriedade <code>padding</code> serve para definir o espaço <strong>interno</strong> que fica entre a borda e o conteúdo do elemento.
            </div>
            <div id="exp-box-conteudo" class="explanation">
              E o conteúdo é tudo que fica dentro das tags de cada elemento.
            </div>
          </div>
        </div>
        
          <p>
            <span class="label label-warning">Importante</span> As
            propriedades <code>margin</code> e <code>padding</code> são muito
            importantes para o visual da página. Elas dão o que podemos chamar de
            "respiro" ao conteúdo da página: os espaços entre, por exemplo,
            textos, imagens e seções fazem muita diferença para o usuário se
            sentir confortável ao navegar num site ou ler um texto.
          </p>
          <h3>Declarando margin e padding</h3>
          <p> 
            Seguindo a analogia da caixa, temos 4 lados que podem ser
            modificados, sendo eles: superior, esquerdo, direito e inferior. Assim
            como quando fazemos a declaração da borda, com essas duas propriedades
            podemos declarar tanto um por um dos lados (forma longa), quanto mais
            de um por vez (forma resumida), lembrando que neste caso, precisamos
            utilizar uma ordem específica. Veja os exemplos abaixo para verificar
            como faz:
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
            Abaixo algumas formas de declarar os valores de margin e padding:
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
     
     <div class="step-pane" id="step6">
        <h2>Posicionando</h2>
        <p>
          Agora que vimos como funciona o modelo de caixa e como alterar suas propriedades, 
          vamos aprender uma das partes mais importantes para montar um layout: 
          o <strong>posicionamento</strong> dos elementos.
        </p>
        <div class="row-fluid">
          <div class="span6">
            <p>Retomemos a página da nossa ONG de gatinhos como exemplo.</p>
            <p>
              Já sabemos como colocar cada elemento na página. No entanto, 
              só com HTML e as propriedades CSS que aprendemos até aqui, todo esse 
              conteúdo vai ficar numa sequência vertical, ou seja, um embaixo do outro, pois 
              esse é o fluxo normal dos elementos. Então, como colocaremos os
              links para as redes sociais e os links úteis do lado direito do
              site, relembrando que isto foi designado pelo mockup do site? E o
              slogan, como o posicionaremos ao lado do logo?
            </p>
            <p>Vamos ver isso agora!</p>
          </div>
          <div class="span4 offset1">
            <?php echo $this->Html->image('html_mockup_v2.jpg', array(
                            'alt' => 'Mock-up do site pedido pelo cliente'
                            , 'title' => 'Mock-up do site pedido pelo cliente'
                            , 'class' => 'img-polaroid'
            )); ?>
          </div>
        </div>
        
        <h4>"Flutuando" elementos</h4>
        <p>
          Uma das formas para posicionar os elementos é através da propriedade
          CSS chamada <code>float</code>. Essa propriedade pode receber um dos
          seguintes valores: <code>left</code>, <code>right</code>
          ou <code>none</code>, sendo que <code>left</code> flutua o elemento
          para a esquerda, <code>right</code> para direita e <code>none</code> o
          mantém sem flutuação. O valor <code>none</code> é o padrão.
        </p>
        <p>
          <span class="label label-warning">Importante</span> Para ter total controle sobre os elementos, ao usar 
          <code>float</code> é sempre bom definir a <code>width</code> (largura) dos elementos.
        </p>
        <p>
            Ao definir o <code>float</code> de um elemento, os elementos que
            estão depois dele (pensando no  arquivo HTML) são "puxados" para a
            mesma linha em que termina este elemento. Para fazer com que eles
            voltem ao fluxo normal, utilizamos a propriedade <code>clear</code>
            com o valor <code>both</code> no primeiro elemento que você deseja
            que volte à posição normal. Isso significa que o elemento
            com <code>clear</code> vai manter sua posição e não vai seguir o
            elemento que foi flutuado. Veja no exemplo abaixo como seria o
            layout do desenho acima. Preste atenção no <code>clear</code> da
            tag <code>footer</code>!
        </p>
        <p>
            <span class="label label-info">Fica a dica!</span> você pode brincar
            com o código abaixo clicando em "Edit on Codepen",
            <a href="#codePenModal" role="button"  data-toggle="modal">
              veja aqui uma demonstração.
            </a>
          </p>
          
          <pre class="codepen" data-height="360" data-type="result" data-href="qLJxs" data-user="anarute" data-safe="true">
            <code></code><a href="http://codepen.io/anarute/pen/qLJxs">Check out this Pen!</a></pre>
          <script async src="http://codepen.io/assets/embed/ei.js"></script>
         
          <h4>Posicionando elementos</h4>
          <p>
            Uma outra forma de posicionar os elementos na tela é utilizando a propriedade 
            <code>position</code>. Através dela, podemos dar exatamente a posição dos elementos 
            a partir de outros elementos ou da própria tela, através de medidas.
          </p>
          <p>
            Os valores possíveis para <code>position</code> são: <code>static</code>, 
            <code>relative</code>, <code>absolute</code>, <code>fixed</code> e 
            <code>inherit</code> (herdado do elemento pai). Veja a seguir um pouco sobre cada um desses valores.
          </p>
          <ol>
            <li>Static: é o valor padrão. O elemento se posiciona no fluxo normal do site. 
              <div class="row-fluid">
                  <div class="span7 offset2">
                  <pre class="prettyprint linenums">
section {
  position: static;
}
</pre>
                </div>
          
            </li>
            <li>Relative: o elemento é posicionado relativamente em relação ao fluxo normal. 
              Utilizamos as propriedades <code>top</code>, <code>left</code>, <code>bottom</code> e <code>right</code> 
              para deslocá-lo, sendo que cada propriedade dessas é referente à distância de cada 
              <strong>lado</strong> do elemento em relação aos outros elementos que estão no fluxo.
              <div class="row-fluid">
                  <div class="span7 offset2">
                  <pre class="prettyprint linenums">
section {
  position: relative;
  top: 10px; /* este elemento será deslocado 10 pixels para baixo */
  left: 200px; /* e 200 pixels entre a lateral esquerda e os outros elementos */
}
</pre>
                </div>
              </div>
            </li>
            <li>Absolute: o elemento assume um posicionamento absoluto em relação à <a href="#" 
              class="glossario pop" data-placement="top"
                data-original-title="Como assim?"
                data-content="Por exemplo, se uma div que está dentro de uma section estiver 
                com absolute, ela vai ser deslocada em relação à section apenas se esta estiver com 
                algum posicionamento diferente de static."><strong>posição</strong> do primeiro elemento que o contém</a>. 
                Elementos com posição absoluta são tirados do fluxo normal, ou seja, o seu deslocamento não afeta o 
                posicionamento dos elementos próximos. Se nenhum elemento que o contenha tiver posicionado, 
                ele se posiciona em relação à tela.
              <div class="row-fluid">
                  <div class="span7 offset2">
                  <pre class="prettyprint linenums">
section {
  position: absolute;
  right: 10px; /* este elemento será deslocado 10 pixels para esquerda, partindo do lado direito do elemento que o contém */
}
</pre>
                </div>
              </div>
            </li>
            <li>Fixed: o elemento assume a tela como referência para o seu posicionamento e mantém-se fixo mesmo 
              que o usuário mova a barra de rolagem. Veja, por exemplo, como está a barra superior deste curso, com as abas da aula: 
              ela não se mexe mesmo rolando a página.
              <div class="row-fluid">
                  <div class="span7 offset2">
                  <pre class="prettyprint linenums">
section {
  position: fixed;
  top: 0; /*o elemento fica fixo no topo do navegador, mesmo que o usuário role a página */
}
</pre>
                </div>
              </div>
            </li>
          </ol>
          <p>
            <span class="label label-info">Fica a dica!</span> Você pode usar o mesmo exemplo 
            sobre float que está acima para modificar o CSS e entender como as divs se posicionam. 
            Para isso, basta clicar em "Edit on Codepen".
          </p>
        </div>

         <div class="step-pane" id="step7">

     <?php echo $this->element('quiz', 
  array('exercicios'=> array(
      0 => array('Questão 1',
                  'Um conceito importante para entender a estrutura HTML/CSS e trabalhar com a mesma é o chamado:',
                   array(array('Modelo de caixa, em que cada propriedade CSS tem um formato retangular.'), 
                         array('Modelo de caixa, em que cada elemento HTML tem um formato retangular.' , true),
                         array('Modelo de caixa, em que cada lado da caixa representa um elemento HTML.'),
                         array('Modelo de caixa, mas também há o modelo do círculo, o modelo oval, entre muitos outros.')
                         ),
                   ' <p>No modelo de caixa, consideramos que todo elemento HTML tem um formato retangular, isto é, ele pode ser representado 
                   por uma caixa.</p>'
                 ),

      1 => array('Questão 2',
                  'As definições da linguagem CSS funcionam igualmente para todos os web navegadores.',
                   array(array('Verdadeira'),
                         array('Falsa' , true )
                         ),
                   '<p>Cada navegador trata de maneira diferente as propriedades CSS. Assim, é sempre importante testar seu projeto em diferentes navegadores e definir pontos como quais navegadores serão privilegiados, se o projeto será mais neutro entre os diferentes navegadores, abrindo mão de certas propriedades, etc.</p>'
                 ),

        2 => array('Questão 3',
                 'Sobre as formas de como aplicar CSS no código, a alternativa falsa é:',
                   array(array('Através de um arquivo externo de CSS, que terá que ser importado, através de um link entre arquivos, para a página HTML.'), 
                         array('Através da tag <code>&lt;style&gt;</code>, colocada dentro do código html, que determinará o estilo dos elementos através do uso de seletores.'),
                         array('A forma inline em que realizamos alterações diretamente na tag do elemento HTML, através do atributo chamado <code>style</code>.'), 
                         array('A forma inline em que realizamos alterações na mesma linha em que o está a tag do elemento HTML a ser estilizado, através de outra tag chamada <code>style</code>.', true )
                         ),
                   '<p>Apenas como lembrete, a forma mais recomendada é a utilização de arquivo externo.</p>'
                 ),

      3 => array('Questão 4',
                  'A linguagem CSS é a responsável pela parte visual das páginas. Dentre muitas propriedades, há duas que são muito importantes para a disposição dos conteúdos: elas fazem sua diagramação de forma flexível, dando "respiro" entre os elementos, e podem controlar as medidas das caixas, pensando neste modelo. Essas propriedades são:',
                   array(array('Margin e width'), 
                         array('Margin e padding', true ), 
                         array('Border e margin'),
                         array('Border e padding')             
                         ),
                   '<p>As propriedades margin e padding são muito importantes para o visual da página. Elas controlam os espaços entre, por exemplo, textos, imagens e seções, fazendo muita diferença para o usuário se sentir confortável ao navegar num site ou ler um texto.</p>'
                 ))    
  )); ?>
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
