<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "O que é HTML?",
    "url"   => "html-definicao"
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
    <div class="step-pane in" id="html">
      <h3>O que é HTML?</h3>
      <p>
        <span class="label label-inverse">HTML</span>, sigla para <em>Hypertext
        Markup Language</em> ou em português Linguagem de Marcação de Hipertexto,
        é a linguagem utilizada para dar estrutura e semântica aos conteúdos
        durante o desenvolvimento de web sites. 
      </p>
      <p>
        <span class="label label-inverse">HTML5</span> é na verdade a nova
        versão do HTML. Uma das principais características dessa versão é 
        facilitar a  manipulação dos elementos de uma página, uma vez que ele
        fornece ferramentas que facilitam o trabalho do 
        <a href="http://escola.mupi.me/conteudos/css-sobre"
        target="blank">CSS</a> e do Javascript.
      </p>
      <p>
        Uma outra vantagem do HTML5 é facilitar a compatibilidade dos sites
        entre os diferentes navegadores que existem. Em outras versões do HTML
        às vezes era necessário fazer o mesmo site praticamente duas vezes para
        que funcionasse como desejado no navegador Internet Explorer, por 
        exemplo. 
      </p>
      <p>
       Mas, o que realmente isso quer dizer? 
       Bem, vamos por partes que ficará fácil! Primeiramente, é importante ter
       em mente as seguintes relações:
     </p>
     <ul>
      <li>As páginas Web são representadas por arquivos HTML.</li>
      <li>Os arquivos HTML são arquivos de texto, produzidos em editores de código 
        fonte (não como o Microsoft Word), cuja <a href="#" class="glossario pop" 
        data-placement="top"
        data-original-title="Extensão"
        data-content='O nome dos arquivos é composto por duas partes: uma é o seu 
        nome propriamente dito e a outra é sua extensão, indicando de qual tipo ele é. 
        Ela possui geralmente 3 ou 4 caracteres precedidos por um ponto e é colocada ao 
        final do nome do arquivo. 
        Acesse o 
        <a href="http://pt.wikipedia.org/wiki/Extens%C3%A3o_de_nome_de_ficheiro" 
        target="_blank">verbete</a>  sobre 
        isso da Wikipedia para visualizar alguns exemplos.'>
        extensão </a> é <code>.html</code>.</li>
        <li>O texto contido nesses arquivos é marcado por uma linguagem (HTML) que 
          determina o papel de cada trecho ali presente.</li>
        <li>Esta marcação informa ao navegador web o papel de cada um desses trechos.</li>
        <li>O HTML não controla a aparência e o estilo da página web. Para isso, temos o 
          CSS.</li>
      </ul>
      <p>
        Para compreender o que quer dizer essas marcações que o HTML faz numa página, 
        clique sobre "Textos em parágrafos.", "item 1" e "item 2" e 
        observe na caixa abaixo deles como eles são representados em HTML: 
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
          Observe que, ao clicar sobre cada texto, é mostrado que os itens da lista 
          estão entre <code>&lt;li&gt;</code> e <code>&lt;/li&gt;</code>, o texto 
          está entre <code>&lt;p&gt;</code> e <code>&lt;/p&gt;</code> e que os dois 
          elementos <code>li</code> estão entre <code>&lt;ul&gt;</code> e 
          <code>&lt;/ul&gt;</code>. Esses são alguns dos <span class="label 
          label-inverse">elementos</span> do HTML. Os elementos são os objetos 
          de uma página HTML que informam ao navegador o que representa cada 
          trecho do arquivo HTML. Eles são um dos três principais conceitos 
          desta linguagem, sendo os outros dois os atributos e as tags.
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
      Note que existe uma barra no fim da tag! Esta barra é obrigatória e é ela 
      quem fecha a tag.
    </p>
    <p>
      <span class="label label-inverse" id="atributo">Atributos</span>
      Atributos são as propriedades atribuídas aos elementos. Sua sintaxe é 
      sempre descrita com seu nome, o sinal de "=" e um valor entre aspas: 
      <code>nomeDoAtributo="valor"</code>. Por exemplo, para o elemento 
      <code>a</code>, que determina um link, temos o atributo <code>href</code> 
      que indica o caminho para onde o usuário será direcionado quando clicar 
      em um certo trecho de texto. Veja em <code>&lt;a href="http://pt.wikipedia.com"
      &gt;Wikipedia&lt;/a&gt;</code>, o texto "Wikipedia" possui um link para a 
      página http://pt.wikipedia.com. 
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
        Visualize o código-fonte de páginas no seu navegador! Para isso, clique 
        com o botão direito em qualquer lugar da página e selecione a opção 
        <strong>Exibir código-fonte</strong>. Você pode também utilizar o 
        atalho <strong>Ctrl + U</strong>. 
      </li>
      <li>
        Comente seu código! Comentários inseridos no arquivo HTML não são 
        visíveis quando renderizados em um navegador web. É sempre interessante 
        inserir comentários para organizar seu código. Assim, caso outra pessoa 
        ou você mesmo no futuro precise realizar alterações, a identificação das 
        partes projeto será facilitada. Para adicionar comentários ao código, 
        utiliza-se a sintaxe <code>&lt;!--</code> para marcar o início e 
        <code>--&gt;</code> para o fim do comentário, como em <code>&lt;!-- 
        isto é um comentário --&gt;</code>.
      </li>
    </ul>
    <div 
    class="two-columns-example row-fluid" 
    data-code-title="Veja o exemplo abaixo analisando os três conceitos do 
    HTML que aprendemos (elementos, tags e atributos), além dos comentários. 
    Você consegue identificá-los?"
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
    portal em português de conteúdo Front-End com vasto acervo de artigos sobre 
    o assunto.
  </p>
  <p>
    <span class="label label-info">Fica a dica!</span> 
    <a href="http://startupsthisishowdesignworks.com/" target="_blank">Startups, 
      This Is How Design Works</a> é um guia em inglês que explica a importância do
      design.
    </p>

  </div>      
</div>
</div>
