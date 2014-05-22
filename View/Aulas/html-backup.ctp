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
                                 "Introdução ao HTML5"
                                 //"Sobre essa aula",
                                 //"O que é HTML", 
                                 //"Tags 1", 
                                 //"Tags 2",
                                 //"Estruturando o HTML",
                                 //"Hierarquia",
                                 //"Juntando tudo"
                                           ))); ?>

<?php 
  $this->Html->script("bootstro.js", array("inline" => false));
  $this->Html->script("inspector.js", array("inline" => false));
  $this->Html->script("html-lesson.js", array("inline" => false));
  $this->Html->css("html-lesson.css", null, array("inline" => false));
  $this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container wizard-content navbar-fixed-top">
  <!-- Steps content -->
  <div class="step-content">
    <div class="step-pane active" id="step1">
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
    </div>
    <div class="step-pane" id="step2">
      <h3>O que é HTML</h3>
      <p>
        HTML, sigla para <span class="en-expr">Hypertext Markup Language</span> ou em português 
        <span class="emph">Linguagem de Marcação de Hipertexto</span>, é a
        linguagem utilizada para o desenvolvimento de web sites que
        dá <span class="emph">estrutura</span> e <span class="emph">semântica</span> ao conteúdo.
      </p>

      <p>
        Vamos, agora, ver os principais componentes desta linguagem:
      </p>

      <dl>
        <dt>Elementos</dt>
        <dd>
          São os objetos de uma página HTML. Por exemplo, em uma dada página, há
          elementos que contêm outros, criando uma relação de pai e filho.
        </dd>

        <dt>Atributos</dt>
        <dd>
          São propriedades dos elementos. Por exemplo, o atributo 
          <code class="prettyprint">ID</code> que oferece ao elemento em que é
          colocado uma identificação única.
        </dd> 

        <dt>Tags</dt>
        <dd>
          São as tags que delimitam o início e o fim dos elementos de uma página. As tags são escritas com os sinais <code class="prettyprint"> &lt; &gt;</code> e as tags de fim são escritas com <code class="prettyprint">&lt;/ &gt;</code>
        </dd>
      </dl>

      <p>Veja o exemplo abaixo</p>

      <pre class="prettyprint linenums">&lt;a href="/blog" title="Ir pro blog"&gt; Blog &lt;/a&gt;</pre>

      <p>
        No elemento acima, temos:
        <ul>
          <li>
            <span class="emph">a</span>: representa o elemento a ser criado, neste caso um link.
          </li>
          <li>
            <span class="emph">href</span>: representa um atributo ao elemento <code class="prettyprint">&lt;a&gt;</code>, inserindo um hyperlink.
          </li>
          <li>
            <span class="emph">title</span>: representa outro atributo ao elemento <code class="prettyprint">&lt;a&gt;</code>. O atributo <span class="emph">title</span> oferece um texto ao link que é mostrado ao passar o mouse em cima. 
            <!--<span class="emph">alt</span>: representa outro atributo ao elemento <code class="prettyprint">&lt;a&gt;</code>. O atributo <span class="emph">alt</span> oferece um texto caso uma imagem não apareça ou não possa ser visualizada. <span class="label label-info">Info ++</span>Esse atributo aumenta a acessibilidade do site considerando que os leitores de tela usam esses textos, dados pelo alt, para leitura.-->
          </li>
        </ul>
      </p>
      <ul>
        <li>
          As tags são, em sua maioria, representadas por dois símbolos:
          <p>
            <code>&lt;umatag&gt; </code>(abertura da tag "umatag”)
          </p>
          <p>
            <code>&lt;/umatag&gt; </code>(fechamento da tag "umatag”)
          </p>
        </li>
        <li>
          Porém, existem tags que não englobam outros elementos. Nestes casos, não há uma tag específica para o fechamento, sendo da seguinte maneira:
          <p>
            <code>&lt;outratag/&gt;</code> (tag sem fechamento)
          </p>
          <p>
            Note que existe uma barra no fim da tag para fechá-la!
          </p>
        </li>
      </ul>

      <h3>Mais informações sobre o assunto</h3>

      <p>Dicas</p>
      <ul>
        <li>Para visualizar o código-fonte de páginas no seu navegador, clicar com lado direito na página e ir em "Exibir código-fonte". Você pode também utilizar o atalho Ctrl + U. </li>
        <li>Comente seu código! É sempre interessante inserir comentários para organizar seu código, assim, caso outra pessoa ou você mesmo no futuro precisar realizar alterações, a identificação das partes projeto será facilitada. Para adicionar comentários ao código, utiliza-se a sintaxe &lt;!-- para marcar o início e --&gt; para o fim do comentário. Por exemplo: <em>&lt;!-- isto é um comentário --&gt;</em></li>
      </ul>

      <p>Sites de referência:</p>
      <ul>
        <li><a href="http://www.webplatform.org" target="_blank">WebPlatform.org</a> - wiki bastante vasta com conteúdo sobre desenvolvimento web e boas práticas - em inglês</li>
        <li><a href="http://tableless.com.br/" target="_blank">Tableless</a> - portal em português de conteúdo Front-End</li>
        <li><a href="http://startupsthisishowdesignworks.com/" target="_blank">Startups, This Is How Design Works</a> - guia que explica a importância do design - em inglês</li>
      </ul>
    </div>

    <div class="step-pane" id="step3">
      <h3>Usando tags e elementos</h3>
      <p><!--TODO colocar borda{situação} que compreenda os dois próximos parágrafos-->
        Pense na seguinte situação: você está produzindo um web site para um projeto de doação de animais. Este seu cliente está pedindo uma série de coisas e, dentre elas, que em uma das páginas haja uma lista lateral dividida em duas parte: uma com o nome dos cães e outra com o nome dos gatos. Além disso, no nome de cada animal haveria um link para uma nova página a qual conteria sua foto e uma tabela com sua ficha. Durante a conversa, você desenhou mais ou menos como seria isso para que ele aprovasse:
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
        Bem, vamos por partes para produzir tudo o que ele pediu!
      </p>

      <h4>Listas</h4>
      <p>
        Para montar uma lista, precisamos de dois elementos HTML: um elemento indicando que determinado trecho será uma lista e um elemento separando e identificando cada item desta lista. Para o primeiro caso temos o elemento ul e para o segundo, li. Clique nos elementos abaixo e veja a estrutura de uma lista:
      </p>
      <!-- TODO - esquema com um quadradão(ul) e mini quadradinhos(li) e dois bot~poezinhos Li e ul. -->


      <!-- 2 columns example -->      
      <div 
        class="two-columns-example row-fluid" 
        data-code-title="Para fazer a primeira lista, de apenas dois itens, temos:"
        data-render-title="E como resultado temos:">
<ul>
  <li> cão  </li>
  <li> gato </li>
</ul>
      </div>

      <!-- TODO - dá pra colorir as tags que forem par? -->
      <!-- 2 columns example -->      
      <div 
        class="two-columns-example row-fluid" 
        data-code-title="Para fazer as outras duas listas, uma com nome de gatos e outra com de cães, devemos lembrar que elas serão sub-listas de cada um dos itens acima:"
        data-render-title="E como resultado temos:">
<ul>
  <li>
    cão 
    <ul>
      <li> nome cão 1  </li>
      <li> nome cão 2 </li>
      <li> nome cão 3  </li>
    </ul>
  </li>
  <li> 
    gato
    <ul>
      <li> nome gato 1  </li>
      <li> nome gato 2 </li>
      <li> nome gato 3  </li>
    </ul>
  </li>
</ul>
      </div>
      

      
      <p>
        Para fazer as outras duas listas, uma com nome de gatos e outra com de cães, devemos lembrar que elas serão sub-listas de cada um dos itens acima:
      </p>
      
      <p>
        Pronto, temos as duas listas! 
      </p>
      <p>
        Agora que você já sabe como fazer uma lista, leia com a atenção os pontos abaixo.
      </p>
      <p>
        Existem dois tipos principais de listas: Unordered List (Lista não Ordenada) com o elemento ul e Ordered List (Lista ordenada) com o elemento ol. Veja a seguir a descrição de cada um bem como do elemento li:
      </p>

      <h5>Lista não Ordenada</h5>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span>
          <code class="prettyprint">&lt;ul&gt; &lt;/ul&gt;</code>
        </li> 
        <li>
          <span class="emph">Descrição:</span> 
          Contém uma série de itens cuja ordem não é relevante
        </li>
        <li>
          <span class="emph">Observação:</span>
          O elemento ul só pode conter elementos do tipo "item de lista" (explicado abaixo)
        </li>
      </ul>

      <h5>Lista Ordenada:</h5>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <code class="prettyprint">&lt;ol&gt; &lt;/ol&gt;</code>
        </li>
        <li>
          <span class="emph">Descrição:</span> 
          Contém uma série de itens cuja ordem é relevante
        </li>
        <li>
          <span class="emph">Observação:</span>
          O elemento ol só pode conter elementos do tipo "item de lista" (explicado abaixo)
        </li>
      </ul>

      <h5>Item de Lista</h5>
      <p>
        Os dois tipos de listas explicados acima só fazem sentido quando contém seus devidos itens. Para ambos um item é representado por uma tag li (do inglês List Item – Item de Lista).
      </p>

      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <code class="prettyprint">&lt;li&gt; &lt;/li&gt;</code>
        </li>
        <li>
          <span class="emph">Descrição:</span>
          Contém qualquer grupo de elementos HTML
        </li>
        <li>
          <span class="emph">Observação:</span>
          Um item de lista só pode estar contido em uma lista</li>
      </ul>

      <h4>Veja os seguintes exemplos de listas</h4>

      <!-- 2 columns example -->      
      <div 
        class="two-columns-example row-fluid" 
        data-code-title="Para fazer a primeira lista ordenada de apenas dois itens, temos:"
        data-render-title="E como resultado temos:">
<!-- lista ordenada -->
<ol>
  <li>Um item</li>
  <li>Outro item</li>
</ol>
      </div>


      <!-- 2 columns example -->      
      <div 
        class="two-columns-example row-fluid" 
        data-code-title="Para fazer a primeira lista, n&atilde;o ordenada, de apenas dois itens, temos:"
        data-render-title="E como resultado temos:">
<!-- lista nao ordenada -->
<ul>
  <li>Um item</li>
  <li>Outro item</li>
</ul>
      </div>

      <!-- TODO - se rolar, colocar lista com botão: uma pra ol e outra pra ul -->

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


      <h3>Tabela</h3>
      <p>
        Tabelas são compostas de diversos elementos aninhados. Mostraremos a forma mais simples, com as tags <code class="prettyprint">table</code>, <code class="prettyprint">tr</code>, <code class="prettyprint">th</code> e <code class="prettyprint">td</code>.
      </p>

      <h4>table (tablela)</h4>
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

    <div class="step-pane" id="step4">


      <h3>Seções</h3>
      Temos um elemento básico, section (do inglês section – seção) que pode ser comparado a uma seção de um livro, ou seja, agrupa elementos que se relacionam.
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <code class="prettyprint">&lt;section&gt; &lt;/section&gt;</code>
        </li>
        <li>
          <span class="emph">Descrição:</span> pode conter qualquer<sup>1</sup> conjunto de elementos HTML
        </li>
      </ul>

      <p>
        Temos então outros elementos, que são como seções para conteúdos mais específicos. São eles: 
      </p>

      <h4>header (do inglês header – cabeçalho)</h4>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <code class="prettyprint">&lt;header&gt; &lt;/header&gt;</code>
        </li>
        <li>
          <span class="emph">Descrição:</span> representa o cabeçalho de um elemento
        </li>
      </ul>


      <h4>footer (do inglês footer – rodapé)</h4>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <code class="prettyprint">&lt;footer&gt; &lt;/footer&gt;</code>
        </li>
        <li>
          <span class="emph">Descrição:</span> representa o rodapé de um elemento
        </li>
      </ul>


      <h4>aside (do inglês aside – ao lado)</h4>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <code class="prettyprint">&lt;aside&gt; &lt;/aside&gt;</code>
        </li>
        <li>
          <span class="emph">Descrição:</span> representa conteúdo que seja lateral, que tangencie o conteúdo principal dos elementos que o rodeiem.
        </li>
      </ul>

      <h3>Div</h3>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <pre class="prettyprint linenums">&lt;div&gt; &lt;/div&gt;</pre>
        </li>
        <li>
          <span class="emph">Descrição:</span> 
          Container do tipo bloco<sup>1</sup> de semântica não definida utilizado para agrupar/classificar outros elementos segundo uma semântca definida pelo desenvolvedor. 
        </li>
        <li>
          <span class="emph">Observação:</span>
          Sempre que possível utilizar containers mais apropriados (header, aside, footer, section, article, etc...)
        </li>
      </ul>

      <h3>Span</h3>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <pre class="prettyprint linenums">&lt;span&gt; &lt;/span&gt;</pre>
        </li>
        <li>
          <span class="emph">Descrição:</span>
          Container do tipo inline<sup>2</sup> de semântica não definida utilizado para agrupar/classificar outros elementos segundo uma semântca definida pelo desenvolvedor. 
        </li>
      </ul>

      <h3>Nav</h3>
      <ul>
        <li>
          <span class="emph">Sintaxe:</span> 
          <pre class="prettyprint linenums">&lt;nav&gt; &lt;/nav&gt;</pre>
        </li>
        <li>
          <span class="emph">Descrição:</span> 
          Container para links de navegação (como um section para links) 
        </li>
      </ul>

      <h4>Referências úteis</h4>
      <ul>
        <li>para consultar sobre HTML 4 e 5
          <ul>
            <li><a href="http://www.webplatform.org/">webplatform.org</a></li>
            <li><a href="https://developer.mozilla.org/pt-BR/docs/HTML">developer.mozilla.org/pt-BR/docs/HTML</a></li>
          </ul>
        </li>
        <li><a href="caniuse.com">caniuse.com</a> para saber sobre o suporte dos browsers</li>
      </ul>

      <p>
        <sup>1</sup> Qualquer é uma generalização. Elementos como html, body e head, por exemplo, não se encaixam neste caso.
      </p>
      <p>  
        <sup>2</sup> Existe outro elemento que pode conter itens de lista (menu), porém ele não será ensinado neste curso.
      </p>
      <p>  
        <sup>3</sup> Um endereço relativo, neste caso tem como ponto de origem a pasta onde está a página HTML e é representado através de um caminho de pastas separados pelo caractere "/". O endereço absoluto é um endereço de uma imagem que não esteja necessariamente no mesmo servidor que a página HTML; neste caso ele é representado por um caminho do tipo "http://www.site.com/pasta/imagem.jpeg"
      </p>
      <p>  
        <sup>4</sup> Tooltips são caixas flutuantes que são mostradas quando o ponteiro do mouse passa por certo elemento
      </p>

    </div>

    <div class="step-pane" id="step5">
      <h2>Estrura básica de uma página HTML</h2>
      <p>
        <span class="label label-warning">Sugestão</span> Utilize um editor para estudar estes tópicos. Assim, você conseguirá testar o que está aprendendo copiando os trechos de código aqui dados em seu editor instalado. Ah! Antes, <a href="#">aprenda mais sobre editores</a>!

        <!-- TODO arquivo zip com estrtura de pastas e um html de estrtura básica + comentário sobre editor -->
      </p>
      A estrutura básica de uma página HTML é a seguinte (note o aninhamento dos elementos!):

      <div 
        class="two-columns-example row-fluid" 
        data-code-title="A estrutura básica de uma página HTML é a seguinte (note o aninhamento dos elementos!):">
<!DOCTYPE html> <!-- Tipo do documento -->
<html lang="pt">
<head>
  <!-- Metainformações -->
</head>
<body>
  <!-- Corpo da página -->
</body>
</html>
      </div>


      <h3>Vamos entender cada elemento mostrado:</h3>
      <p>
        <code class="prettyprint">&lt;!DOCTYPE html&gt; </code>
        Indica ao navegador que ele deve ler esta página segundo os padrões HTML (navegadores leem outros tipos de documentos também)
      </p>
      <p>
        <code class="prettyprint">&lt;html&gt;</code> e <code class="prettyprint">&lt;/html&gt;</code> 
        Raiz da hierarquia HTML, é dentro dela que todos os outros elementos devem ficar
      </p>
      <p>
        <code class="prettyprint">&lt;head&gt; </code>e <code  class="prettyprint">&lt;/head&gt;</code>
        Contém metainformações/metadados ou seja, é dentro deste elemento que informações sobre o documento serão colocadas (exemplo: título, tipo de caractere utilizado, etc..). O conteúdo do head em sua maior parte não é mostrado ao usuário.
      </p>
      <p>
        <code class="prettyprint">&lt;body&gt;</code> e <code  class="prettyprint">&lt;/body&gt;</code>
        Contém o conteúdo principal do documento, aquele que será mostrado ao usuário.
      </p>
      <p>
        <code class="prettyprint">&lt;!--</code> e <code  class="prettyprint">--&gt;</code>
        Tudo que é colocado entre estes símbolos é chamado de comentário. Comentários são enviados ao cliente mas não são interpretados pelos navegadores e, portanto, não são mostrados ao usuário. Eles são muito utilizados pelos desenvolvedores para documentar o código HTML do documento.
      </p>
      <p>
        Importante: Estes elementos são o mínimo necessário para uma página HTML e eles não se repetem dentro de um documento HTML, isto é, um documento HTML não possui mais de um elemento html, head e body
      </p>

    </div>

    <div class="step-pane" id="step6">
      <p>Fazer um video sobre hierarquia - montar roteiro e fazer mo educreation</p>
    </div>

    <div class="step-pane" id="step7">
      <p>página com caminho javascript do bauduko</p>

    </div>
  </div>
</div>
