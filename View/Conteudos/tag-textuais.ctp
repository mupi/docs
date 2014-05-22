<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Elementos textuais",
    "url" => "tag-textuais",
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
        <div class="step-pane in" id="textuais">
       
       <h3>Elementos textuais</h3>
       <p>
         Há muitos elementos HTML que lidam com o texto em si. Aqui, falaremos 
         sobre 3 que são importantes para iniciar um trabalho em desenvolvimento 
         web, sendo eles: <code>h</code>, <code>p</code> e <code>br</code>.
       </p>
       <h5>Heading - título</h5>
       <p>O elemento <code>h</code> representa os títulos de uma página. Ele 
        sempre vem acompanhado de um número, que pode ser de 1 a 6, 
        configurando os diferentes tipos de títulos de uma página, sendo 
        que para o título principal temos <code>&lt;h1&gt; &lt;/h1&gt;</code>.
       </p>
       <h5>Paragraph - parágrafo</h5>
       <p>
         O elemento <code>p</code> determina que o que estiver envolvido 
         pelas tags <code>&lt;p&gt; &lt;/p&gt;</code> representa um parágrafo.
       </p>
       <h5>Line break - quebra de linha</h5>
       <p>
         Este elemento, cuja tag é representada por <code>&lt;br&gt;</code> 
         ou <code>&lt;br /&gt;</code>, indica uma quebra de linha em um texto.
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
