<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "JavaScript e jQuery",
 "aulas" => array(
    0 => array("Como funciona a internet", "internet"),
    1 => array("Sobre design", "design"),
    2 => array("Introdução ao HTML5", "html"),
    3 => array("Introdução a CSS3", "css"),
    4 => array("JavaScript e jQuery", "js-jquery", true),
    5 => array("Ferramentas externas","ferramentas-basico"),
  )
));?> 
<?php echo $this->element('wizard', array(
  "steps" => array(
    "O que é?",
    "DOM",
    "Como usar",
    "jQuery",
    "Utilizando o jQuery"
  )
));?>

<?php 
   $this->Html->script("js-jquery-lesson.js", array("inline" => false));
  //$this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container wizard-content navbar-fixed-top">
  <!-- Steps content -->
  <div class="step-content">

    <!-- INICIO: O que eh Javascript? -->
    <div class="step-pane active" id="step1">
        <h3>O que é JavaScript?</h3>
      <p>
        <span class="label label-inverse">JavaScript</span> é uma linguagem de programação cujos arquivos possuem extensão 
        <code>.js</code>. Podemos defini-la como programação por dois pontos fundamentais:
      </p>
      <ul>
        <li>
          Ela possui uma gramática e uma sintaxe.
        </li>
        <li>
           Ela é um meio através do qual desenvolvedores descrevem tarefas para computadores executarem.
        </li>
      </ul>
      <h4>De onde vem seu nome?</h4>
      <p>
        Inicialmente, esta linguagem foi chamada de 
        <strong>mocha</strong> e em seguida de 
        <strong>LiveScript</strong>, mas ambos não permaneceram por 
        muito tempo. Sua versão subsequente foi lançada no momento 
        em que a linguagem Java estava fazendo muito sucesso e, por 
        um motivo de marketing, seu nome foi modificado para 
        <strong>JavaScript</strong>. O curioso é que, apesar do nome, 
        JavaScript não possui relação alguma com a linguagem Java!
      </p>

      <h4>Mas, quando eu uso JavaScript?</h4>
      <p>
        Pense em interações em sites como: menus que aparecem quando clicamos em algo, conteúdos que se modificam automaticamente 
        e até mensagens que chegam através de chats. Este tipo de 
        interação com conteúdo pode ser resultado do uso de JavaScript, 
        uma vez que ele permite que o desenvolvedor manipule os conteúdos do web site de acordo com as interações do usuário.
      </p>
    </div>
    <div class="step-pane" id="step2">
      <h3>O que é o DOM?</h3>
      <p>
        <span class="label label-inverse">DOM</span> é a abreviação 
        para <strong>D</strong>ocument <strong>O</strong>bject <strong>M</strong>odel
        (Modelo de Objeto de Documento). Em uma explicação
        simples, <strong>DOM</strong> é um modelo que o navegador utiliza para
        salvar, manipular e renderizar os arquivos HTML com seus arquivos
        relacionados. Através desse modelo, provê uma interface de programação que 
        permite que o desenvolvedor escreva os aplicativos Web. 
      </p>

      <h5>Para o desenvolvedor</h5>
      <p>
        Ou seja, você desenvolve sua aplicação utilizando marcações e
        linguagens diversas, mas sempre considerando que o navegador vai
        utilizar um modelo de representação de documento pré-estabelecido, o
        DOM, que possui funcionalidades que você pode utilizar, no qual há hierarquia entre
        elementos aninhados e ao que você pode anexar funcionalidades próprias
        utilizando JavaScript. 
      </p>
      
      <h5>Porque é importante?</h5>
      <p>
        Quando o navegador recebe o HTML do servidor, antes de apresentar na
        tela o que o desenvolvedor escreveu, ele o "transforma" em um objeto
        DOM. Nesse processo, ele pode, inclusive, gerar erros caso o
        desevolvedor tenha escrito algum código inválido. Logo, é importante que se
        tenha clareza sobre essa representação, tanto para entender o
        comportamento da sua aplicação, quanto para desenvolver em si.
      </p>

      <p>
        A seguir, temos uma sequência simplificada de alguns pontos importantes no
        processo de renderização de uma página, para que você possa 
        melhor compreender o DOM:
      </p>
      <ol>
        <li>
          O navegador constrói uma estrutura formada basicamente
          pelos elementos descritos no documento HTML, em formato de árvore.
        </li>
        <li>
          Depois, ele faz a ligação entre cada elemento desta estrutura e
          suas características de estilo, tanto as padrões (do navegador), 
          quanto as descritas nos
          arquivos CSS. 
        </li>
        <li>
          Então, ele desenha essa estrutura na tela, sendo isso a 
          página web que o
          usuário irá visualizar.
        </li>
        <li>
          Enquanto esses itens ocorrem, ele adiciona uma lista de 
          <a href="#" 
             class="pop"
             data-toggle="popover"
             data-original-title="Função"
             data-content="Uma função é um conjunto de comandos de uma
             linguagem de programação, agrupados por um nome. Esses comandos só
             são executados quando essa função é invocada. No nosso caso aqui, invocada pelo DOM.">
            funções</a> que foram declaradas
          nos arquivos JavaScript e que serão executadas de acordo com o
          acontecimento de eventos específicos.
        </li>
        <li>
          Por fim, o navegador começa a monitorar as 
          <a href="#"
             class="pop"
             data-placement="top"
             data-toggle="popover"
             data-content="Ações do usuário podem ser cliques, preenchimento de formulários e rolagem, por exemplo." >
            ações do usuário
          </a> na página, executando funções pre-determinadas
          (como submeter um formulário) ou funções definidas pelo usuário através do
          JavaScript (que podem sobrescrever as originais). Vale lembrar que
          essas funções são executadas utilizando o DOM e, caso seja necessário,
          o navegador redesenha a página que está sendo exibida. 
        </li>
      </ol>
      <p>
        <span class="label label-info">Fica a dica!</span>
        <a href="http://tableless.com.br/tenha-o-dom/#.Ue6ra469vv4" 
           target="_blank">Tenha o DOM</a> é um artigo bastante interessante 
        do portal Tableless sobre o assunto!
      </p>
    </div>
    <div class="step-pane" id="step3">
      <h3>Como utilizo o JavaScript?</h3>
      <p>
        Da mesma forma que o HTML e o CSS, o JavaScript é escrito em 
        arquivos de texto, porém, com sua própria sintaxe. O navegador lê 
        estes arquivos, executa os comandos descritos neles e adiciona suas
        funções ao DOM para que possam ser executadas posteriormente, quando uma condição 
        descrita no JavaScript é cumprida.
      </p>
      <h4>Inserindo na página</h4>
      <p>
        Arquivos JavaScript possuem a extensão <code>.js</code> e são incluídos 
        no projeto de forma semelhante ao dos arquivos CSS: um link no arquivo principal HTML (geralmente chamado de <code>index.html</code>),
        mas que, ao invés do
        elemento <code>link</code>, é criado com o elemento <code>script</code>. 
      </p>
      <pre class="prettyprint">&lt;script src=&quot;js/principal.js&quot; 
        type=&quot;text/javascript&quot;&gt;&lt;/script&gt;</pre>
      <p>
        <span class="label label-warning">Importante</span> O atributo 
        <code>src</code> é <strong>obrigatório</strong> para
        indicar o caminho para onde se encontra o arquivo JavaScript. 
      </p>
      <p>
        Outro atributo que é importante, mas não obrigatório, é o 
        <code>type</code>, que indica o tipo do script sendo adicionado, 
        o qual, neste caso, é do tipo <strong>text/javascript</strong>. 
      </p>
      <p>
        Sobre a localização no arquivo HTML, normalmente, as tags 
        <code>&lt;script&gt;</code> são inseridas dentre as tags do elemento 
        <code>head</code>, logo após as referências às folhas de estilo 
        (tags <code>&lt;link&gt;</code>).
      </p>
    </div>

    <div class="step-pane" id="step4">
      <h3>Introdução ao jQuery</h3>
      <p>
        Já explicamos o que é JavaScript, para que ele serve e como o
        importamos em uma página HTML. Agora, vamos aprender a utilizá-lo e, 
        para facilitar, utilizaremos uma  
        <a href="#" class="mail-client pop"
           data-placement="top"
           data-original-title="Biblioteca em computação"
           data-content='<p>É uma coleção de código, dados e rotinas 
           de programação que auxilia o desenvolvedor para construção e desenvolvimento 
           de software. Para mais informações, sugerimos
           o <a href="http://pt.wikipedia.org/wiki/Biblioteca_(computa%C3%A7%C3%A3o)"
                target="a_blank">verbete</a> da Wikipedia.</p>'>biblioteca</a>
        denominada jQuery.
      </p>

      <p>
        <span class="label label-inverse">jQuery</span> é uma biblioteca 
        de código desenvolvido em JavaScript que contém diversos módulos 
        já prontos, facilitando o trabalho do desenvolvedor. 
      </p>
      <p>
        Sugerimos, inicialmente, o uso dela ao invés de JavaScript puro, por ela 
        possuir muitas coisas prontas que já lidam, em sua maioria, com 
        as diferenças entre os web navegadores. Veja abaixo um exemplo do jQuery:
      </p>
      
      <div 
         class="two-columns-example row-fluid" 
         data-render-title="Clique nos items de lista para ver o resultado:">
<ul class="exemplo-jquery">
  <li>Clique em mim!</li>
  <li>Clique em mim!</li>
</ul>

<script type="text/javascript">
  jQuery(
    function(){
      jQuery(".exemplo-jquery li")
            .click(
                function(){ 
                    jQuery(this).hide();
                }
            );
    });
</script>
      </div>  
      <p>
        <span class="label label-info">Fica a dica!</span> Para que os itens
        reapareçam, basta atualizar sua página, clicando por exemplo
        em <strong>F5</strong> do seu teclado. 
      </p>
      <p>
        A função colocada neste código determina que, ao clicar nos itens, eles
        desaparecerão. Tente entender a sequência do que está escrito entre as
        tags <code>&lt;script&gt;</code>, sabendo que a palavra <strong>hide</strong>,
        traduzida, é <strong>esconder</strong>. 
      </p>
      <p>
        <span class="label label-warning">Importante</span> 
        No código acima, não utilizamos um arquivo à parte, mas sim a
        tag <code>&lt;script&gt;</code> recheada com o código. Esta prática não é
        recomendada uma vez que se mistura lógica (JavaScript) com estrutura
        (HTML). Fizemos isso neste exemplo apenas para que pudéssemos mostrar
        de maneira mais simples o funcionamento do jQuery. O recomendado é possuir, conforme já dito, um arquivo separado para o JavaScript!
      </p>
    </div> 

    <div class="step-pane" id="step5">  
      <h3>Utilizando o jQUery</h3>
      <p>
        Vamos ver passo-a-passo como podemos utilizar jQuery em nossa página. Leia os passos a seguir!
      </p>

      <ul id="jq-steps" class="nav nav-tabs" >
        <li class="active">
          <a href="#jq-1" data-toggle="tab">Inserindo jQuery na página</a>
        </li>
        <li class="">
          <a href="#jq-2" data-toggle="tab">Criando seu Javascript</a>
        </li>
        <li class="">
          <a href="#jq-3" data-toggle="tab">Utilizando jQuery</a>
        </li> 
      </ul>   

      <div id="jq-content" class="tab-content">
        <div class="tab-pane active in" id="jq-1">
          <p>
            Como vimos no tópico anterior, podemos nos referenciar a arquivos
            JavaScript através de uma tag <code>&lt;script&gt;</code> nos arquivos HTML. Como o
            jQuery é escrito nessa linguagem de programação, basta que utilizemos este método
            para que os módulos do jQuery possam ser utilizados por nós. 
          </p>
          <p>
            Para então inserir:
          </p>

          <ul class="mupi-step-by-step">
            <li>
              Salve <a href="http://code.jquery.com/jquery-latest.js">este arquivo</a>
              com o nome <code>jquery.js</code> dentro de uma pasta <code>js</code> em seu
              projeto. Este arquivo contém toda a biblioteca jQuery que você poderá utilizar em seu projeto!
            </li>
            <li>
              Adicione, no que arquivo HTML que você deseja inserir funções, a seguinte linha, logo após as tags <code>&lt;link&gt;</code>
              que estão dentro da tag <code>&lt;head&gt;</code>:
              <pre class="prettyprint">&lt;script src=&quot;js/jquery.js&quot; 
                type=&quot;text/javascript&quot;&gt;&lt;/script&gt;</pre>
            </li>
          </ul>
        </div>

        <div class="tab-pane" id="jq-2">
          <p>
            Vamos agora criar um outro arquivo JavaScript para conter nosso código
            javascript. Para isso:
          </p>

          <ul class="mupi-step-by-step">
            <li>
              Crie um arquivo <code>principal.js</code>, na mesma pasta <code>js</code>
              em que salvou o arquivo do jQuery.
            </li>
            <li>
              Adicione, no HTML, a seguinte linha logo após a linha de importação do jQuery:
              <pre class="prettyprint">&lt;script src=&quot;js/principal.js&quot; 
                type=&quot;text/javascript&quot;&gt;&lt;/script&gt;</pre>
            </li>

          </ul>

          <p>
            Como o arquivo da biblioteca jQuery foi adicionada antes deste, 
            podemos utilizar tudo que ele oferece.
          </p>          
        </div>
        <div class="tab-pane" id="jq-3">
          No seu arquivo <code>principal.js</code>, insira o seguinte código:
<pre class="prettyprint linenums">jQuery(document).ready(function(){
  jQuery('body').html("&lt;h2&gt;Olá, mundo&lt;/h2&gt;");
});
</pre>
        </div>
      </div>

      <h4>Aprenda praticando!</h4>
      <p>Para ver realmente como jQuery funciona, <a href="projetos-webdesign#step4" target="_blank">clique aqui</a> e realize o terceiro projeto "Manipulando o conteúdo".</p>
    </div>
  </div>
</div>


<!-- 
Inserindo JQuery: Como vimos na seção anterior, podemos nos referenciar à
arquivos javascript através de uma tag script (<script type="text/javascript"
                                                       src="caminho_do_arquivo.js"></script>). Pois
é assim que nos referenciaremos à biblioteca  JQuery. 
Precisamos baixar a ultima versão da biblioteca no site oficial do JQuery
(http://jquery.com/download/): Existem 2 versões: compressed(comprimida =
redução de tamanho em kb)  e uncompressed(não comprimida) . Utilizaremos a
uncompressed que é maior mas mais fácil de ser compreendida caso precisemos. 
Salvamos o arquivo ".js" na pasta js em nosso projeto
Agora importamos o JQuery em nossa página
O objeto jQuery ( $ ): Para 'acessar' as funcionalidades que o jQuery nos
proporciona, utilizaremos o objeto jQuery. Ele pode ser representado pelo
símbolo $ (cifrão) 
Seletores: 
Lembremos como o CSS faz para 'selecionar' elementos de uma página para aplicar estilos:
"." para classe
"#" para ids
tag para <tag></tag> -->
