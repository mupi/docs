<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Listas",
    "url" => "tag-listas",
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
        <div class="step-pane in" id="lista">
       <h3>Listas</h3>
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
          data-code-title="Uma lista simples no arquivo HTML:"
          data-render-title="A visualização em um navegador web:">
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
         </ol>
       </div>
     </div>
   </div>
 </div>
 
