<?php 
  echo $this->element('breadcrumb', array(
    "curso" => "Web Design para iniciantes",
    "aula"  => "Introdução ao HTML5",
    "aulas" => array(
      0 => array("Como funciona a internet", "internet"),
      1 => array("Sobre design", "design"),
      2 => array("Introdução ao HTML5", "html", true),
      3 => array("Introdução a CSS3", "css"),
      4 => array("Estrutura básica de projeto", "estrutura-projeto"),
      5 => array("JavaScript e jQuery", "js-jquery"),
      6 => array("Ferramentas externas","ferramentas-basico"),
      7 => array("Projetos","projetos-webdesign"),
    )
  )); 
 ?> 
 <?php 
  echo $this->element('wizard', array(
    "steps" => array(
      "O que é",
      "Tags 1",
      "Pratique",
      "Tags 2",  
      "Pratique",                                                                                               
      "Quiz"
 ))); ?>

 <?php 
   $this->Html->script("bootstro.js", array("inline" => false));
   $this->Html->script("exercise-inspector.js", array("inline" => false));
   $this->Html->script("html-lesson.js", array("inline" => false));
   $this->Html->css("html-lesson.css", null, array("inline" => false));
   $this->Html->css("exercise-inspector.css", null, array("inline" => false));
   $this->Html->css("bootstro.css", null, array("inline" => false));
 ?>

 <div class="container wizard-content navbar-fixed-top">
   <div class="step-content">

    <div class="step-pane active" id="step1">
      <h3>O que é HTML?</h3>
      <p>
        <span class="label label-inverse">HTML</span>, sigla para Hypertext
        Markup Language ou em português Linguagem de Marcação de Hipertexto,
        é a linguagem utilizada para dar estrutura e semântica aos conteúdos
        durante o desenvolvimento de web sites. 
      </p>
      <p>
        <span class="label label-inverse">HTML5</span> é na verdade a nova
        versão do HTML. Uma das principais características dessa versão é 
        facilitar a  manipulação dos elementos de uma página, uma vez que ele
        fornece ferramentas que facilitam o trabalho do 
        <a href="css" target="_blank">CSS</a> e do 
        <a href="js-jquery" target="_blank">Javascript</a>.
      </p>
      <p>
        Uma outra vantagem do HTML5 é facilitar a compatibilidade dos sites
        entre os diferentes navegadores que existem. Em outras versões do HTML
        às vezes era necessário fazer o mesmo site praticamente duas vezes para
        que funcionasse como desejado no navegador Internet Explorer, por 
        exemplo. Neste curso, estudaremos a parte relacionada à semântica dos
        elementos, que influencia na forma de escrever o código e de organizar a
        informação na página.
      </p>
      <p>
       Mas, o que realmente isso quer dizer? 
        Bem, vamos por partes que ficará fácil! Primeiramente, é importante ter
        em mente as seguintes relações:
      </p>
      <ul>
        <li>As páginas Web são representadas por arquivos HTML.</li>
        <li>Os arquivos HTML são arquivos de texto, produzidos em editores de código fonte (não como o Microsoft Word), cuja <a href="#" class="glossario pop" data-placement="top"
          data-original-title="Extensão"
          data-content='O nome dos arquivos é composto por duas partes: uma é o seu nome propriamente dito e a outra é sua extensão, indicando de qual tipo ele é. Ela possui geralmente 3 ou 4 caracteres precedidos por um ponto e é colocada ao final do nome do arquivo. Acesse o <a href="http://pt.wikipedia.org/wiki/Extens%C3%A3o_de_nome_de_ficheiro" target="_blank">verbete</a> sobre isso da Wikipedia para visualizar alguns exemplos.'>
          extensão </a> é <code>.html</code>.</li>
          <li>O texto contido nesses arquivos é marcado por uma linguagem (HTML) que determina o papel de cada trecho ali presente.</li>
          <li>Esta marcação informa ao navegador web o papel de cada um desses trechos.</li>
          <li>O HTML não controla a aparência e o estilo da página web. Para isso, temos o <a href="css" target="_blank">CSS</a>.</li>
        </ul>
        <p>
          Para compreender o que quer dizer essas marcações que o HTML faz numa página, clique sobre os as palavras "Textos em parágrafos.", "item 1" e "item 2" e observe na caixa abaixo deles como eles são representados em HTML: 
        </p>
        <div class="row-fluid">
          <div class="span4">
            <div class="inspector-container row-fluid">
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
        </div>
        <div class="span8">
         <p>
          Observe que, ao clicar sobre cada texto, é mostrado que os itens da lista estão entre <code>&lt;li&gt;</code> e <code>&lt;/li&gt;</code>, o texto está entre <code>&lt;p&gt;</code> e <code>&lt;/p&gt;</code> e que os dois elementos <code>li</code> estão entre <code>&lt;ul&gt;</code> e <code>&lt;/ul&gt;</code>. Esses são alguns dos <span class="label label-inverse">elementos</span> do HTML. Os elementos são os objetos de uma página HTML que informam ao navegador o que representa cada trecho do arquivo HTML. Eles são um dos três principais conceitos desta linguagem, sendo os outros dois os atributos e as tags.
        </p>
      </div>
    </div>

    <p>
      <span class="label label-inverse">Tags</span> As tags delimitam o início e o fim
      dos elementos de uma página. Elas não aparecem no navegador e são, em sua maioria,
      representadas por dois símbolos:
    </p>
    <ul>
      <li><code>&lt;umatag&gt;</code>  (abertura da tag "umatag”)</li>
      <li><code>&lt;/umatag&gt;</code>  (fechamento da tag "umatag”)</li>
    </ul>
    <p>
      No entanto, existem tags que possuem o fechamento em si mesma, ficando a sintaxe
      da seguinte maneira:
    </p>
    <p>
      <code>&lt;outratag /&gt;</code> (tag sem fechamento)
    </p>
    <p>
      Note que existe uma barra no fim da tag! Esta barra é obrigatória e é ela quem fecha a tag.
    </p>
    <p>
      <span class="label label-inverse" id="atributo">Atributos</span>
      Atributos são as propriedades atribuídas aos elementos. Sua sintaxe é sempre descrita com seu nome, o sinal de "=" e um valor entre aspas: <code>nomeDoAtributo="valor"</code>. Por exemplo, para o elemento <code>a</code>, que determina um link, temos o atributo <code>href</code> que indica o caminho para onde o usuário será direcionado quando clicar em um certo trecho de texto. Veja em <code>&lt;a href="http://pt.wikipedia.com"&gt;Wikipedia&lt;/a&gt;</code>, o texto "Wikipedia" possui um link para a página http://pt.wikipedia.com.
      Na página mostrada pelo navegador 
    </p> 
    <p>
      <span class="label label-warning">Importante</span>
      Lembre-se que o papel do HTML é estruturar e dar semântica à cada parte do
      conteúdo. Deve-se pensar e entender cada elemento utilizado, de forma a
      construir páginas bem estruturadas e semânticas.
    </p>

    <h5>Sugestões para testar e usar!</h5>
    <ul>
      <li>
        Visualize o código-fonte de páginas no seu navegador! Para isso, clique com o botão direito em qualquer lugar da página e selecione a opção <strong>Exibir código-fonte</strong>. Você pode também utilizar o atalho <strong>Ctrl + U</strong>. 
      </li>
      <li>
        Comente seu código! Comentários inseridos no arquivo HTML não são visíveis quando renderizados em um navegador web. É sempre interessante inserir comentários para organizar seu código. Assim, caso outra pessoa ou você mesmo no futuro precise realizar alterações, a identificação das partes projeto será facilitada. Para adicionar comentários ao código, utiliza-se a sintaxe <code>&lt;!--</code> para marcar o início e <code>--&gt;</code> para o fim do comentário, como em <code>&lt;!-- isto é um comentário --&gt;</code>.
      </li>
    </ul>
    <div 
    class="two-columns-example row-fluid" 
    data-code-title="Veja o exemplo abaixo analisando os três conceitos do HTML que aprendemos (elementos, tags e atributos), além dos comentários. Você consegue identificá-los?"
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
    <span class="label label-info">Fica a dica!</span>
    <a href="http://www.webplatform.org" target="_blank">WebPlatform.org</a>
    é uma wiki, em inglês, com muito conteúdo sobre desenvolvimento web e boas
    práticas.
  </p>
  <p>
    <span class="label label-info">Fica a dica!</span>
    <a href="http://tableless.com.br/" target="_blank">Tableless</a> é um
    portal em português de conteúdo Front-End com vasto acervo de artigos sobre o assunto.
  </p>
  <p>
    <span class="label label-info">Fica a dica!</span> 
    <a href="http://startupsthisishowdesignworks.com/" target="_blank">Startups, 
      This Is How Design Works</a> é um guia em inglês que explica a importância do
      design.
    </p>

  </div>      

  <div class="step-pane active" id="step2">
    <h3>Usando tags e elementos</h3>
     <div class="row-fluid">
      <div class="span8">
        <p>
          Pense na seguinte situação: você está produzindo um web site para um projeto
          de adoção de gatos chamado <strong>Caipora</strong>. O cliente, neste momento, 
          está descrevendo uma versão inicial do que ele gostaria que o site contivesse:
        </p>
        <p>
          "No site do Caipora, deve haver uma lista dos animais que estão para adoção. 
          Nesta lista, haverá uma foto de cada animal e algumas
          informações sobre ele, como nome, idade e peso. Deixe espaço para uma tabela na qual 
          será indicada a quantidade de alimentação relacionada às informações dadas sobre os animais.
          Além disso, haverá uma seção de dicas de cuidados
          com estes animais, com sugestões de links".
        </p>
        <p>
          Durante a conversa, foi possível desenhar um esboço de como seria isso
          para que ele aprovasse:
        </p>
      </div>
      
      <div class="span4">
        <?php echo $this->Html->image('html_mockup_v1.jpg', array(
            'alt' => 'Mock-up do site pedido pelo cliente'
          , 'title' => 'Mock-up do site pedido pelo cliente'
          , 'class' => 'img-polaroid'
        )); ?>
      </div>
    </div>
    <p>
      Vamos então produzir tudo o que ele pediu. Estude o conteúdo de 
      cada aba abaixo e ao final teremos isso pronto!
    </p>
    
    <!--aqui começam as abas. Será uma aba para cada elemento-->
    <ul id="myTab" class="nav nav-tabs" >
      <li class="active"><a href="#lista" data-toggle="tab">Listas</a></li>
      <li class=""><a href="#links" data-toggle="tab">Hiperlink</a></li>
      <li class=""><a href="#imagens" data-toggle="tab">Imagem</a></li>
      <li class=""><a href="#tabela" data-toggle="tab">Tabela</a></li>
      <li class=""><a href="#textuais" data-toggle="tab">Textuais</a></li>
    </ul>   

    <div id="myTabContent" class="tab-content">
      <!--aba 1 lista-->
      <div class="tab-pane active in" id="lista">
        <h4>Listas</h4>
        <p>
          Para montar uma lista, precisamos de dois elementos HTML: um elemento
          indicando que determinado trecho será uma lista e um elemento
          separando e identificando cada item desta lista. Para o primeiro caso
          temos o elemento <code>ul</code> e para o segundo, <code>li</code>.
        </p>
        <p>
          <strong>Clique</strong> na caixa cinza a seguir para verificar: o elemento 
          <code>ul</code> engloba os itens da
          lista (representados por <code>&lt;li&gt;</code> 
          <code> &lt;/li&gt;</code>) através das tags <code>&lt;ul&gt;</code> e 
          <code> &lt;/ul&gt;</code>, sendo que a primeira tag é utilizada na
          abertura e a segunda, com a <code>/</code>, no fechamento.
        </p>
        <div class="row-fluid">
          <div class="inspector-container">
            <div class="toinspect span6">
<ul> 
  <li>item 1</li>
  <li>item 2</li>
</ul>
            </div>
            <div class="span6">
              <pre class="code-clicked prettyprint">
              </pre>
            </div>
          </div>
        </div> 

        <div 
        class="two-columns-example row-fluid" 
        data-code-title="De acordo com a solicitação do cliente, temos que fazer uma lista com os 
        animais para adoção. Para isso, inserimos o seguinte código no arquivo HTML:"
        data-render-title="Como visualização em um navegador web temos:">
<ul>
  <li>gato 1</li>
  <li>gato 2</li>
</ul></div>    
        <p>
          Pronto! Você já sabe como fazer uma lista =)
        </p>

        <p>
          Agora, leia com atenção os pontos a seguir para aprofundar o 
          conhecimento sobre esse elemento. Existem dois tipos principais de
          listas: <strong>U</strong>nordered <strong>L</strong>ist(Lista não
          Ordenada), com o elemento <code>ul</code>, e <strong>O</strong>rdered
          <strong>L</strong>ist (Lista ordenada), com o elemento
          <code>ol</code>, sendo que ambas contêm o <strong>L</strong>ist Item
          (item de lista), elemento <code>li</code> representado pela tag
          <code>&lt;li&gt;</code>.
        </p>

        <div class="row-fluid">
          <div class="span4">
            <h5>Lista não Ordenada</h5>
            <ul>
              <li>
                Sintaxe: <code>&lt;ul&gt; &lt;/ul&gt;</code>
              </li> 
              <li>
                Descrição: contém uma série de itens cuja ordem <strong>não é
                relevante</strong>.
              </li>
              <li>
                Observação: o elemento <code>ul</code> só pode conter elementos do tipo
                <code>li</code>.
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
                Observação: o elemento <code>ol</code> só pode conter elementos do tipo
                <code>li</code>
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
                Observação: um item de lista só pode estar contido em uma lista (
                <code>ul</code> ou <code>ol</code>).
              </li>
            </ul>
          </div>
        </div>

        <p>
          Quando dizemos que a ordem dentre os elementos é relevante ou
          irrelevante, estamos nos referindo estritamente à semântica deste conteúdo.
          Repare que, tanto utilizando <code>ol</code> quanto <code>ul</code>, os elementos
          são representados na mesma ordem em que foram escritos no arquivo
          HTML. Uma característica de <code>ol</code>s é que os navegadores
          costumam numerar automaticamente os itens.
        </p>
        <div 
        class="two-columns-example row-fluid" 
        data-code-title="Por exemplo, se quisermos representar uma receita (em que a ordem dos
          passos é relevante) podemos utilizar o elemento de lista ordenada:"
        data-render-title="Como visualização em um navegador web temos:">
<ol>
  <li>Pré-aquecer o forno à uma temperatura de 300 graus</li>
  <li>Bater todos os ingredientes no liquidificador</li>
  <li>Levar ao forno</li>
  <li>Assar por 30 minutos</li>
  <li>Servir ainda quente</li>
</ol></div>
      </div>

      <!--aba 2 lista-->
      <div class="tab-pane hide" id="links">
        <h4>Hiperlinks</h4>
  <p>
    Para rechear a seção de dicas que o cliente quer no site, é preciso que 
    você aprenda como inserir <a href="#" class="glossario pop" 
    data-placement="right" data-original-title="" data-content='Hiperlink, ou
    apenas link (do inglês link – ligação) é o responsável pela ligação de 
    elementos a outras páginas.'> link</a>. Para isso, utilizamos o elemento
    <code>a</code>, que vem do inglês <strong>a</strong>nchor (âncora). Sua
    construção é um pouco diferente pois dentro de sua tag é <strong>exigido
    </strong> um 
    <a href="#" class="glossario pop" data-placement="right" data-content='
    Lembrando que atributo é uma propriedade aplicada ao elemento.'>
      atributo
    </a> 
    chamado <code>href</code> (do inglês hyperlink reference – referência hiperlink).
    Este atributo indica o endereço para o qual estamos linkando aquele trecho de
    texto clicável.
  </p>
  <p>
    Após envolver os trechos "Filhotes - Cuidados e higiene" e "Projeto
    Esperança Animal" com o elemento <code>a</code>, eles tornam-se "clicáveis" quando 
    renderizados no navegador. Ao clicar neles, uma nova página será
    carregada <strong>sobre a atual</strong> (Para voltar para essa página,
    clique em voltar no seu navegador). 
  </p>

  <div class="two-columns-example row-fluid" 
       data-code-title=" Veja a seguir como fica o HTML com os links de algumas indicações do seu cliente." 
       data-render-title="Como visualização no navegador temos:">
<p>Seguem sugestões de páginas com dicas de cuidados aos felinos:</p>
<p>
  <a href="http://www.whiskas.com.br/filhotes/cuidados-e-higiene">
    Filhotes - Cuidados e higiene 
  </a>
</p>
<p>
  <a href="http://www.pea.org.br/cuidados/gatos.htm">
    Projeto Esperança Animal
  </a>
</p></div>
  <p>
    Muitas vezes não queremos que o usuário saia da página atual, mas que 
    uma página nova seja aberta. Para isso, utilizamos no elemento <code>a</code> o 
    atributo <code>target</code> (do inglês target - alvo) com o valor 
    <code>"_blank"</code>, da seguinte maneira
    <code>&lt;a href="http://www.whiskas.com.br/filhotes/cuidados-e-higiene"
    target="_blank"&gt;Whiskas&lt;/a&gt;</code>. Este valor indica que a abertura da 
    página será em uma nova janela ou aba, dependendo do navegador.
  </p>

  <div class="two-columns-example row-fluid" 
       data-code-title="Então, no HTML, temos"
       data-render-title=" E como visualização no navegador temos:">
<p>
  Seguem sugestões de páginas com dicas de cuidados aos felinos:
</p>
<p>
  <a href="http://www.whiskas.com.br/filhotes/cuidados-e-higiene" target="_blank">
     Filhotes - Cuidados e higiene
  </a>
</p>
<p>
  <a href="http://www.pea.org.br/cuidados/gatos.htm" target="_blank">
    Projeto Esperança Animal
  </a>
</p></div>  

  
</div>          


<!--aba 3 lista-->
<div class="tab-pane hide" id="imagens">
  <h4>Imagens</h4>
  <p>
    Conforme o pedido do cliente, para cada animal haverá uma foto e informações sobre ele. 
    Assim, precisaremos inserir uma lista e uma foto do bichinho. Lista você já sabe fazer, mas, e a foto?
  </p>
  <p>
    Relembrando um pouco, vimos que páginas web são representadas por arquivos HTML que, por sua vez, 
    são arquivos de texto marcados por uma linguagem chamada HTML. No entanto, se tudo é texto, como podemos 
    inserir uma imagem em uma página? Simples: usamos o elemento <code>img</code>, do inglês image 
    (imagem). A tag para este elemento é uma daquelas que fecha em si mesma, ou seja, fica <code>&lt;img /&gt;</code>.
  </p>
  <p>
    O elemento <code>img</code> vem acompanhado de um atributo obrigatório chamado <code>src</code>. 
    A seguir, temos a explicação do que é esse atributo e também de outros dois que, apesar de não 
    obrigatórios, são <a href="#" class="glossario pop" data-placement="right"
    data-original-title=""
    data-content='Inclusive, sugerimos sempre usá-los!'>bastante utilizados</a>:
  </p>
  <ul>
    <li>
      <code>src</code> (do inglês source – fonte): este atributo indica para o navegador o endereço da 
      imagem a ser exibida na tela. Assim, seu valor é um caminho ou link que o navegador vai seguir 
      para buscar a imagem e exibi-la.
    </li>
    <li>
      <code>alt</code> (do inglês alternative – alternativa): este atributo permite estipular um texto 
      a ser exibido no lugar da imagem caso esta, por algum motivo, estiver com problemas. Ele atua como 
      uma alternativa e seu valor sempre é um texto explicativo sobre a imagem. Um ponto 
      interessante sobre esse atributo é que ele funciona como um recurso de acessibilidade para 
      deficientes visuais já que os programas <a href="#" class="mail-client pop"
      data-placement="top"
      data-original-title="Leitor de tela"
      data-content='<p>São programas que interagem com o Sistema Operacional do Computador, 
      transformando toda informação apresentada na forma de texto em som, através de um sintetizador de 
      voz. Veja alguns exemplos destes programas <a href="http://pt.wikipedia.org/wiki/Leitor_de_tela" 
      target="_blank">nesta página</a> da Wikipedia.</p>'>leitores de tela</a> 
      lêem o valor do atributo <code>alt</code> para informar o que é cada imagem.
    </li>
    <li>
      <code>title</code> (do inglês title – título): este atributo é o título da imagem e é exibido 
      quando o cursor do mouse é passado sobre ela, sendo seu valor um texto. </li>
    </ul>
    <p>
      Com todas essas informações, vamos inserir a foto de um dos animais. Como sintaxe, 
      utilizando apenas o atributo obrigatório 
      <code>src</code> temos <code>&lt;img src="http://escola.mupi.me/img/fotoGato1.png" /&gt;</code>, em que <code>http://escola.mupi.me/img/fotoGato1.png</code> representa o caminho para chegar até a imagem. É <strong>importante</strong> sempre lembrar de colocar a extensão do arquivo que, aqui, foi <code>.png</code>.
    </p>

  <div 
  class="two-columns-example row-fluid" 
  data-code-title="Inserindo todos os atributos mais a lista de informações, temos:"
  data-render-title="E como visualização no navegador:">
<img src="http://escola.mupi.me/img/fotoGato1.png" alt="Foto do gato 1" title="Gato Otto Zepelin" />
<ul>
  <li>Nome: Otto Zepelin</li>
  <li>Idade: 40 dias</li>
  <li>Peso: 400g</li>
</ul></div>

</div>

<!--aba 4 lista-->


<div class="tab-pane hide" id="tabela">
  <h4>Tabela</h4>
  <p>
    Voltando ao pedido do cliente, temos que fazer uma tabela com 3 colunas que trará referências 
    sobre a alimentação dos felinos. As tabelas no HTML são 
    compostas por diversos elementos organizados de maneira hierárquica e a 
    seguir mostraremos uma forma simples de montá-las com as tags <code>table</code>, 
    <code>tbody</code>, <code>tr</code>, <code>th</code> e <code>td</code>.
  </p>

  <div class="row-fluid">
    <div class="inspector-container  span5">
      <div class="toinspect">
        <table>
          <tbody>
            <tr>
              <th> Coluna 1 </th>
              <th> Coluna 2 </th>
            </tr>
            <tr>
              <td> Linha 1 - Coluna 1 </td>
              <td> Linha 1 - Coluna 2 </td>
            </tr>
            <tr>
              <td> Linha 2 - Coluna 1 </td>
              <td> Linha 2 - Coluna 2 </td>
            </tr>
          </tbody>
        </table>
      </div>
      <pre class="code-clicked prettyprint">
      </pre>
    </div>
    <div class="span7">
      Cada parte desta tabela representa uma célula envolvida pelo elemento que a define.
      Observe que ela não possui bordas separando cada célula, seja coluna ou linha. 
      Para lidar com estas características visuais temos que utilizar a linguagem 
      <a href="css" target="_blank">CSS</a>, que será vista na próxima aula. 
      Por enquanto, vamos trabalhar com ela assim.
    </div>
  </div>

  <p>
    Agora, vamos fazer a tabela solicitada pelo cliente. Pelas informações que temos,
    ela possuirá 3 colunas e 4 linhas. Observe a hierarquia dos 
    elementos, em que alguns estão contidos em outros. Para facilitar o entendimento, 
    adicionamos comentários no código e bordas da cor preta na visualização da tabela:
  </p>
<div class="two-columns-example row-fluid">
  <table>
    <tbody>
      <!-- Colunas -->
      <tr>
        <th> Idade (em meses) </th> 
        <th> Peso do gato (em Kg) </th>
        <th> Alimento (g/dia) </th>
      </tr>
       <!-- Linha 1 -->
      <tr>
        <td> 4 </td>
        <td> 1,8 - 2,8 </td>
        <td> 55 - 75 </td>
      </tr>
      <!-- Linha 2 -->
       <tr>
        <td> 6 </td>
        <td> 2,4 - 3,9 </td>
        <td> 60 - 80 </td>
      </tr>
      <!-- Linha 3 -->
       <tr>
        <td> 9 </td>
        <td> 2,9 - 4,8 </td>
        <td> 60 - 80 </td>
      </tr>
      <!-- Linha 4 -->
       <tr>
        <td> 12 </td>
        <td> 3 - 5 </td>
        <td> 60 - 80 </td>
      </tr>
    </tbody>
  </table>
</div>
<p>
  <span class="label label-warning">Importante</span> É importante pensar na semântica 
  de uma tabela. Por algum tempo, alguns web designers utilizaram tabelas como uma maneira 
  de construir layouts de páginas. Isto é errado do ponto de vista semântico! As tabelas 
  devem ser utilizadas nas mesmas situações em que a utilizaríamos em um documento de texto. 
</p>
<p>
  Leia com atenção a explicação de cada elemento que utilizamos para construir uma tabela:
</p>
<h5>table - tabela</h5>
<ul>
  <li>
    Sintaxe: 
    <code>&lt;table&gt; &lt;/table&gt;</code>
  </li>
  <li>
    Descrição: Representa uma tabela, é dentro dela que serão representados cabeçalhos, linhas, colunas, etc..
  </li>
</ul>
<h5>Table body - corpo de tabela</h5>
<ul>
  <li>
    Sintaxe: 
    <code>&lt;tbody&gt; &lt;/tbody&gt;</code>
  </li>
  <li>
    Descrição:
    Representa o corpo de uma tabela, onde ficam os dados. Em tabelas mais avançadas, 
    existe um elemento separado para o cabeçalho (<code>thead</code>), mas não veremos isto neste curso.
  </li>
</ul>
<div class="row-fluid">

  <div class="span4">
    <h5>Table row - linha de tabela</h5>
    <ul>
      <li>
        Sintaxe: 
        <code>&lt;tr&gt; &lt;/tr&gt;</code>
      </li>
      <li>
        Descrição: Representa uma linha de uma tabela. É dentro deste elemento que 
        representaremos cada dado (coluna) da tabela.
      </li>
    </ul>
  </div>
  <div class="span4">
    <h5>Table header - cabeçalho</h5>
    <ul>
      <li>
        Sintaxe: 
        <code>&lt;th&gt; &lt;/th&gt;</code>
      </li>
      <li>
        Descrição: representa um dado de cabeçalho para uma coluna da tabela.
      </li>
    </ul>
  </div>
  <div class="span4">
    <h5>Table data - dado de tabela</h5>
    <ul>
      <li>
        Sintaxe: 
        <code>&lt;td&gt; &lt;/td&gt;</code>
      </li>
      <li>
        Descrição: Representa um dado de uma coluna da tabela.
      </li>
    </ul>
  </div>
</div>
</div>
<!--aba 5 lista-->
<div class="tab-pane hide" id="textuais">

  <h4>Elementos textuais</h4>
  <p>
    Há muitos elementos HTML que lidam com o texto o si. Aqui, falaremos sobre 3 que são 
    importantes para iniciar um trabalho em desenvolvimento web: <code>h</code>, <code>p</code> e <code>br</code>.
  </p>
  <h5>Heading - título</h5>
  <p>
    Através do acréscimo de uma numeração decimal de 1 a 6, este elemento representa os diferentes 
    tipos títulos de uma página, sendo que para o mais importante temos <code>&lt;h1&gt; &lt;/h1&gt;</code>.
  </p>
  <h5>Paragraph - parágrafo</h5>
  <p>
    O elemento <code>p</code> determina que o que estiver envolvido pelas tags <code>&lt;p&gt; 
    &lt;/p&gt;</code> representa um parágrafo.
  </p>
  <h5>Line break - quebra de linha</h5>
  <p>
    Este elemento, cuja tag é representada por <code>&lt;br&gt;</code> ou <code>&lt;br /&gt;</code>, indica uma quebra de linha em um texto.
  </p>
  <p>
    <span class="label label-warning">Importante</span>
    É muito comum ver a utilização desta tag com o intuito de iniciar um novo parágrafo. 
    Para este caso utiliza-se o elemento <code>p</code>! Quebras de linhas são utilizadas 
    dentro de parágrafos em situações muito específicas, como em poesias ou endereços.
  </p>
  <p>
    Veja o exemplo a seguir que engloba o uso destas tags:
  </p>

  <div 
  class="two-columns-example row-fluid" 
  data-code-title="HTML:"
  data-render-title="Visualização no navegador:">
  <h1>Poesia</h1>
  <h5>O Navio Negreiro</h5>
  <p>Segue um trecho do poema de Castro Alves datado de 1869:</p>
  <p>
    São os filhos do deserto <br />
    Onde a terra esposa a luz. <br />
    Onde voa em campo aberto <br />
    A tribo dos homens nus... <br />
    São os guerreiros ousados, <br />
    Que com os tigres mosqueados <br />
    Combatem na solidão... <br />
    Homens simples, fortes, bravos... <br />
    Hoje míseros escravos <br />
    Sem ar, sem luz, sem razão... <br />
  </p>
</div>

</div>
</div>
</div>

<div class="step-pane active" id="step3">
       <h3>Exercícios para praticar!</h3>
 <p>
  Esses exercícios são para praticar o que já você já aprendeu até aqui. Assim, 
  tente fazer todos eles e leia as nossas respostas comentadas para consolidar seu 
  conhecimento.
</p>

<!--aqui começam as abas. Será uma aba para cada elemento-->
    <ul id="myTab" class="nav nav-tabs" >
      <li class="active"><a href="#pratic1" data-toggle="tab">1</a></li>
      <li class=""><a href="#pratic2" data-toggle="tab">2</a></li>
      <li class=""><a href="#pratic3" data-toggle="tab">3</a></li>
      <li class=""><a href="#pratic4" data-toggle="tab">4</a></li>
      <li class=""><a href="#pratic5" data-toggle="tab">5</a></li>
    </ul>   

    <div id="myTabContent" class="tab-content">
      <!--aba 1 lista-->
      <div class="tab-pane active in" id="pratic1">

        <?php echo $this->element('exercise-editor', array(
        "exClass" => "exPratic1"
        , "lang"    => "html"
        , "exTitle" => "Durante a produção de um material didático web, você precisa listar as seguintes 
        obras de Machado de Assis: Dom Casmurro, Quincas Borba e Helena. Estruture em HTML:"
        , "exRenderBtn" => "Mostrar"
        , "showRespBtn" => "Mostrar nossa solução"
        , "initialContent" => "&lt;!--Crie aqui!--&gt;"
        , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
        , "respTitle" => "Nossa solução"
        , "respRenderTitle" => "Fica assim:"
        , "respComment" => "Para criar listas simples, é recomendado utilizar o elemento de lista não ordenada <code>ul</code> (unordered lists)."
        , "respContent" => "&lt;ul&gt;
  &lt;li&gt;Dom Casmurro&lt;/li&gt;
  &lt;li&gt;Quincas Borba&lt;/li&gt;
  &lt;li&gt;Helena&lt;/li&gt;
&lt;/ul&gt;"
  ));?>
      </div>

      <div class="tab-pane" id="pratic2">
        <?php echo $this->element('exercise-editor', array(
        "exClass" => "exPratic2"
        , "lang"    => "html"
        , "exTitle" => "Você está produzindo um hotsite sobre um concurso de fotografia. Insira no HTML o 
        ranking dos 2 escolhidos sendo que o primeiro foi Geni Santos e o segundo Mel Vaz:"
        , "exRenderBtn" => "Mostrar"
        , "showRespBtn" => "Mostrar nossa solução"
        , "initialContent" => "&lt;!--Insira aqui!--&gt;"
        , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
        , "respTitle" => "Nossa solução"
        , "respRenderTitle" => "Fica assim:"
        , "respComment" => "Em um ranking, a ordem dos itens é de extrema importância. Mesmo que a renderização dos elementos <code>ul</code> (unordered lists) e <code>ol</code> (ordered lists) no navegador sejam semelhantes quanto à ordem dos itens, semanticamente isso não é a mesma coisa! Para listas em que a ordem é importante, utiliza-se sempre o elemento <code>ol</code>."
        , "respContent" => "&lt;ol&gt;
  &lt;li&gt;Geni Santos&lt;/li&gt;
  &lt;li&gt;Mel Vaz&lt;/li&gt;
&lt;/ol&gt;"
  ));?>
</div>

<div class="tab-pane" id="pratic3">
  <?php echo $this->element('exercise-editor', array(
  "exClass" => "exPratic3"
  , "lang"    => "html"
  , "exTitle" => "A tabela a seguir mostra o resultado dos últimos jogos de dois times de basquete de uma escola. 
  Insira o resultado do jogo dia 04/06, sendo o placar 42 a 37, com vitória do time Canelovis:"
  , "exRenderBtn" => "Mostrar"
  , "showRespBtn" => "Mostrar nossa solução"
  , "initialContent" => "&lt;table&gt;
 &lt;tbody&gt;
  &lt;tr&gt;
    &lt;th&gt; Data &lt;/th&gt; 
    &lt;th&gt; Canelovis &lt;/th&gt;
    &lt;th&gt; As Graxinhas &lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt; 28/05 &lt;/td&gt;
    &lt;td&gt; 48 &lt;/td&gt;
    &lt;td&gt; 32 &lt;/td&gt;
  &lt;/tr&gt;
 &lt;/tbody&gt;
&lt;/table&gt;"
  , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
  , "respTitle" => "Nossa solução"
  , "respRenderTitle" => "Fica assim:"
  , "respComment" => "Para inserir linhas em tabelas, utiliza-se o elemento <code>tr</code> englobando o elemento <code>td</code>. 
  Observe que o número de tags será relativo ao número de colunas definido pelo elemento <code>t</code>. Como observação, na renderização do HTML
   aplicamos bordas na tabela, utilizando a linguagem CSS, para facilitar a visualização."
  , "respContent" => " 
&lt;table&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th&gt; Data &lt;/th&gt; 
      &lt;th&gt; Canelovis &lt;/th&gt;
      &lt;th&gt; As Graxinhas &lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt; 28/05 &lt;/td&gt;
      &lt;td&gt; 48 &lt;/td&gt;
      &lt;td&gt; 32 &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt; 04/06 &lt;/td&gt;
      &lt;td&gt; 42 &lt;/td&gt;
      &lt;td&gt; 37 &lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;"
  ));?>
</div>

<div class="tab-pane" id="pratic4">
    
<?php echo $this->element('exercise-editor', array(
  "exClass" => "exPratic4"
  , "lang"    => "html"
  , "exTitle" => "Houve a reclamação de um web site que você produziu de que a seguinte imagem não foi exibida. 
  Conserte o código a seguir para mostrar a imagem correta."
  , "exRenderBtn" => "Mostrar"
  , "showRespBtn" => "Mostrar nossa solução"
  , "initialContent" => "&lt;img href=\"../img/logo.png\"/&gt;"
  , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
  , "respTitle" => "Nossa solução"
  , "respRenderTitle" => "Fica assim:"
  , "respComment" => "O atributo <code>href</code> é utilizado para hiperlinks, que são os elementos <code>a</code>. Para o elemento <code>img</code> utiliza-se o atributo <code>src</code> de source, em inglês, ou caminho em português. Lembre-se de utilizar o atributo <code>alt</code> para descrever a imagem em caso do site estar sendo visualizado por leitores automáticos de tela ou da sua imagem não ser carregada."
  , "respContent" => "&lt;img src=\"../img/logo.png\" alt=\"logo do site\"/&gt;"
  ));?>
</div>

<div class="tab-pane" id="pratic5">
  <?php echo $this->element('exercise-editor', array(
  "exClass" => "exPratic5"
  , "lang"    => "html"
  , "exTitle" => "Insira o link http://commons.cc/antropi/ no título 
  \"Antropologia da Propriedade Intelectual\", de modo que ele abra em uma nova página web."
  , "exRenderBtn" => "Mostrar"
  , "showRespBtn" => "Mostrar nossa solução"
  , "initialContent" => "&lt;!--Insira aqui!--&gt;"
  , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
  , "respTitle" => "Nossa solução"
  , "respRenderTitle" => "Fica assim:"
  , "respComment" => "Para que o link seja aberto em uma nova página, é necessário utilizar o 
  atributo <code>target</code>, que direciona para onde o link será aberto, com o valor 
  <code>_blank</code> que indica uma nova página."
  , "respContent" => "&lt;a href=\"http://commons.cc/antropi/&quot; 
  target=&quot;_blank&quot;&gt;Antropologia da Propriedade Intelectual&lt;/a&gt;
"
  ));?>
</div>

</div>
</div>

<div class="step-pane hide" id="step4">
  <h3>Usando tags e elementos</h3>

  <div class="row-fluid">
    <div class="span6">
     <p>
      Em uma segunda conversa com seu cliente, do projeto de adoção de gatos <strong>Caipora</strong>, você, como web designer, sugeriu 
      que fossem acrescidos ao web site os seguintes itens:
    </p>

    <ul>
      <li>Um local para o logotipo da ONG.</li>
      <li>Um local para os links sugeridos.</li>
      <li>Um caminho fácil para o usuário acessar as páginas em rede sociais (twitter e facebook) da ONG.</li>
      <li>Um local para mostrar os contatos.</li>
    </ul>
    <p>
      Para facilitar o entendimento do cliente, você levou o <a href="#" class="mail-client pop"
      data-placement="top"
      data-original-title="O que são mockups?"
      data-content='<p>São protótipos de
      um produto utilizados para sua apresentação. Neste caso, pode ser 
      a imagem da página a ser produzida, com a representação de seu layout, como posicionamentos, botões,
      cores e fontes.</p>'>mockup</a> ao lado:
    </p>
  </div>

  <div class="span6">
    <?php echo $this->Html->image('html_mockup_v2.jpg', array(
      'alt' => 'Mock-up do site pedido pelo cliente'
      , 'title' => 'Mock-up do site pedido pelo cliente'
      , 'class' => 'img-polaroid'
      )); ?>
    </div>
  </div>

  <p>
    Vamos agora estudar como produzir esses itens através de tags. 
    Para entender o uso dessa tags tenha em mente que, conforme foi dito no tópico 1 
    <a href="#step1" target="_blank">O que é HTML</a>, 
    o HTML5 traz um novo olhar de importância para a semântica do código. 
    </p>
  </p>

 <!--aqui começam as abas. Será uma aba para cada elemento-->
    <ul id="myTab" class="nav nav-tabs" >
      <li class="active"><a href="#tab-section" data-toggle="tab">Section</a></li>
      <li class=""><a href="#tab-header" data-toggle="tab">Header</a></li>
      <li class=""><a href="#tab-footer" data-toggle="tab">Footer</a></li>
      <li class=""><a href="#tab-aside" data-toggle="tab">Aside</a></li>
      <li class=""><a href="#tab-nav" data-toggle="tab">Nav</a></li>
      <li class=""><a href="#tab-div" data-toggle="tab">Div e Span</a></li>
      <li class=""><a href="#tab-dicas" data-toggle="tab">Dicas</a></li>
    </ul>   

    <div id="myTabContent" class="tab-content">
      <!--aba 1 lista-->
      
      <div class="tab-pane active in" id="tab-section">
        <h4>Section</h4>
     <p>
      O elemento <code>section</code>, que traduzido temos "seção", indica ao
      navegador que o trecho englobado pelas tags
      <code>&lt;section&gt; &lt;/section&gt;</code> representa a seção de algo.
      Podemos compará-lo a uma seção de livro, por exemplo, uma vez que ele
      agrupa conteúdos que se relacionam. 
    </p>      
    <p>
      Aplicando isso ao conteúdo que temos do site do projeto Caipora,
      criaremos duas seções: uma para a lista de gatos e outra para a tabela
      com informações de alimentação. 
    </p>
    <p>
      <span class="label label-warning">Importante</span> Note que visualmente,
      no navegador, não haverá diferença quando comparamos ao que foi exibido
      em  <a href="#step2" target="_blank">Tags 1</a>. Mas por que devemos
      usar, então? Semântica!
    </p>
    <p>
      <span class="label label-warning">Importante</span> Lembre-se que
      adicionamos bordas da cor preta para facilitar 
      a visualização da tabela. No entanto, esta tabela está sem bordas pelo
      código que ali está uma vez que quem cuida da parte visual de um site é a
      linguagem <a href="css" target="_blank">CSS</a>.
    </p>

    <p>
      As próximas abas apresentarão alguns tipos diferentes de seções. Elas são como "especializações" da tag <code>section</code>, com semânticas mais fechadas.
    </p>

<div class="two-columns-example row-fluid">
<section>
  <ul>
    <li>
      <img src="http://escola.mupi.me/img/fotoGato1.png" alt="Foto do gato 1" title="Gato Otto Zepelin" />
      <ul>
        <li>Nome: Otto Zepelin</li>
        <li>Idade: 40 dias</li>
        <li>Peso: 400g</li>
      </ul>
    </li>
    <li>
      <p>Espaço para o Gato 2</p>
    </li>
  </ul>
</section>
<section>
  <table>
    <tbody>
      <!-- Colunas -->
      <tr>
        <th> Idade (em meses) </th> 
        <th> Peso do gato (em Kg) </th>
        <th> Alimento (g/dia) </th>
      </tr>
       <!-- Linha 1 -->
      <tr>
        <td> 4 </td>
        <td> 1,8 - 2,8 </td>
        <td> 55 - 75 </td>
      </tr>
      <!-- Linha 2 -->
       <tr>
        <td> 6 </td>
        <td> 2,4 - 3,9 </td>
        <td> 60 - 80 </td>
      </tr>
      <!-- Linha 3 -->
       <tr>
        <td> 9 </td>
        <td> 2,9 - 4,8 </td>
        <td> 60 - 80 </td>
      </tr>
      <!-- Linha 4 -->
       <tr>
        <td> 12 </td>
        <td> 3 - 5 </td>
        <td> 60 - 80 </td>
      </tr>
    </tbody>
  </table>
</section>
</div>
       
      </div>

      <div class="tab-pane in" id="tab-header">
        <h4>Header</h4>
<p>
  O elemento <code>header</code>, conforme sua tradução, informa ao navegador que ali temos um <strong>cabeçalho</strong>. Não necessariamente precisa representar o cabeçalho da página, podendo ser o cabeçalho de uma seção, por exemplo. <!--Costuma-se colocá-lo como primeiro elemento do elemento pai.-->
</p>

<p>
  Por exemplo, no caso abaixo, onde você inseriria as tags <code>&lt;header&gt; &lt;/header&gt;</code> 
  contendo o título da página: "Caipora"?
</p>

<?php echo $this->element('exercise-editor', array(
  "exClass" => "html1"
  , "lang"    => "html"
  , "exTitle" => "Insira um cabeçalho na página abaixo com o título: \"Caipora\":"
  , "exRenderBtn" => "Mostrar"
  , "showRespBtn" => "Mostrar nossa solução"
  , "initialContent" => "&lt;!-- Página do projeto --&gt;
&lt;section&gt;
  &lt;p&gt;Aqui teremos a lista de gatos&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Gato 1&lt;/li&gt;
    &lt;li&gt;Gato 2&lt;/li&gt;
  &lt;/ul&gt;
&lt;/section&gt;
&lt;section&gt;
  &lt;p&gt;Aqui teremos a tabela&lt;/p&gt;
&lt;/section&gt;"
  , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
  , "respTitle" => "Nossa solução"
  , "respRenderTitle" => "Fica assim:"
  , "respContent" => "&lt;!-- Página do projeto --&gt;
&lt;header&gt;
  &lt;h1&gt;Caipora&lt;/h1&gt;
&lt;/header&gt;
&lt;section&gt;
  &lt;p&gt;Aqui teremos a lista de gatos&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Gato 1&lt;/li&gt;
    &lt;li&gt;Gato 2&lt;/li&gt;
  &lt;/ul&gt;
&lt;/section&gt;
&lt;section&gt;
  &lt;p&gt;Aqui teremos a tabela&lt;/p&gt;
&lt;/section&gt;"
  , "respComment" => "<p>Veja que as tags de cabeçalho foram inseridas no início do arquivo, antes dos outros elementos 
  que representam o corpo do site. É este o lugar onde elas devem ficar uma vez que não alteram, na visualização da página, 
  o posicionamento do conteúdo que estão englobando na página. Assim, fica mais fácil entender que a importância de ter um elemento chamado
  <strong>header</strong> está relacionada à semântica do código.</p><p>Veja também que como era necessário inserirmos um título, utilizamos 
  o elemento <code>h1</code> para envolver a palavra \"Caipora\".</p>"
  ));?>

      </div>

      <div class="tab-pane in" id="tab-footer">
           <h4>Footer</h4>
<p>
  O elemento <code>footer</code>, conforme sua tradução, informa ao navegador
  que ali temos um <strong>rodapé</strong>. Assim como para o 
  <code>header</code>, não estamos falando necessariamente do rodapé da página,
  mas também de outros, como do rodapé de seções. <!--Costuma-se colocar o elemento
  <code>footer</code> no fim de seu  elemento pai, após todo o conteúdo do
  mesmo.-->
</p>
<p>
  <span class="label label-warning">Importante</span> Os comentários (representados com os 
  símbolos &lt;!-- --&gt;) podem por exemplo ser utilizados para distinguir essas diferenças, informando que tal rodapé pertencem a uma determinada seção.
</p>
<div class="two-columns-example row-fluid">
<header>
  <h1>Caipora</h1>
</header>
<!-- início da seção de lista de gatos -->
<section>
  <ul>
    <li>Gato 1</li>
    <li>Gato 2</li>
  </ul>
</section>
<!-- início da seção de tabela de alimentação -->
<section>
  <p>Espaço para tabela;</p>
</section>
<!-- início do rodapé da página -->
<footer>
  <h1> Contatos </h1>
  <p>Telefone</p>
  <p>Email</p>
</footer>
</div>

<p>
  <span class="label label-warning">Importante</span> Note que utilizamos um
  elemento <code>h1</code> dentro deste section. Isto não significa que ele é o
  título mais importante da página, mas sim deste elemento. Este é um dos
  conceitos importantes inseridos pelo HTML5 em relação ao HTML4.
</p>

</div>

      <div class="tab-pane in" id="tab-aside">
       <h4>Aside </h4>
       <p>
        O elemento <code>aside</code> vem da própria palavra inglesa aside, que traduzida fica "ao lado". Suas tags <code>&lt;aside&gt; &lt;/aside&gt;</code> são utilizadas para representar conteúdos que tangenciem o conteúdo principal do web site. Isso não significa que este elemento será <strong>necessariamente</strong> o responsável por barras laterais, mas sim somente quando o conteúdo destas barras se encaixarem à sua semântica. Mais uma vez reforçamos que estas tags têm valor semântico no código e não estão relacionadas com layout.
      </p>
      <p>
        Para entender melhor, pense por exemplo em um box usado para propagandas no meio de textos de jornais ou revistas. Ele, de maneira geral, se relaciona com o conteúdo principal que o envolve. O conteúdo deste box é o englobaremos pelo <code>aside</code>.
      </p>
      <p>
        Outros exemplos de uso por essas tags em web sites são para exibição de parcerias e comentários a respeito de determinado conteúdo.
      </p>

      <p>
        Para atender ao Caipora, utilizaremo-nas para os links sobre cuidados com animais, sugeridos pelo cliente. Note que visualmente não há diferenças quando relacionado às outras tags:
      </p>

        <div class="two-columns-example row-fluid">
<header>
  <h1>Caipora</h1>
</header>
<section>
  <ul>
    <li>Gato 1</li>
    <li>Gato 2</li>
  </ul>
</section>
<section>
  <p>Espaço para tabela;</p>
</section>
<!-- Aside para barra lateral com informações adicionais -->
<aside>
  <h1>Dicas</h1>
  <p>Seguem sugestões de páginas com dicas de cuidados aos felinos:</p>
  <p>
    <a href="http://www.whiskas.com.br/filhotes/cuidados-e-higiene">
      Filhotes - Cuidados e higiene 
    </a>
  </p>
  <p>
    <a href="http://www.pea.org.br/cuidados/gatos.htm">
      Projeto Esperança Animal
    </a>
  </p>
</aside>
<footer>
  <h1> Contatos </h1>
  <p>Telefone</p>
  <p>Email</p>
</footer>
</div>
    </div>

      <div class="tab-pane in" id="tab-nav">
        <h4>Nav</h4>
<p>
  O elemento <code>nav</code> vem da palavra inglesa "navigation", que traduzida temos "navegação". As tags <code>&lt;nav&gt; &lt;/nav&gt;</code>, conforme o próprio nome sugere, envolvem uma seção de navegação do site, ou seja, um grupo de links que representam áreas (em diferentes páginas ou não) de um mesmo web site. Resumindo, estas tags funcionam como um contêiner de links para navegação, ou, menu.
</p>
<p>
  Por exemplo, no web site em construção denominado Caipora, podemos reagrupar os gatos por algum critério comum, como a cidade em que estão localizados. Assim, para isso, fazemos um menu lateral com o nome das cidades e inserimos links internos entre páginas ou seções do site:
</p>

<div class="two-columns-example row-fluid">
  <nav>
    <ul>
      <li>
        <a href="#gatos-campinas">Campinas</a>
      </li>
      <li>
        <a href="#gatos-saopaulo">São Paulo</a>
      </li>
      <li>
        <a href="#gatos-salvador">Salvador</a>
      </li>
      <li>
        <a href="#gatos-bhorizonte">Belo Horizonte</a>
      </li>
    </ul>
  </nav>
  <section>
    <ul>
      <li id="gatos-campinas"> 
        Gatos em Campinas
        <ul>
          <li>Gato 1</li>
        </ul>
      <li id="gatos-saopaulo">
        Gatos em São Paulo
        <ul>
          <li>Gato 1</li>
          <li>Gato 2</li>
        </ul>
      </li>
      <li id="gatos-salvador">
        Gatos em Salvador
        <ul>
          <li>Gato 1</li>
        </ul>
      </li>
      <li id="gatos-bhorizonte">
        Gatos em Belo Horizonte
        <ul>
          <li>Gato 1</li>
        </ul>
    </ul>
  </section>
</div>

<p>
  <span class="label label-warning">Importante</span> Note que para o valor do
  atributo <code>href</code> dos links do exemplo acima, utilizamos um tipo diferente de valor como link. Este valor leva o usuário ao elemento que tiver um outro atributo, chamado <code>id</code>, com o mesmo valor. O atributo <code>id</code> é representado sempre por um <code>#</code> e um nome relacionado ao que ele identifica.
</p>

<p>Por exemplo, No caso acima, onde estão os gatos de Salvador, foi colocado o id <code>id="gatos-salvador"</code>. Assim, no menu, o link para ele será 
  <code>#gatos-salvador</code>.
</p>

<p>
O atributo <code>id</code> (de identificação) é um atributo muito importante pois é
  utilizado no HTML como identificador único de um elemento da na página. Isto
  significa que um <code>id</code> <strong>nunca</strong> deve ser repetido
  dentro da mesma página.
</p>

<p>
  Veremos que há muito mais coisa para as quais este
  <strong>identificador</strong> é útil durante as aulas de 
  <a href="css" target="_blank">CSS</a> e de
  <a href="js-jquery" target="_blank">Javascript</a>.
</p>

</div>
    <div class="tab-pane in" id="tab-div">
      <h4>Div e Span</h4>
      <p>
        O elemento <code>div</code> tem como função agrupar elementos em um
        arquivo html, considerando que estes elementos possuam algumas
        semelhanças semânticas, definidas pelo desenvolvedor web, no código.
        Ele funciona como um bloco ou contêiner e sua utilização é recomendada
        apenas quando outros elementos de agrupamento (como 
        <code>header</code>, <code>section</code>, <code>aside</code> e
        <code>footer</code>) não se encaixarem. Esse cuidado sugerido para
        utilizar o elemento <code>div</code> existe devido ao fato dele não
        representar valor semântico, sendo simplesmente um bloco.
      </p>

      <h4>Span</h4>
      <p>
        O elemento <code>span</code> tem como função dar semântica à uma
        palavra ou pedaço de texto. É utilizado quando precisamos manipular ou destacar apenas uma parte de um texto.</p>
      <p>
        Num endereço, por exemplo, podemos separar os elementos como Rua, CEP e Cidade
        dos seus valores por um span, diferenciando os tipos de conteúdo localmente:
      </p>
      <p>
        <code>&lt;span&gt;</code>Rua<code>&lt;/span&gt;</code>: dos expedicionários<br />
        <code>&lt;span&gt;</code>Cidade<code>&lt;/span&gt;</code>: Campinas-SP<br />
        <code>&lt;span&gt;</code>CEP<code>&lt;/span&gt;</code>: 13000000

      </p>
      <p>
        Visualmente, no navegador web, não haverá modificação. 
        Com <a href="css" target="_blank">CSS</a>, vamos aprender mais formas de utilizar spans.
      </p>
    </div>
      

     <div class="tab-pane in" id="tab-dicas">
      <h4>Sobre as tags ensinadas em Tags 2</h4>
      <p>
        Enfatizamos a importância da semântica dos elementos ensinados neste
        tópico. É importante entender que nem sempre há necessidade de agrupar
        os elementos, porém muitas vezes este agrupamento se torna útil na
        construção do layout da página, como aprenderemos na aula de
        <a href="css" target="_blank">CSS</a>.
      </p>


     <h4>Referências úteis</h4>
     <p>
      <span class="label label-info">Fica a dica!</span> Seguem sugestões para
      quem quiser conhecer sempre mais =)
     </p>
      <ul>
        <li>
          <a href="http://www.webplatform.org/" target="_blank">webplatform.org</a>:
          site de documentação de linguagem front-end, organizado pela
          <a href="http://www.w3c.br/" target="_blank">W3C</a>, um consórcio
          internacional responsável pela padronização da web. Infelizmente em
          sua maior parte, está apenas em inglês.
        </li>
        <li>
          <a href="https://developer.mozilla.org/pt-BR/docs/HTML" target="_blank">developer.mozilla.org/pt-BR/docs/HTML</a>:
          site de documentação produzida pela Mozilla Foundation.
        </li>
        <li>
          <a href="caniuse.com" target="_blank">caniuse.com</a>: site
          interessante que documenta o que é reconhecido pelos navegadores
          mais comuns do mercado. Muiito útil para HTML mas também para outras
          tecnologias relacionadas ao desenvolvimento web como 
          <a href="css" target="_blank">CSS</a> e
          <a href="js-jquery" target="_blank">javascript</a>.
        </li>
      </ul>

     </div>

    </div>

</div>

<div class="step-pane hide" id="step5">
  <h3>Exercícios para praticar!</h3>
 <p>
  Esses exercícios são para praticar o que já você já aprendeu até aqui. Assim, 
  tente fazer todos eles com muita atenção!
</p>


<!--aqui começam as abas. Será uma aba para cada elemento-->
    <ul id="myTab" class="nav nav-tabs" >
      <li class="active"><a href="#pratic21" data-toggle="tab">1</a></li>
      <li class=""><a href="#pratic22" data-toggle="tab">2</a></li>
      <li class=""><a href="#pratic23" data-toggle="tab">3</a></li>
      <li class=""><a href="#pratic24" data-toggle="tab">4</a></li>
      <!--<li class=""><a href="#pratic25" data-toggle="tab">5</a></li>-->
    </ul>   

    <div id="myTabContent" class="tab-content">
      <!--aba 1 lista-->
      <div class="tab-pane active in" id="pratic21">

<?php echo $this->element('exercise-editor-full', array(
        "exClass" => "exPratic1"
        , "lang"    => "html"
        , "exTitle" => "  <p>
          Um jornal regional resolveu levar suas edições diárias para
          a internet. Ao contrário dos grandes portais, que são atualizados em
          questão de minutos, esse jornal apenas tem o intuito de digitalizar
          suas reportagens diariamente.
        </p>
        <p>
          É necessário que você coloque em um arquivo HTML as informações a seguir 
          do caderno social. Este arquivo contém informações sobre os moradores dividas 
          pelas seções \"Celebridades\", \"Óbitos\" e \"Festividades\". Atente-se para as diferentes 
          tags que você terá de utilizar! 
        </p>"
        , "exRenderBtn" => "Mostrar"
        , "showRespBtn" => "Mostrar nossa solução"
        , "initialContent" => "Caderno Regional
Celebridades

  A filha do exmo prefeito João Damião completou 15 anos e para comemorar
seu aniversário, a família sairá em viagem por dois dias para Campos
do Jordão com tudo pago pela prefeitura!
  O show do cantor e deputado Francisco Aguilar foi um sucesso e reuniu grandes
nomes da nossa região como o ator Carlos Luis e sua esposa a surfista
alemã Brünnhilde, que chamou atenção com seu novo cabelo vermelho
paixão. Contamos também com a presença do nosso querido prefeito João.

Óbitos

  É com imenso pesar que a família Dos Sicilias vem por meio deste
folhetim deixar pública a morte do nosso querido Juan. Sempre
respeitado não somente na região, como também em todo o Brasil
  Na mais profunda tristeza que anunciamos o falecimento da nossa
amada Dona Ivonete. Há muito adoentada, esperamos que agora encontre
seu devido sossego.

Festividades

Não perca nesse sábado o grande Caruru para São Cosme oferecido por
Luiza do Abará, já em eu XII ano: 

  São Cosme me mandou fazer 
  Uma camisinha azul 
  No dia da festa dele 
  São Cosme quer caruru 
  Vadeia Cosme, vadeia 
  Tô vadiando, vadeia 
"
        , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
        , "respTitle" => "Nossa solução"
        , "respRenderTitle" => "Fica assim:"
        , "respComment" => ""
        , "respContent" => "&lt;section&gt;  
  &lt;h2&gt;Caderno Regional&lt;/h2&gt;
  &lt;h3&gt;Celebridades&lt;/h3&gt;
  &lt;p&gt;
    A filha do exmo prefeito Jo&atilde;o Dami&atilde;o completou 15 anos e para comemorar
  seu anivers&aacute;rio, a fam&iacute;lia sair&aacute; em viagem por dois dias para Campos
  do Jord&atilde;o com tudo pago pela prefeitura!
  &lt;/p&gt;
  &lt;p&gt;
    O show do cantor e deputado Francisco Aguilar foi um sucesso e reuniu grandes
  nomes da nossa regi&atilde;o como o ator Carlos Luis e sua esposa a surfista
  alem&atilde; Br&uuml;nnhilde, que chamou aten&ccedil;&atilde;o com seu novo cabelo vermelho
  paix&atilde;o. Contamos tamb&eacute;m com a presen&ccedil;a do nosso querido prefeito Jo&atilde;o
  &lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
  &lt;h3&gt;&Oacute;bitos&lt;/h3&gt;
  &lt;p&gt;
    &Eacute; com imenso pesar que a fam&iacute;lia Dos Sicilias vem por meio deste
  folhetim deixar p&uacute;blica a morte do nosso querido Juan. Sempre
  respeitado n&atilde;o somente na regi&atilde;o, como tamb&eacute;m em todo o Brasil
  &lt;/p&gt;
  &lt;p&gt;
    Na mais profunda tristeza que anunciamos o falecimento da nossa
  amada Dona Ivonete. H&aacute; muito adoentada, esperamos que agora encontre
  seu devido sossego.
  &lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
  &lt;h3&gt;Festividades&lt;/h3&gt;
  &lt;p&gt;N&atilde;o perca nesse s&aacute;bado o grande Caruru para S&atilde;o Cosme oferecido por
  Luiza do Abar&aacute;, j&aacute; em eu XII ano: &lt;/p&gt;
  &lt;p&gt;
    S&atilde;o Cosme me mandou fazer &lt;br /&gt;
    Uma camisinha azul &lt;br /&gt;
    No dia da festa dele &lt;br /&gt;
    S&atilde;o Cosme quer caruru &lt;br /&gt;
    Vadeia Cosme, vadeia &lt;br /&gt;
    T&ocirc; vadiando, vadeia &lt;br /&gt;
  &lt;/p&gt;
&lt;/section&gt;"
  ));?>
</div>
<div class="tab-pane in" id="pratic22">
<?php echo $this->element('exercise-editor', 
array(
      "exClass" => "exPratic2"
      , "lang"    => "html"
      , "exTitle" => '  
A versão online desse jornal mantém uma série de cadernos. Cada caderno 
é acessado por um link específico na página através do menu principal da mesma.
Nesse exercício, crie uma estrutura de cabeçalho que contenha o título do
jornal e um menu de navegação para os cadernos identificados no código como
"social", para o "Caderno Social" e "policial" para o caderno "Boletim
Policial".'
      , "exRenderBtn" => "Mostrar"
      , "showRespBtn" => "Mostrar nossa solução"
      , "initialContent" => ""
      , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
      , "respTitle" => "Nossa solução"
      , "respRenderTitle" => "Fica assim:"
      , "respComment" => ""
      , "respContent" => "
&lt;header&gt;
  &lt;h1&gt;Jornal da Regi&#227;o&lt;/h1&gt;
  &lt;nav&gt;
    &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#social&quot;&gt;Caderno Social&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#policial&quot;&gt;Boletim Policial&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/header&gt;
"
      ));?>
</div>
<div class="tab-pane in" id="pratic23">
<?php echo $this->element('exercise-editor-full', 
array(
      "exClass" => "exPratic3"
      , "lang"    => "html"
      , "exTitle" => '  
<p>Por fim, no final da página podemos encontrar informações sobre o jornal
como o e-mail, endereço e telefone para contato e dúvidas e há também uma
pequena seção na qual os usuários podem ler o nome da equipe que trabalha nele
e suas funções. Crie essas duas partes da página, dada a página abaixo, com os
dados já citados e criando cargos de Editor chefe e estagiário.</p>'
      , "exRenderBtn" => "Mostrar"
      , "showRespBtn" => "Mostrar nossa solução"
      , "initialContent" => '
&lt;header&gt;
  &lt;h1&gt;Jornal da Regi&#227;o&lt;/h1&gt;
  &lt;nav&gt;
    &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#social&quot;&gt;Caderno Social&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#policial&quot;&gt;Boletim Policial&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/header&gt;
&lt;h2&gt;Caderno Regional&lt;/h2&gt;
&lt;section&gt;
&lt;h3&gt;Celebridades&lt;/h3&gt;
&lt;p&gt;
  &lt;img src=&quot;http://escola.mupi.me/img/filha-prefeito.jpg&quot; alt=&quot;Jordana, filha exemplar!&quot; /&gt;A
filha do exmo prefeito Jo&#227;o Dami&#227;o completou 15 anos e para comemorar
seu anivers&#225;rio, a fam&#237;lia sair&#225; em viagem por dois dias para Campos
do Jord&#227;o com tudo pago pela prefeitura!
&lt;/p&gt;
&lt;p&gt;
  &lt;img src=&quot;http://escola.mupi.me/img/carlos.jpg&quot; alt=&quot;Grande filho da regi&#227;o&quot; /&gt;O show do
cantor e deputado Francisco Aguilar foi um sucesso e reuniu grandes
nomes da nossa regi&#227;o como o ator Carlos Luis e sua esposa a surfista
alem&#227; Br&#252;nnhilde, que chamou aten&#231;&#227;o com seu novo cabelo vermelho
paix&#227;o. Contamos tamb&#233;m com a presen&#231;a do nosso querido prefeito Jo&#227;o
  &lt;img src=&quot;http://escola.mupi.me/img/frank.jpg&quot; alt=&quot;Performance exuberante&quot;/&gt;
&lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
&lt;h3&gt;&#211;bitos&lt;/h3&gt;
&lt;p&gt;
  &#201; com imenso pesar que a fam&#237;lia Dos Sicilias vem por meio deste
folhetim deixar p&#250;blica a morte do nosso querido Juan. Sempre
respeitado n&#227;o somente na regi&#227;o, como tamb&#233;m em todo o Brasil
&lt;/p&gt;
&lt;p&gt;
  Na mais profunda tristeza que anunciamos o falecimento da nossa
amada Dona Ivonete. H&#225; muito adoentada, esperamos que agora encontre
seu devido sossego.
&lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
&lt;h3&gt;Festividades&lt;/h3&gt;
&lt;p&gt;N&#227;o perca nesse s&#225;bado o grande Caruru para S&#227;o Cosme oferecido por
Luiza do Abar&#225;, j&#225; em eu XII ano: &lt;/p&gt;
&lt;p&gt;
  S&#227;o Cosme me mandou fazer &lt;br /&gt;
  Uma camisinha azul &lt;br /&gt;
  No dia da festa dele &lt;br /&gt;
  S&#227;o Cosme quer caruru &lt;br /&gt;
  Vadeia Cosme, vadeia &lt;br /&gt;
  T&#244; vadiando, vadeia &lt;br /&gt;
&lt;/p&gt;
&lt;/section&gt;
'
      , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
      , "respTitle" => "Nossa solução"
      , "respRenderTitle" => "Fica assim:"
      , "respComment" => ""
      , "respContent" => '
&lt;header&gt;
  &lt;h1&gt;Jornal da Regi&#227;o&lt;/h1&gt;
  &lt;nav&gt;
    &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#social&quot;&gt;Caderno Social&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#policial&quot;&gt;Boletim Policial&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/header&gt;
&lt;h2&gt;Caderno Regional&lt;/h2&gt;
&lt;section&gt;
&lt;h3&gt;Celebridades&lt;/h3&gt;
&lt;p&gt;
  &lt;img src=&quot;http://escola.mupi.me/img/filha-prefeito.jpg&quot; alt=&quot;Jordana, filha exemplar!&quot; /&gt;A
filha do exmo prefeito Jo&#227;o Dami&#227;o completou 15 anos e para comemorar
seu anivers&#225;rio, a fam&#237;lia sair&#225; em viagem por dois dias para Campos
do Jord&#227;o com tudo pago pela prefeitura!
&lt;/p&gt;
&lt;p&gt;
  &lt;img src=&quot;http://escola.mupi.me/img/carlos.jpg&quot; alt=&quot;Grande filho da regi&#227;o&quot; /&gt;O show do
cantor e deputado Francisco Aguilar foi um sucesso e reuniu grandes
nomes da nossa regi&#227;o como o ator Carlos Luis e sua esposa a surfista
alem&#227; Br&#252;nnhilde, que chamou aten&#231;&#227;o com seu novo cabelo vermelho
paix&#227;o. Contamos tamb&#233;m com a presen&#231;a do nosso querido prefeito Jo&#227;o
  &lt;img src=&quot;http://escola.mupi.me/img/frank.jpg&quot; alt=&quot;Performance exuberante&quot;/&gt;
&lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
&lt;h3&gt;&#211;bitos&lt;/h3&gt;
&lt;p&gt;
  &#201; com imenso pesar que a fam&#237;lia Dos Sicilias vem por meio deste
folhetim deixar p&#250;blica a morte do nosso querido Juan. Sempre
respeitado n&#227;o somente na regi&#227;o, como tamb&#233;m em todo o Brasil
&lt;/p&gt;
&lt;p&gt;
  Na mais profunda tristeza que anunciamos o falecimento da nossa
amada Dona Ivonete. H&#225; muito adoentada, esperamos que agora encontre
seu devido sossego.
&lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
&lt;h3&gt;Festividades&lt;/h3&gt;
&lt;p&gt;N&#227;o perca nesse s&#225;bado o grande Caruru para S&#227;o Cosme oferecido por
Luiza do Abar&#225;, j&#225; em eu XII ano: &lt;/p&gt;
&lt;p&gt;
  S&#227;o Cosme me mandou fazer &lt;br /&gt;
  Uma camisinha azul &lt;br /&gt;
  No dia da festa dele &lt;br /&gt;
  S&#227;o Cosme quer caruru &lt;br /&gt;
  Vadeia Cosme, vadeia &lt;br /&gt;
  T&#244; vadiando, vadeia &lt;br /&gt;
&lt;/p&gt;
&lt;/section&gt;
&lt;aside&gt;
  &lt;ul&gt;
    &lt;li&gt;Editor Chefe: Carlos Dami&#227;o&lt;/li&gt;
    &lt;li&gt;Estagi&#225;rio: Luis M&#225;rio Cardoso&lt;/li&gt;
  &lt;/ul&gt;
&lt;/aside&gt;
&lt;footer&gt;
  &lt;p&gt;Endere&#231;o: Rua Jorge da Capad&#243;cia, 200&lt;/p&gt;
  &lt;p&gt;email: contato@jornaldaregiao.com.br&lt;/p&gt;
  &lt;p&gt;telefone: 9999-8809
&lt;/footer&gt;
'
      ));?>
</div>
<div class="tab-pane in" id="pratic24">
<?php echo $this->element('exercise-editor-full', 
array(
      "exClass" => "exPratic4"
      , "lang"    => "html"
      , "exTitle" => '  
<p>Bem, temos então uma estrutura de página bem completa e adicionamos então o
caderno policial. Porém, é visto que os links criados não funcionam
corretamente e nossa página ainda necessita de alguma padronização. Utilizando
<code>div</code>, <code>id</code> e <code>span</code>, organize todo conteúdo que achar necessário e faça com que os
links criados funcionem corretamente (os links irão piscar, caso estejam corretos).</p>
'
      , "exRenderBtn" => "Mostrar"
      , "showRespBtn" => "Mostrar nossa solução"
      , "initialContent" => '
&lt;header&gt;
  &lt;h1&gt;Jornal da Regi&#227;o&lt;/h1&gt;
  &lt;nav&gt;
    &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#social&quot;&gt;Caderno Social&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#policial&quot;&gt;Boletim Policial&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/header&gt;
&lt;h2&gt;Caderno Regional&lt;/h2&gt;
&lt;section&gt;
&lt;h3&gt;Celebridades&lt;/h3&gt;
&lt;p&gt;
  &lt;img src=&quot;http://escola.mupi.me/img/filha-prefeito.jpg&quot; alt=&quot;Jordana, filha exemplar!&quot; /&gt;A
filha do exmo prefeito Jo&#227;o Dami&#227;o completou 15 anos e para comemorar
seu anivers&#225;rio, a fam&#237;lia sair&#225; em viagem por dois dias para Campos
do Jord&#227;o com tudo pago pela prefeitura!
&lt;/p&gt;
&lt;p&gt;
  &lt;img src=&quot;http://escola.mupi.me/img/carlos.jpg&quot; alt=&quot;Grande filho da regi&#227;o&quot; /&gt;O show do
cantor e deputado Francisco Aguilar foi um sucesso e reuniu grandes
nomes da nossa regi&#227;o como o ator Carlos Luis e sua esposa a surfista
alem&#227; Br&#252;nnhilde, que chamou aten&#231;&#227;o com seu novo cabelo vermelho
paix&#227;o. Contamos tamb&#233;m com a presen&#231;a do nosso querido prefeito Jo&#227;o
  &lt;img src=&quot;http://escola.mupi.me/img/frank.jpg&quot; alt=&quot;Performance exuberante&quot;/&gt;
&lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
&lt;h3&gt;&#211;bitos&lt;/h3&gt;
&lt;p&gt;
  &#201; com imenso pesar que a fam&#237;lia Dos Sicilias vem por meio deste
folhetim deixar p&#250;blica a morte do nosso querido Juan. Sempre
respeitado n&#227;o somente na regi&#227;o, como tamb&#233;m em todo o Brasil
&lt;/p&gt;
&lt;p&gt;
  Na mais profunda tristeza que anunciamos o falecimento da nossa
amada Dona Ivonete. H&#225; muito adoentada, esperamos que agora encontre
seu devido sossego.
&lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
&lt;h3&gt;Festividades&lt;/h3&gt;
&lt;p&gt;N&#227;o perca nesse s&#225;bado o grande Caruru para S&#227;o Cosme oferecido por
Luiza do Abar&#225;, j&#225; em eu XII ano: &lt;/p&gt;
&lt;p&gt;
  S&#227;o Cosme me mandou fazer &lt;br /&gt;
  Uma camisinha azul &lt;br /&gt;
  No dia da festa dele &lt;br /&gt;
  S&#227;o Cosme quer caruru &lt;br /&gt;
  Vadeia Cosme, vadeia &lt;br /&gt;
  T&#244; vadiando, vadeia &lt;br /&gt;
&lt;/p&gt;
&lt;/section&gt;

&lt;h2&gt;Boletim Policial&lt;/h2&gt;
&lt;section&gt;
  &lt;h3&gt;Ocorr&#234;ncias&lt;/h3&gt;
  &lt;p&gt;Uma senhora foi assaltada quando voltava da missa nesse domingo a noite.
    Dentre os itens roubados, foi relatado que o meliante levou o folhetim da
    missa.
  &lt;/p&gt;
  &lt;p&gt;
    A opera&#231;&#227;o conjunta entre pol&#237;cias civil, militar e federais prendeu uma
quadrilha de assaltantes de banco que atormentava toda a redondeza. Com os
assaltantes foram encontradas 3 escopetas e 6 pistolas autom&#225;ticas de uso
exclusivo do exercito al&#233;m de coletes das policias civil e militares.
  &lt;/p&gt;
&lt;/section&gt;
&lt;section&gt;
  &lt;h3&gt;Transito&lt;/h3&gt;
    &lt;p&gt;O boletim do &#250;ltimo m&#234;s mostrou que aumentaram consideravelmente as
ocorr&#234;ncias de transito na cidade e regi&#227;o. Relatos de jovens dirigindo em
estado de embriagu&#234;s e fazendo &#39;rachas&#39; s&#227;o cada vez mais constantes e t&#234;m
alertado as autoridades respons&#225;veis.
    &lt;/p&gt;
&lt;/section&gt;
&lt;aside&gt;
  &lt;ul&gt;
    &lt;li&gt;Editor Chefe: Carlos Dami&#227;o&lt;/li&gt;
    &lt;li&gt;Estagi&#225;rio: Luis M&#225;rio Cardoso&lt;/li&gt;
  &lt;/ul&gt;
&lt;/aside&gt;
&lt;footer&gt;
  &lt;p&gt;Endere&#231;o: Rua Jorge da Capad&#243;cia, 200&lt;/p&gt;
  &lt;p&gt;email: contato@jornaldaregiao.com.br&lt;/p&gt;
  &lt;p&gt;telefone: 9999-8809
&lt;/footer&gt;
'
      , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
      , "respTitle" => "Nossa solução"
      , "respRenderTitle" => "Fica assim:"
      , "respComment" => ""
      , "respContent" => '
&lt;header&gt;
  &lt;h1&gt;Jornal da Regi&#227;o&lt;/h1&gt;
  &lt;nav&gt;
    &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#socialresposta&quot;&gt;Caderno Social&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#policialresposta&quot;&gt;Boletim Policial&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/header&gt;
&lt;h2&gt;Caderno Regional&lt;/h2&gt;
&lt;div id=&quot;socialresposta&quot;&gt;
  &lt;section&gt;
    &lt;h3&gt;Celebridades&lt;/h3&gt;
    &lt;p&gt;
      &lt;img src=&quot;http://escola.mupi.me/img/filha-prefeito.jpg&quot; alt=&quot;Jordana, filha exemplar!&quot; /&gt;A
    filha do exmo prefeito Jo&#227;o Dami&#227;o completou 15 anos e para comemorar
    seu anivers&#225;rio, a fam&#237;lia sair&#225; em viagem por dois dias para Campos
    do Jord&#227;o com tudo pago pela prefeitura!
    &lt;/p&gt;
    &lt;p&gt;
      &lt;img src=&quot;http://escola.mupi.me/img/carlos.jpg&quot; alt=&quot;Grande filho da regi&#227;o&quot; /&gt;O show do
    cantor e deputado Francisco Aguilar foi um sucesso e reuniu grandes
    nomes da nossa regi&#227;o como o ator Carlos Luis e sua esposa a surfista
    alem&#227; Br&#252;nnhilde, que chamou aten&#231;&#227;o com seu novo cabelo vermelho
    paix&#227;o. Contamos tamb&#233;m com a presen&#231;a do nosso querido prefeito Jo&#227;o
      &lt;img src=&quot;http://escola.mupi.me/img/frank.jpg&quot; alt=&quot;Performance exuberante&quot;/&gt;
    &lt;/p&gt;
  &lt;/section&gt;
  &lt;section&gt;
    &lt;h3&gt;&#211;bitos&lt;/h3&gt;
    &lt;p&gt;
      &#201; com imenso pesar que a fam&#237;lia Dos Sicilias vem por meio deste
    folhetim deixar p&#250;blica a morte do nosso querido Juan. Sempre
    respeitado n&#227;o somente na regi&#227;o, como tamb&#233;m em todo o Brasil
    &lt;/p&gt;
    &lt;p&gt;
      Na mais profunda tristeza que anunciamos o falecimento da nossa
    amada Dona Ivonete. H&#225; muito adoentada, esperamos que agora encontre
    seu devido sossego.
    &lt;/p&gt;
  &lt;/section&gt;
  &lt;section&gt;
    &lt;h3&gt;Festividades&lt;/h3&gt;
    &lt;p&gt;N&#227;o perca nesse s&#225;bado o grande Caruru para S&#227;o Cosme oferecido por
    Luiza do Abar&#225;, j&#225; em eu XII ano: &lt;/p&gt;
    &lt;p&gt;
      S&#227;o Cosme me mandou fazer &lt;br /&gt;
      Uma camisinha azul &lt;br /&gt;
      No dia da festa dele &lt;br /&gt;
      S&#227;o Cosme quer caruru &lt;br /&gt;
      Vadeia Cosme, vadeia &lt;br /&gt;
      T&#244; vadiando, vadeia &lt;br /&gt;
    &lt;/p&gt;
  &lt;/section&gt;
&lt;/div&gt;
&lt;div id=&quot;policialresposta&quot;&gt;
  &lt;h2&gt;Boletim Policial&lt;/h2&gt;
  &lt;section&gt;
    &lt;h3&gt;Ocorr&#234;ncias&lt;/h3&gt;
    &lt;p&gt;Uma senhora foi assaltada quando voltava da missa nesse domingo a noite.
      Dentre os itens roubados, foi relatado que o meliante levou o folhetim da
      missa.
    &lt;/p&gt;
    &lt;p&gt;
      A opera&#231;&#227;o conjunta entre pol&#237;cias civil, militar e federais prendeu uma
  quadrilha de assaltantes de banco que atormentava toda a redondeza. Com os
  assaltantes foram encontradas 3 escopetas e 6 pistolas autom&#225;ticas de uso
  exclusivo do exercito al&#233;m de coletes das policias civil e militares.
    &lt;/p&gt;
  &lt;/section&gt;
  &lt;section&gt;
    &lt;h3&gt;Transito&lt;/h3&gt;
      &lt;p&gt;O boletim do &#250;ltimo m&#234;s mostrou que aumentaram consideravelmente as
  ocorr&#234;ncias de transito na cidade e regi&#227;o. Relatos de jovens dirigindo em
  estado de embriagu&#234;s e fazendo &#39;rachas&#39; s&#227;o cada vez mais constantes e t&#234;m
  alertado as autoridades respons&#225;veis.
      &lt;/p&gt;
  &lt;/section&gt;
&lt;/div&gt;
&lt;aside&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;span&gt;Editor Chefe&lt;/span&gt;: Carlos Dami&#227;o&lt;/li&gt;
    &lt;li&gt;&lt;span&gt;Estagi&#225;rio&lt;/span&gt;: Luis M&#225;rio Cardoso&lt;/li&gt;
  &lt;/ul&gt;
&lt;/aside&gt;
&lt;footer&gt;
  &lt;p&gt;&lt;span&gt;Endere&#231;o&lt;/span&gt;: Rua Jorge da Capad&#243;cia, 200&lt;/p&gt;
  &lt;p&gt;&lt;span&gt;email&lt;/span&gt;: contato@jornaldaregiao.com.br&lt;/p&gt;
  &lt;p&gt;&lt;span&gt;telefone&lt;/span&gt;: 9999-8809
&lt;/footer&gt;'
      ));?>
</div>
<!--<div class="tab-pane in" id="pratic25">
</div>-->
</div>


</div>

<div class="step-pane hide" id="step6">

              <?php echo $this->element('quiz', 
  array('exercicios'=> array(
      0 => array('Questão 1',
                  'Você precisa editar um web site que outra pessoa produziu. Antes 
                  de abrir os arquivos HTML, você torce para que o web designer tenha deixado o código bastante semântico e que ele tenha organizado e especificado os diferentes tipos de conteúdos com _______________.',
                   array(array('As tags <code>&lt;section&gt;&lt;/section&gt;</code>.'), 
                         array('Comentários, escritos entre os símbolos &lt;!--  --&gt;.' , true),
                         array('Comentários, escritos entre os símbolos /*  */.'),
                         array('As tags <code>&lt;organize&gt;&lt;/organize&gt;</code>.')
                         ),
                   ' <p>As tags <code>&lt;section&gt;&lt;/section&gt;</code> servem para organizar o código de maneira semântica, indicando que, dentro delas, o conteúdo pode ser considerado uma seção. Já os comentários humanizam o código de modo a estabelecer uma conversa entre web designers: por exemplo, deixando um comentáio sobre o que é determinada seção.</p> <p>Para esclarecer os outros itens, os símbolos /* */ representam comentários na linguagem CSS e o elemento <code>organize</code> não existe.</p>'
                 ),

      1 => array('Questão 2',
                  '"As tags <code>&lt;aside&gt;&lt;/aside&gt;</code> são utilizadas para alterar o layout da página, posicionando um bloco de conteúdo ao lado do conteúdo principal (conforme a tradução da palavra inglesa "aside" que é "ao lado")." <p>Esta afirmação é verdadeira ou falsa?</p>',
                   array(array('Verdadeira'),
                         array('Falsa' , true )
                         ),
                   '<p>Primeiramente, devemos ter sempre como conceito que a linguagem HTML não realiza alterações no visual da página, mas sim, o CSS. Assim, esta afirmação é falsa quanto à questão do layout.</p>'
                 ),

        2 => array('Questão 3',
                 'Produzindo um web site, sabemos que é uma boa prática agrupar os conteúdos por semelhanças semânticas. Por exemplo, se o cliente pedir para o cabeçalho conter o logo, o menu de navegação e o telefone da empresa, utilizaremos as tags _______________ para envolvê-los e agrupá-los em um bloco.',
                   array(array('<code>&lt;h1&gt;&lt;/h1&gt;</code>'), 
                         array('<code>&lt;section&gt;&lt;/section&gt;</code>'),
                         array('<code>&lt;header&gt;&lt;/header&gt;</code>' , true ), 
                         array('<code>&lt;div&gt;&lt;/div&gt;</code>')
                         ),
                   '<p>Agrupamos as três informações dentro das tags <code>&lt;header&gt;&lt;/header&gt;</code> já que, de maneira semântica, elas possuem uma semelhança semântica que é pertencer ao cabeçalho ou header, em inglês, da página.</p>'

                 ),

      3 => array('Questão 4',
                  'Conversando com um web designer, ele disse que utilizou tags de tabela para posicionar visualmente os conteúdos de uma página e perguntou sua opinião. Você respondeu a ele que:',
                   array(array('A solução dele foi muito boa, pois facilitou o trabalho final.'), 
                         array('A solução dele não é recomendável, pois a linguagem HTML não é utilizada para controlar a aparência das páginas Web.', true ), 
                         array('A solução dele foi muito boa, pois utilizar elementos de tabela são indicados para este objetivo.'),
                         array('A solução dele não é recomendável, pois ele deveria ter separado as tabelas dentro de contêiners, como <code>&lt;section&gt;&lt;/section&gt;</code>.')             
                         ),
                   '<p></p>
                   <p class="ytEmbed"><iframe 
        width="640"
        height="360"
        src="http://www.youtube.com/embed/jB5KFJULahs?rel=0&fs=1&modestbranding=1&showinfo=0&iv_load_policy=3&theme=light&cc_load_policy=1&hl=1&cc_lang_pref=pt" 
        frameborder="0" 
        allowfullscreen></iframe></p>'
                 ))    
  )); ?>


</div>


</div>
</div>
