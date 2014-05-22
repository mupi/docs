<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "Introdução ao HTML5",
 "aulas" => array(
  0 => array("Como funciona a internet", "internet"),
  1 => array("Sobre design", "design"),
  2 => array("Introdução ao HTML5", "html", true),
  3 => array("Introdução a CSS3", "css"),
  4 => array("JavaScript e jQuery", "js-jquery"),
  5 => array("Ferramentas externas",
    "ferramentas-basico"),
  )
 )); 
 ?> 
 <?php echo $this->element('wizard', array(
  "steps" => array(
   "Sobre essa aula",
   "O que é",
   "Tags 1",
   "Tags 2",                         
   "Estruturando",                                                     
   "Juntando tudo",                                         
   "Quiz"
   ))); ?>

 <?php 
 $this->Html->script("bootstro.js", array("inline" => false));
 $this->Html->script("exercise-inspector.js", array("inline" => false));
 $this->Html->script("html-lesson.js", array("inline" => false));
 $this->Html->css("html-lesson.css", null, array("inline" => false));
 $this->Html->css("bootstro.css", null, array("inline" => false));
 ?>

 <div class="container wizard-content navbar-fixed-top">
   <div class="step-content">


    <div class="step-pane active" id="step1">
      <p>abertura</p>
      <?php 
      echo $this->element('exercise-tree', array(
        "elements" =>  array(
          "html" => array(
            "head" => null,
            "body" => array(
              "h1" => null,
              "p" => null
              )
            )
          )
        , "showRespBtn" => "Veja nossa solução"
        , "exTitle" => "Organize os Elementos conforme o código ao lado"
        , "explanation" => "Issaê!"
        , "html" => "&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt; T&iacute;tulo &lt;/h1&gt;
    &lt;p&gt; Par&aacute;grafo &lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;"));
        ?> 
    </div>
    <div class="step-pane active" id="step2">
      <h3>O que é HTML?</h3>
      <p>
        <span class="label label-inverse">HTML</span>, sigla para Hypertext Markup Language ou em português Linguagem de Marcação de Hipertexto, é a linguagem utilizada para dar estrutura e semântica aos conteúdos durante o desenvolvimento de web sites. Mas, o que realmente isso quer dizer? 
        Bem, vamos por partes que ficará fácil! Primeiramente, é importante ter em mente as seguintes relações:
      </p>
      <ul>
        <li>As páginas Web são representadas por arquivos HTML.</li>
        <li>Os arquivos HTML são arquivos de texto, produzidos em qualquer editor de texto, cuja extensão é <code>.html</code>.</li>
        <li>O texto, contido nesses arquivos, é marcado por uma linguagem (HTML) que determina o papel de cada trecho dentro do texto.</li>
        <li>Esta marcação informa ao navegador web o papel de cada um desses trechos.</li>
        <li>O HTML não controla a aparência da página web.</li>
      </ul>
      <p>
        Para compreender o que quer dizer essas marcações que o HTML faz numa página, clique sobre os as palavras "Textos em parágrafos.", "item 1" e "item 2" e observe as modificações: 
      </p>
      <div class="row-fluid">
        <div class="span4">
          <div class="toinspect">
           <p>Textos em parágrafos.</p>
           <ul>
            <li>Item 1.</li>
            <li>Item 2.</li>
          </ul>
        </div>
        <pre class="code-clicked prettyprint">
        </pre>
      </div>
      <div class="span8">
       <p>
        Observe que, ao clicar sobre cada texto, é mostrado que os itens da lista estão entre <code>&lt;li&gt;&lt;/li&gt;</code> e o texto está entre <code>&lt;p&gt;&lt;/p&gt;</code>. Esses são alguns dos <span class="label label-inverse">elementos</span> do HTML. Os elementos são os objetos de uma página HTML que informam ao navegador o que representa cada trecho do arquivo HTML. Eles são um dos três principais componentes desta linguagem e os outros dois são os atributos e as tags.
      </p>
    </div>
  </div>
  <p>
    <span class="label label-inverse">Atributos</span> são as propriedades atribuídas aos elementos. Por exemplo, temos o atributo <code>href</code> que oferece ao elemento <code>&lt;a&gt;</code>, que determina um link, o caminho para onde um trecho de texto será direcionado: <code>&lt;a href="www.google.com"&gt;Busca&lt;/a&gt;</code>. Aqui, o texto "Busca" possuirá um link para a página www.google.com.
  </p> 
  <p>
    <span class="label label-inverse">Tags</span> são o que delimitam o início e o fim dos elementos de uma página. As tags são, em sua maioria, representadas por dois símbolos:
  </p>
  <p>
    <code>&lt;umatag&gt; </code> (abertura da tag "umatag”)
  </p>
  <p>
    <code>&lt;/umatag&gt; </code> (fechamento da tag "umatag”)
  </p>
  <p>
    Porém, existem tags que não englobam outros elementos. Nestes casos, não há uma tag específica para o fechamento, sendo da seguinte maneira:
  </p>
  <p>
    <code>&lt;outratag/&gt;</code> (tag sem fechamento)
  </p>
  <p>
    Mas, note que existe uma barra no fim da tag para fechá-la!
  </p>
  <h5>Sugestões para testar e usar!</h5>
  <ul>
    <li>
      Visualize o código-fonte de páginas no seu navegador! Para isso, clique com o botão direito em qualquer lugar da página e selecione a opção <strong>Exibir código-fonte</strong>. Você pode também utilizar o atalho <strong>Ctrl + U</strong>. 
    </li>
    <li>
      Comente seu código! Comentários inseridos no arquivo HTML não são visíveis quando renderizados em um navegador web. É sempre interessante inserir comentários para organizar seu código. Assim, caso outra pessoa ou você mesmo no futuro precisar realizar alterações, a identificação das partes projeto será facilitada. Para adicionar comentários ao código, utiliza-se a sintaxe &lt;!-- para marcar o início e --&gt; para o fim do comentário, como em <em>&lt;!-- isto é um comentário --&gt;</em>.
    </li>
  </ul>
  <div 
  class="two-columns-example row-fluid" 
  data-code-title="Veja o exemplo abaixo analisando os três componentes do HTML:"
  data-render-title="No navegador web, ele é apresentado assim:">
  <h5>Histórias da unha do dedão do fim do mundo</h5>
  <ul>
    <li>Poemas de Manoel de Barros</li>
    <li>Desenhos de Evandro Salles</li>
  </ul>
  <!--Video integrante da exposição "Arte para Crianças".-->
  <p>
    <a href="http://youtu.be/a-HDwM3jebY" target="_blank">Veja o vídeo!</a>
  </p>
</div>
<p>
  <span class="label label-info">Fica a
   dica!</span> <a href="http://www.webplatform.org" target="_blank">WebPlatform.org</a> é uma wiki, em inglê, com muito conteúdo sobre desenvolvimento web e boas práticas.
 </p>
 <p>
  <span class="label label-info">Fica a
   dica!</span> <a href="http://tableless.com.br/" target="_blank">Tableless</a> é um portal em português de conteúdo Front-End com vídeoaulas.
 </p>
 <p>
  <span class="label label-info">Fica a
   dica!</span> <a href="http://startupsthisishowdesignworks.com/" target="_blank">Startups, This Is How Design Works</a> é um guia em inglês que explica a importância do design.
 </p>

</div>      

<div class="step-pane active" id="step3">
  <h3>Usando tags e elementos</h3>
  <p>
    Pense na seguinte situação: você está produzindo um web site para um projeto de doação de animais. Este seu cliente está pedindo uma série de coisas e, dentre elas, que em uma das páginas haja uma lista lateral dividida em duas parte: uma com o nome dos cães e outra com o nome dos gatos. Além disso, no nome de cada animal haveria um link para uma nova página, a qual conteria sua foto e uma tabela com sua ficha. Durante a conversa, foi possível desenhar um esboço de como seria isso para que ele aprovasse:
  </p>

  <!-- TODO IMAGEM - esquema feito à mão do menu lateral e da página com a fotinha do gatinho e uma tabela-->

  <p>
    Listando tudo o que o seu cliente pediu, temos:
  </p>
  <ul>
    <li>
      Uma lista com dois itens: cão e gato.
    </li>
    <li>
      Duas sub-listas (uma para cada item acima): contendo o nome dos animais.
    </li>
    <li>
      Links: um link em cada nome de animal que levará para uma nova página.
    </li>
    <li>
      Imagem: uma página contendo a foto do animal.
    </li>
    <li>
      Tabela: na mesma página da foto, uma tabela para a ficha do animal.
    </li>
  </ul>

  <p>
    Agora, vamos por partes para produzir tudo o que ele pediu. Estude o conteúdo de cada aba abaixo e ao final teremos isso pronto!
  </p>
  <!--aqui começam as abas. Será uma aba para cada elemento-->
  <ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#lista" data-toggle="tab">Listas</a></li>
    <li class=""><a href="#links" data-toggle="tab">Hiperlink</a></li>
    <li class=""><a href="#imagens" data-toggle="tab">Imagem</a></li>
    <li class=""><a href="#quebras" data-toggle="tab">Quebra</a></li>
    <li class=""><a href="#tabela" data-toggle="tab">Tabela</a></li>
  </ul>

  
  <div id="myTabContent" class="tab-content">
    <!--aba 1 lista-->
    <div class="tab-pane fade active in" id="lista">
      <h4>Listas</h4>
      <p>
        Para montar uma lista, precisamos de dois elementos HTML: um elemento indicando que determinado trecho será uma lista e um elemento separando e identificando cada item desta lista. Para o primeiro caso temos o elemento <code>ul</code> e para o segundo, <code>li</code>. Veja o exemplo a seguir <strong>clicando</strong> nos itens: o elemento ul engloba os itens da lista através das tags <code>&lt;ul&gt; &lt;/ul&gt;</code>, sendo que a primeira abre e a segunda, com a /, fecha.
      </p>
      <div class="row-fluid">
        <div class="span2">
          <div class="toinspect">
            <div class="retangle">
              <ul>
                <li>item 1</li>
                <li>item 2</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="span6">
          <pre class="code-clicked prettyprint">
          </pre>
        </div>
        <div class="span4">
        </div>
      </div> 

      <div 
      class="two-columns-example row-fluid" 
      data-code-title="Voltando à solicitação do cliente, para fazer a primeira lista, de apenas dois itens, inserimos no HTML:"
      data-render-title="E como visualização no navegador temos:">
      <ul>
        <li>cão</li>
        <li>gato</li>
      </ul>
    </div>

    <!-- TODO - dá pra colorir as tags que forem par? -->
    <!-- 2 columns example -->      
    <div 
    class="two-columns-example row-fluid" 
    data-code-title="Agora, vamos fazer as outras duas listas, sendo uma com nome de gatos e outra com de cães. Devemos lembrar que elas serão sub-listas de cada um dos itens acima:"
    data-render-title="Como resultado no navegador temos as duas listas abaixo e o nosso trabalho para esse item pronto:">
    <ul>
      <li>
        cão 
        <ul>
          <li>nome cão 1</li>
          <li>nome cão 2</li>
          <li>nome cão 3</li>
        </ul>
      </li>
      <li> 
        gato
        <ul>
          <li>nome gato 1</li>
          <li>nome gato 2</li>
          <li>nome gato 3</li>
        </ul>
      </li>
    </ul>
  </div>
  <p>
    Agora que você já sabe como fazer uma lista, leia com a atenção os pontos a seguir para aprofundarmos o conhecimento sobre esse elemento. Existem dois tipos principais de listas: Unordered List (Lista não Ordenada), com o elemento <code>&lt;ul&gt;</code>, e Ordered List (Lista ordenada), com o elemento <code>&lt;ol&gt;</code>, sendo que ambas contêm o List Item (item de lista) representado pela tag <code>&lt;li&gt;</code>.
  </p>
  <div class="row-fluid">
    <div class="span4">
      <h5>Lista não Ordenada</h5>
      <ul>
        <li>
          Sintaxe: <code>&lt;ul&gt; &lt;/ul&gt;</code>
        </li> 
        <li>
          Descrição: contém uma série de itens cuja ordem <strong>não é relevante</strong>.
        </li>
        <li>
          Observação: o elemento <code>&lt;ul&gt;</code> só pode conter elementos do tipo "item de lista".
        </li>
      </ul>
    </div>   
    <div class="span4">
      <h5>Lista Ordenada:</h5>
      <ul>
        <li>
          Sintaxe: <code>&lt;ol&gt; &lt;/ol&gt;</code>
        </li>
        <li>
          Descrição: contém uma série de itens cuja ordem <strong>é relevante</strong>.
        </li>
        <li>
          Observação: o elemento <code>&lt;ol&gt;</code> só pode conter elementos do tipo "item de lista".
        </li>
      </ul>
    </div>   
    <div class="span4">
      <h5>Item de Lista</h5>
      <ul>
        <li>
          Sintaxe: <code>&lt;li&gt; &lt;/li&gt;</code>
        </li>
        <li>
          Descrição: contém qualquer grupo de elementos HTML.
        </li>
        <li>
          Observação: um item de lista só pode estar contido em uma lista.
        </li>
      </ul>
    </div>
  </div>
</div>

<!--aba 2 lista-->
<div class="tab-pane fade in" id="links">
  <h4>Hiperlinks</h4>
  <p>
    Agora, precisamos inserir os links em cada item que contém o nome de um animal.  
  </p>
  <p>
    Para inserir um 
    <a href="#" class="glossario" data-toggle="popover" data-placement="right" data-content='Hiperlink, ou apenas link (do inglês link – ligação) são responsáveis pela ligação de elementos a outras páginas.'>
      link</a> usamos o elemento a, que vem do inglês anchor (âncora). Sua construção é um pouco diferente pois dentro de sua tag há um 
      <a href="#" class="glossario" data-toggle="popover" data-placement="right" data-content='Atributo é uma propriedade aplicada ao elemento'>atributo</a> obrigatório chamado 
      <a href="#" class="glossario" data-toggle="popover" data-placement="right" data-content='Do inglês hyperlink reference – referência hiperlink'>href</a>. Este atributo indica o endereço para o qual estamos linkando aquele pedaço de texto clicável.
    </p>

    <div 
    class="two-columns-example row-fluid" 
    data-code-title=" Veja a seguir como fica o link no primeiro nome da lista, supondo que o endereço da página que contém a foto e a ficha do animal seja http://foto1.com:"
    data-render-title="E como resultado temos:">
    <ul>
      <li> cão  </li>
      <ul>
        <li> <a href="http://fotoc1.com"> nome cão 1 </a> </li>
        <li> nome cão 2 </li>
        <li> nome cão 3  </li>
      </ul>
      <li> gato </li>
      <ul>
        <li> nome gato 1  </li>
        <li> nome gato 2 </li>
        <li> nome gato 3  </li>
      </ul>
    </ul>
  </div>

  <p>
    Neste caso, ao clicar no item da lista "nome cão 1", a nova página será carregada sobre a atual. Para que a nova página seja aberta em uma nova aba do navegador, usamos outro atributo para o elemento a chamado <a href="#" class="glossario" data-toggle="popover" data-placement="right" data-content='Do inglês target que significa alvo.'>target</a>, que direciona para onde o link será aberto, e, para ele, damos o valor "_blank", ficando:
  </p>



  <div class="two-columns-example row-fluid">
    <a href="http://fotoc1.com" target="_blank"> nome cão 1 </a> 
  </div>

  <div 
  class="two-columns-example row-fluid" 
  data-code-title=" Pronto, agora basta para cada item acrescentar o link para onde ele será direcionado:"
  data-render-title="E como resultado temos:">
  <ul>
    <li> cão  
      <ul>
        <li> 
          <a href="http://fotoc1.com" target="_blank"> 
            nome cão 1 
          </a> 
        </li>
        <li> 
          <a href="http://fotoc2.com" target="_blank"> 
            nome cão 2 
          </a> 
        </li>
        <li>
          <a href="http://fotoc3.com" target="_blank"> 
            nome cão 3 
          </a> 
        </li>
      </ul>
    </li>
    <li> gato 
      <ul>
        <li> 
          <a href="http://fotog1.com" target="_blank"> 
            nome gato 1 
          </a> 
        </li>
        <li> 
          <a href="http://fotog2.com" target="_blank"> 
            nome gato 2 
          </a>
        </li>
        <li> 
          <a href="http://fotog3.com" target="_blank"> 
            nome gato 3 
          </a> 
        </li>
      </ul>
    </li>
  </ul>
</div>

      <!-- <p>
        Repare que até agora usamos apenas exemplos em que o valor de href é uma URL, como aprendido na <a href="internet/">aula 1</a>
      </p>
    -->
    <!-- Isso é explicação sobre link absoluto e relativo?? -->

    <h4>Exemplos</h4>
    <div class="two-columns-example row-fluid" >
      <!-- Link para uma pagina que esta na mesma pasta do arquivo onde este codigo est&aacute; -->
      <a href="outrapagina.html"> outra p&aacute;gina </a>
    </div>

    <div class="two-columns-example row-fluid" >
      <!-- Link para uma pagina referenciada com um caminho absoluto que abrira em uma nova pagina/aba -->
      <a href="http://www.matchboxideas.com.br" target="_blank"> Matchbox Ideas </a>
    </div>          
  </div>

  <!--aba 3 lista-->
  <div class="tab-pane fade in" id="imagens">
    <h3>Imagens</h3>
    <p>
      Chegamos no momento em que na nova página vamos inserir a foto do animal.
    </p>
    <p>
      Até aqui vimos que páginas web são representadas por arquivos HTML que, por sua vez, são arquivos de texto marcado por uma linguagem. Mas, se tudo é texto, como podemos inserir uma imagem em uma página?
    </p>
    <p>o elemento img, do inglês image (imagem). Este elemento possui um atributo obrigatótio chamado src e, além dele, há outros atributos, mas não obrigatórios, que podem ser dados. Vamos ver dois deles aqui:
    </p>
    <ul>
      <li>
        <span class="emph">alt</span> (do inglês alternative – alternativa): permite estipular um texto a ser mostrado como alternativa à imagem caso haja algum problema para encontrá-la ou caso o navegador não mostre imagens (leitores de tela para deficientes visuais é um exemplo)
      </li>
      <li>
        <span class="emph">title</span> (do inglês title – título): É o título da imagem. Muito usado para definir o conteúdo de tooltips<sup>4</sup>
      </li>
    </ul>



    <span class="emph">src</span> (do inglês source – fonte): Ele indica o endereço da imagem desejada. O valor deste atributo pode ser um endereço absoluto ou relativo<sup>3</sup>. 

    <p>Como usar:</p>
    <ul>
      <li>
        <span class="emph">Sintaxe:</span> 
        <code class="prettyprint">&lt;img src="imagens/logo.png" /&gt;</code> 
      </li>
      <li>
        <span class="emph">Descrição:</span>
        Mostra a imagem segundo o endereço contido no atributo src
      </li>
    </ul>

    <h4>Veja os seguintes exemplos de imagens</h4>
    <div class="two-columns-example row-fluid" >
      <!-- Imagem de logotipo do matchbox ideas localizada dentro da pasta 'imagens' com um texto alternativo -->
      <img src="imagens/logo_matchbox.png" alt="Matchbox Ideas" />
    </div>

    <div class="two-columns-example row-fluid" >
      <!-- Imagem de logotipo do matchbox ideas atraves de um caminho absoluto, com um texto alternativo e com um titulo-->
      <img src="http://www.matchboxideas.com.br/logo_matchbox.png" alt="Matchbox Ideas" title="Logotipo da empresa Matchbox Ideas"/>
    </div>
  </div>
  <!--aba 4 lista-->
  <div class="tab-pane fade in" id="quebras">

    <h3>Quebra de linha</h3>
    <ul>
      <li>
        <span class="emph">Sintaxe:</span>
        <code class="prettyprint">&lt;/br&gt;</code>
      </li> 
      <li>
        <span class="emph">Descrição:</span>
        Uma quebra de linha
      </li>
      <li>
        <span class="emph">Observação:</span>
        Quebras de linhas são, normalmente, utilizadas dentro de parágrafos em situações muito específicas. Como poesias ou endereços. 
        Não deve ser utilizada para espaçamento ou quebra de linha com o intuito de iniciar um novo parágrafo (neste caso utiliza-se uma nova tag 'p').
      </li>
    </ul>
  </div>

  <!--aba 5 lista-->
  <div class="tab-pane fade in" id="tabela">
    <h3>Tabela</h3>
    <p>
      Tabelas são compostas de diversos elementos aninhados. Mostraremos a forma mais simples, com as tags <code class="prettyprint">table</code>, <code class="prettyprint">tr</code>, <code class="prettyprint">th</code> e <code class="prettyprint">td</code>.
    </p>
    <ul>
      <li>
        <span class="emph">Sintaxe:</span> 
        <code class="prettyprint">&lt;table&gt; &lt;/table&gt;</code>
      </li>
      <li>
        <span class="emph">Descrição:</span> Representa uma tabela, é dentro dela que serão representados cabeçalhos, linhas, colunas, etc..
      </li>
    </ul>

    <h4>tr (table row - linha de tabela)</h4>
    <ul>
      <li>
        <span class="emph">Sintaxe:</span> 
        <code class="prettyprint">&lt;tr&gt; &lt;/tr&gt;</code>
      </li>
      <li>
        <span class="emph">Descrição:</span> Representa uma linha de uma tabela. É dentro deste elemento que representaremos cada dado (coluna) da tabela.
      </li>
    </ul>

    <h4>th (table header - cabeçalho de tabela)</h4>
    <ul>
      <li>
        <span class="emph">Sintaxe:</span> 
        <code class="prettyprint">&lt;th&gt; &lt;/th&gt;</code>
      </li>
      <li>
        <span class="emph">Descrição:</span> Representa um dado de cabeçalho para uma coluna da tabela.
      </li>
    </ul>

    <h4>td (table data - dado de tabela)</h4>
    <ul>
      <li>
        <span class="emph">Sintaxe:</span> 
        <code class="prettyprint">&lt;td&gt; &lt;/td&gt;</code>
      </li>
      <li>
        <span class="emph">Descrição:</span> Representa um dado de uma coluna da tabela.
      </li>
    </ul>


    <h4>Exemplo</h4>
    <div class="two-columns-example row-fluid">
      <table>
        <tr>
          <th> coluna 1 </th>
          <th> coluna 2 </th>
        </tr>
        <tr>
          <td> dado 1 1 </td>
          <td> dado 1 2 </td>
        </tr>
        <tr>
          <td> dado 2 1 </td>
          <td> dado 2 2 </td>
        </tr>
      </table>
    </div>
  </div>

</div>
</div>
<div class="step-pane active" id="step4">
  <p>teste step 4</p>

</div>
<div class="step-pane active" id="step5">
 <p>teste step 5</p>
</div>
<div class="step-pane active" id="step6">
 <p>teste step 6</p>

</div>
<div class="step-pane active" id="step7">
 <p>teste step 7</p>
 
 <?php echo $this->element('exercise-editor', array(
  "exClass" => "html1"
  , "lang"    => "html"
  , "exTitle" => "Crie uma lista não ordenada"
  , "exRenderBtn" => "Mostrar"
  , "showRespBtn" => "Mostrar nossa solução"
  , "initialContent" => "&lt;!-- Crie uma lista não ordenada --&gt;"
  , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
  , "respTitle" => "Nossa solução"
  , "respRenderTitle" => "Fica assim:"
  , "respContent" => "&lt;ul&gt;
  &lt;li&gt;Item 1&lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
  &lt;li&gt;Item 4&lt;/li&gt;
  &lt;/ul&gt;"
  ));?>


  <div class="row-fluid">
    <div class="span6">
      <div class="toinspect">
        <div class="retangle">
          <p> ae </p>
          <ul>
            <li>item 1</li>
            <li>item 2</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="span6">
      <pre class="code prettyprint linenums">
      </pre>
      <pre class="code-clicked prettyprint">
      </pre>
    </div>
  </div>


  <button id="start-html-summary">Começar</button> 
  
  <div>
    <ul>
      <li
      class="tourinspect" 
      data-bootstro-title="Este é um li! yay!!"
      data-bootstro-content="Este é o conteúdo da descrição do li"
      data-bootstro-placement="bottom",
      data-bootstro-html="true",
      data-bootstro-step="0"
      >
      A
    </li>
    <li
    class="tourinspect" 
    data-bootstro-title="Este é um li! yay!!"
    data-bootstro-content="Este é o conteúdo da descrição do li"
    data-bootstro-placement="bottom",
    data-bootstro-html="true",
    data-bootstro-step="2"
    >
    B
  </li>
  <li>C</li>
  <li
  class="tourinspect" 
  data-bootstro-title="Este é um li! yay!!"
  data-bootstro-content="Este é o conteúdo da descrição do li"
  data-bootstro-placement="bottom",
  data-bootstro-html="true",
  data-bootstro-step="1"
  >
  D
</li>
</ul>
</div>

</div>


</div>
</div>