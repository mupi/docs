<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "Estrutura básica de projetos",
 "aulas" => array(
  0 => array("Como funciona a internet", "internet"),
  1 => array("Sobre design", "design"),
  2 => array("Introdução ao HTML5", "html"),
  3 => array("Introdução a CSS3", "css"),
  4 => array("Estrutura básica de projeto", "estrutura-projeto", true),
  5 => array("JavaScript e jQuery", "js-jquery"),
  6 => array("Ferramentas externas","ferramentas-basico"),
  7 => array("Projetos","projetos-webdesign"),
  )
 )); 
 ?> 
 <?php echo $this->element('wizard', array(
  "steps" => array(
   "Estrutura HTML",
   "Diretórios",
   "Editores"
   ))); ?>

 <?php 
   $this->Html->script("bootstro.js", array("inline" => false));
   $this->Html->script("exercise-inspector.js", array("inline" => false));
   $this->Html->script("html-lesson.js", array("inline" => false));
   $this->Html->css("html-lesson.css", null, array("inline" => false));
   $this->Html->css("estruturando-lesson.css", null, array("inline" => false));
   $this->Html->css("exercise-inspector.css", null, array("inline" => false));
   $this->Html->css("bootstro.css", null, array("inline" => false));
 ?>

 <div class="container wizard-content navbar-fixed-top">
   <div class="step-content">
     <div class="step-pane active" id="step1">
       <h3>A estrutura e a organização de um arquivo HTML</h3>
       
       <p>
         Alguns elementos HTML são fundamentais para o início de seu uso, pois tratam-se 
         de elementos de organização do arquivo HTML. Como já sabemos, um arquivo
         HTML é um arquivo de texto puro no qual você, desenvolvedor, escreve
         diretamente e o navegador, ao recebê-lo, interpreta e exibe na tela de
         acordo com os estilos <a href="#" class="mail-client pop"
                                  data-placement="top"
                                  data-content='<p>Cada navegador possui um CSS interno que é aplicado aos conteúdos das páginas, caso eles estiverem sem seu próprio estilo definido pelo desenvolvedor.</p>'>pré-estabelecidos</a> e os definidos por você.
       </p>
       <p>
         Mas, o navegador interpreta qualquer coisa? É só colocar tags e atributos e
         ele faz todo o resto? Não é bem assim. Apesar dos navegadores em geral
         terem uma tolerância a erros de sintaxe, o HTML tem especificações e
         estruturas definidas e há também sites que verificam a validade da
         estrutura de um certo arquivo. Há algumas tags que são essenciais para validação e utilização de boas práticas
         durante o desenvolvimento. Abaixo, segue a estrutura básica de um arquivo HTML5.
       </p>
       <p><span class="label label-warning">Importante</span>  Nossa sugestão é
         que seu arquivo HTML principal, cujo nome geralmente
         é <strong>index.html</strong>, sempre inicie com essa estrutura.</p>
       <div class="row-fluid">
         <div class="span6 offset3">
           <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html lang="pt"&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Olá mundo!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Olá mundo!&lt;/h1&gt;
      &lt;p&gt;Isto é um site.&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;      </pre>
         </div>
       </div>
       <p>
         Segue a descrição das tags e atributos acima:
       </p>
       <p>
         <code>&lt;!DOCTYPE html&gt;</code> tag  de identificação do
         tipo de especificação de <a href="#" class="mail-client pop"
                                     data-placement="top"
                                     data-content='<p>Por exemplo, para HTML5,
         basta declarar HTML. Diferentemente para outras especificações do
         arquivo, como XHTML e HTML 4.0.1.</p>'>HTML</a> que será usada para
         renderizar a página. Note que essa tag não possui uma barra (/) de fechamento.
       </p>
       <p>
         <code>&lt;html&gt;</code> indica que todo o conteúdo que ela engloba é
         HTML (veja que seu fechamento sempre será no fim do arquivo). É através
         dele que o navegador "entende" que trata-se de HTML. O
         atributo <code>lang</code>, que fica dentro dela, indica o idioma
         utilizado na página.
       </p>
       <p>
         <code>&lt;head&gt;</code> tag que contém as informações sobre a página
         que serão lidas apenas pelo navegador. Dentro dessa tag, estão
         inclusive as informações para mecanismos externos de redes sociais e
         busca. <span class="label label-warning">Importante</span> Os elementos dentro da
         tag <code>&lt;head&gt;</code> não são renderizados na página! 
       </p>
       <p>
         <code>&lt;meta charset="utf-8"&gt;</code> aqui temos o tipo de
         codificação dos caracteres da página, neste caso utf-8. Caso não houver
         esta declaração, acentuação brasileira, por exemplo, pode não funcionar
         na exibĩção da página.
       </p>
       <p>
         <code>&lt;title&gt;</code> é o título da página. Este título é o que
         aparece na aba do navegador!
       </p>
       <p>
         <code>&lt;body&gt;</code> contém todo o conteúdo HTML da sua página,
         assim como a estrutura que envolve esse conteúdo,
         como as tags <code>section</code>, <code>header</code>, <code>footer</code>, 
         <code>div</code>, <code>ul</code> e demais elementos.      
       </p>
       <p>
         Alguns pontos importantes sobre essa estrutura:
       </p>
       <ul>
         <li>
           Dentro da tag <code>&lt;html&gt;</code>, temos duas tags
           principais: <code>&lt;head&gt;</code> e <code>&lt;body&gt;</code>
         </li>
         <li>
           Dentro da tag <code>&lt;head&gt;</code>, temos duas tags
           principais: <code>&lt;meta&gt;</code> e <code>&lt;title&gt;</code>. 
         </li>
         <li>
           Tags de <code>&lt;script&gt;</code> e <code>&lt;link&gt;</code> para
           inserir arquivos de JavaScript e CSS também são colocadas dentro da
           tag <code>&lt;head&gt;</code>, apesar de não ser incomum encontrar essas
           tags em outros lugares do código.
         </li>
       </ul>
     </div>
     
     <div class="step-pane" id="step2">
       <h3>Estrutura de diretório</h3>
       <p>
         Para criar um site simples como os dos exemplos que temos utilizado, é
         preciso criar uma estrutura local para que você consiga trabalhar. 
         Essa estrutura nada mais é que um diretório, ou pasta, contendo arquivos
         e subdiretórios. Como exemplo, vamos utilizar a organização do projeto da
         ONG "Caipora" que estamos já utilizando em outras aulas.
       </p>
       <ul>
         <li>
           Primeiramente, criamos uma pasta, ou diretório, que conterá todos os arquivos do projeto. 
           Neste caso, vamos nomeá-la "caipora" e a sugestão é que este nome seja sempre uma referência fácil 
           para encontrar o projeto.
         </li>
         <li>
           Dentro da raiz desse diretório, criamos um arquivo chamado "index.html" que
           será a página inicial do nosso site. Os outros arquivos cuja extensão
           for <code>.html</code> também serão colocados preferencialmente na raiz
           da pasta. Sugerimos que o arquivo da página inicial do seu projeto
           sempre seja nomeado como <strong>index.html</strong> pois é uma
           nomenclatura comum entre os desenvolvedores.
         </li>
         <li>
           Os subdiretórios serão nomeados de "img", "css" e "js", ou seja, dentro do primeiro teremos todas as imagens 
           do seu web site, do segundo, os arquivos de extensão <code>.css</code> e, do terceiro, os de extensão <code>.js</code>.
         </li>
       </ul>

       <div class="row-fluid">
         <div class="span6 offset3">
           <ul class="folder-tree">
             <li class="root">
               caipora
               <ul>
                 <li class="root">
                   css
                   <ul>
                     <li>estilo.css</li>
                   </ul>
                 </li>
                 <li class="root">
                   img
                   <ul>
                     <li>logo-cabecalho.png</li>
                     <li>otto.png</li>
                     <li>geni.jpg</li>
                   </ul>
                 </li>
                 <li class="root">
                   js
                   <ul>
                     <li>main.js</li>
                   </ul>
                 </li>
                 <li class="root">
                   artigos
                   <ul>
                     <li>como-alimentar-seu-gato.html</li>
                     <li>como-dar-banho.html</li>
                     <li>viajar-com-seu-animal.html</li>
                   </ul>
                 </li>
                 <li>index.html</li>
                 <li>lista-animais.html</li>
               </ul>
             </li>
           </ul>
         </div>
       </div>
       <p>
         <span class="label label-info">Fica a dica!</span> 
         <span class="label label-warning">Importante</span> Para nomear pastas e
         arquivos não utilize acentos ou caracteres específicos da língua
         portuguesa, como "ç", e use hifens no lugar de espaços como em <strong>lista-animais.html</strong>.
       </p>
      
       <h5>Mas como relacionaremos estes arquivos de modo a termos um web site?</h5>
       <p>
         Simples, através de indicações no código em elementos específicos! Por exemplo, os
         elementos <code>a</code>, <code>img</code>, <code>link</code> e <code>script</code>
         têm atributos nos quais indicamos arquivos externos: as
         tags <code>&lt;img&gt;</code>, <code>&lt;link&gt;</code> e <code>&lt;script&gt;</code>
         usam o atributo <code>src</code> para indicar o arquivo que estão
         utilizando como em
         <code>&lt;img src="img/geni.jpg" alt=""&gt;</code>; a tag <code>&lt;a&gt;</code> usa o atributo <code>href</code> indicando
         o caminho para a página que será aberta ao clicar no mesmo, da seguinte maneira 
         <code>&lt;a href="lista-animais.html" target="_blank"&gt;Animais para adoção&lt;/a&gt;</code>.
       </p>
       
       <p>
         Introduziremos agora os conceitos de caminho absoluto e caminho relativo
         que são as duas formas de representar indicações para arquivos externos
         a serem relacionados através dos atributos <code>href</code> e <code>src</code>
         de cada uma das tags.
       </p>
      
       <p>
         <span class="label label-inverse">Caminho relativo</span> 
         Um caminho relativo é uma indicação de onde se encontra o arquivo
         necessário, considerando o lugar do próprio arquivo que o indica, no mesmo
         servidor. Por exemplo, o link 
       </p>
       <pre class="prettyprint linenums">
&lt;a href="artigos/como-dar-banho.html" target="_blank"&gt;
  Como dar banho no seu animal
&lt;/a&gt; </pre> 
       <p>
         dentro da página <strong>index.html</strong> diz ao navegador que ele
         vai encontrar essa página dentro do diretório <strong>artigos</strong>,
         enquanto o link
       </p>
       <pre class="prettyprint linenums">
&lt;a href="viajar-com-seu-animal.html" target="_blank"&gt;
  Dicas de viagem com seu animal
&lt;/a&gt;</pre> 
       <p>
         dentro da página <strong>como-dar-banho.html</strong>, refere-se a uma
         página no mesmo diretório que ela. Veja que em ambos os links, as
         referências são pra um mesmo servidor.
       </p>
       
       <p class="alert alert-info">
         O caminho relativo indica em que diretório (<strong>relativo</strong> ao
         arquivo atual) deste site foi colocado o recurso desejado! 
       </p>

       <p> 
         <span class="label label-inverse">Caminho absoluto</span>
         Este outro tipo de caminho é utilizado quando queremos referenciar um
         recurso que está em um servidor que não é o nosso, ou seja, quando utilizamos 
         <a href="#" class="glossario pop" data-placement="right"
            data-original-title="Endereço de uma página"
            data-content='Como vimos em <a href="internet#step4" 
                                           target="_blank">Protocolos FTP e HTTP e 
            jargões da internet</a>.'>
           URLs
         </a>.
         Por exemplo, se formos criar um link para a wikipedia, teremos a seguinte sintaxe <code>&lt;a 
           href=&quot;http://pt.wikipedia.org/&quot; target=&quot;_blank&quot;&gt;Wikipedia&lt;/a&gt;</code>
       </p>  
     </div>
     <div class="step-pane" id="step3">
       <h3>Editores de texto</h3>
       <p>
         Neste vídeo apresentamos o Sublime Editor 2, um editor de texto
         recomendado por ser leve e com muitas ferramentas úteis para o desenvolvimento.
       </p>
       <iframe id="video-sublime" width="640" height="480" src="//www.youtube.com/embed/d7Gi6aLcong" frameborder="0" allowfullscreen></iframe>
       <p>
         Esta é apenas uma sugestão, pois você pode utilizar qualquer outro
         editor de texto que seja de sua preferência: as funções citadas no
         vídeo são semelhantes entre eles. O mais importante é lembrar-se que
         programas como o Microsoft Word e o Libre Office são processadores de
         texto e portanto não são apropriados para edição de código.
       </p>
     </div>
   </div>
 </div>

