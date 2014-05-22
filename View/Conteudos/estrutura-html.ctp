<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Arquivo HTML",
    "url" => "estrutura-html",
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
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="estrutura-html">
       <h3>A estrutura e a organização de um arquivo HTML</h3>
       
       <p>
         Alguns elementos HTML são fundamentais para o início de seu uso, pois 
         tratam-se de elementos de organização do arquivo HTML. 
        </p>
        <p>Um arquivo HTML é um arquivo de texto puro no qual você,
         desenvolvedor, escreve diretamente e o navegador, ao recebê-lo,
         interpreta e exibe na tela de acordo com os estilos  
         <a href="#" class="mail-client pop"
            data-placement="top"
            data-content='<p>Cada navegador possui um CSS interno que é 
            aplicado aos conteúdos das páginas, caso eles estiverem sem 
            seu próprio estilo definido pelo desenvolvedor.</p>'>
           pré-estabelecidos</a> e os definidos por você.
       </p>
       <p>
          No entanto, o navegador interpreta qualquer coisa? É só colocar tags e
         atributos e ele faz todo o resto? Não é bem assim. Apesar dos
         navegadores em geral terem uma tolerância a erros de sintaxe, o HTML
         tem especificações e estruturas definidas e há também sites que
         verificam a validade da estrutura de um certo arquivo. Há algumas tags
         que são essenciais para validação e utilização de boas práticas
         durante o desenvolvimento. Abaixo, segue a estrutura básica de um
         arquivo HTML5. 
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
         renderizar a página. Note que essa tag não possui uma barra (/) de
         fechamento. 
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
         busca. <span class="label label-warning">Importante</span> Os
         elementos dentro da tag <code>&lt;head&gt;</code> não são renderizados
         na página!
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
           tag <code>&lt;head&gt;</code>, apesar de não ser incomum encontrar
           essas tags em outros lugares do código. 
         </li>
       </ul>
     </div>     
   </div>
 </div>

