<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Links",
    "url" => "tag-a",
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

 <<div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="links">
       <h3>Hiperlinks</h3>
       <p>
         Para inserir um <a href="#" class="glossario pop" 
            data-placement="right" data-original-title=""
            data-content='Hiperlink, ou apenas link (do inglês link – ligação)
            é o responsável pela ligação de elementos a outras páginas.'>
            link</a> utilizamos o elemento <code>a</code>, que vem
            do inglês <strong>a</strong>nchor (âncora). Sua construção é um
            pouco diferente pois dentro de sua tag é <strong>exigido </strong>
            um  
         <a href="#" class="glossario pop" data-placement="right" data-content='
            Lembrando que atributo é uma propriedade aplicada ao elemento.'>
           atributo
         </a> 
         chamado <code>href</code> (do inglês hyperlink reference – referência 
         hiperlink). Este atributo indica o endereço para o qual estamos 
         linkando aquele trecho de texto clicável.
       </p>
       <p>
         Ao envolvermos trechos com o elemento <code>a</code>, eles tornam-se 
         "clicáveis" quando renderizados no navegador. E, o valor colocado para 
         o atributo <code>href</code> será o endereço para onde este clique será 
         direcionado.
       </p>
       <p>
        
        Por exemplo, veja a seguir os trechos "Filhotes - Cuidados e higiene" 
        e "Projeto Esperança Animal" sendo colocados entre as tags 
        <code>&lt;a&gt;&lt;/a&gt;</code>. Ao clicar neles, uma nova página será 
        carregada <strong>sobre a atual</strong>. (Para voltar para essa página, 
        clique em voltar no seu navegador). 
      </p>
       
       <div class="two-columns-example row-fluid" 
            data-code-title=" Veja como fica o HTML:" 
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
         Muitas vezes não queremos que o usuário saia da página atual, mas sim que 
         uma página nova seja aberta. Para isso, utilizamos no elemento 
         <code>a</code> o atributo <code>target</code> (do inglês target - alvo), 
         com o valor <code>"_blank"</code>, da seguinte maneira
         <code>&lt;a href="http://www.whiskas.com.br/filhotes/cuidados-e-higiene"
           target="_blank"&gt;Whiskas&lt;/a&gt;</code>. Este valor indica que a 
           abertura da página será em uma nova janela ou aba, dependendo do 
           navegador.
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
   </div>
 </div>
