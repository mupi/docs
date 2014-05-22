<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Imagens",
    "url" => "tag-img",
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
        <div class="step-pane in" id="img">
       <h3>Imagens</h3>
       <p>
         Páginas web são representadas por arquivos HTML que, por sua vez, 
         são arquivos de texto marcados por uma linguagem chamada HTML. No 
         entanto, se tudo é texto, como podemos 
         inserir uma imagem em uma página? Simples: usamos o elemento 
         <code>img</code>, do inglês image (imagem).
       </p>
       <p>
        A tag para este elemento fecha em si mesma, ou seja, fica <code>&lt;img
         /&gt;</code>.
       </p>
       <p>
         O elemento <code>img</code> vem acompanhado de um atributo obrigatório 
         chamado <code>src</code>. A seguir, temos a explicação do que é esse 
         atributo e também de outros dois que, apesar de não 
         obrigatórios, são <a href="#" class="glossario pop" data-placement="right"
                              data-original-title=""
                              data-content='Inclusive, sugerimos sempre usá-los!'>
                              bastante utilizados</a>:
       </p>
       <ul>
         <li>
           <code>src</code> (do inglês source – fonte): este atributo indica para o 
           navegador o endereço da imagem a ser exibida na tela. Assim, seu valor é 
           um caminho ou link que o navegador vai seguir para buscar a imagem e 
           exibi-la.
         </li>
         <li>
           <code>alt</code> (do inglês alternative – alternativa): este atributo 
           permite estipular um texto a ser exibido no lugar da imagem caso esta, 
           por algum motivo, estiver com problemas. Ele atua como uma alternativa 
           e seu valor sempre é um texto explicativo sobre a imagem. Um ponto 
           interessante sobre esse atributo é que ele funciona como um recurso 
           de acessibilidade para deficientes visuais já que os 
           programas <a href="#" class="mail-client pop"data-placement="top"
                      data-original-title="Leitor de tela"
                      data-content='<p>São programas que interagem com o Sistema 
                      Operacional do Computador, transformando toda informação 
                      apresentada na forma de texto em som, através de um sintetizador de 
                      voz. Veja alguns exemplos destes programas 
                      <a href="http://pt.wikipedia.org/wiki/Leitor_de_tela" 
                      target="_blank">nesta página</a> da Wikipedia.</p>'>leitores de tela</a>
          lêem o valor do atributo <code>alt</code> para informar o que é cada imagem.
         </li>
         <li>
           <code>title</code> (do inglês title – título): este atributo é o título
            da imagem e é exibido quando o cursor do mouse é passado sobre ela, 
            sendo seu valor um texto. </li>
       </ul>
       <p>
         Com todas essas informações, vamos verificar em um exemplo. 
         Como sintaxe, utilizando apenas o atributo obrigatório <code>src</code> 
         temos <code>&lt;img src="http://escola.mupi.me/img/fotoGato1.png" /&gt;</code>, 
         em que <code>http://escola.mupi.me/img/fotoGato1.png</code> 
         representa o caminho para chegar até a imagem. É <strong>importante</strong> 
         sempre lembrar de colocar a extensão do arquivo que, aqui, foi <code>.png</code>.
       </p>
       
       <div 
          class="two-columns-example row-fluid" 
          data-code-title="Inserindo todos os atributos mais a lista de informações, temos:"
          data-render-title="E como visualização no navegador:">
         <img src="http://escola.mupi.me/img/fotoGato1.png" alt="Foto do gato 1" 
         title="Gato Otto Zepelin" />
         <ul>
           <li>Nome: Otto Zepelin</li>
           <li>Idade: 40 dias</li>
           <li>Peso: 400g</li>
       </ul></div>
       
     </div>
   </div>
 </div>
