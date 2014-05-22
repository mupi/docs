<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "Projetos",
 "aulas" => array(
  0 => array("Como funciona a internet", "internet"),
  1 => array("Sobre design", "design"),
  2 => array("Introdução ao HTML5", "html"),
  3 => array("Introdução a CSS3", "css"),
  4 => array("Estrutura básica de projeto", "estrutura-projeto"),
  5 => array("JavaScript e jQuery", "js-jquery"),
  6 => array("Ferramentas externas","ferramentas-basico"),
  7 => array("Projetos","projetos-webdesign", true),
  )
 ));  
 ?> 
 <?php echo $this->element('wizard', array(
  "steps" => array(
   "Importante!",
   "Projeto Widget",
   "Projeto Perfil",
   "Manipulando o código"
   ))); ?>

 <?php 
 $this->Html->script("bootstro.js", array("inline" => false));
 $this->Html->script("exercise-inspector.js", array("inline" => false));
 $this->Html->script("html-lesson.js", array("inline" => false));
 $this->Html->script("css-lesson.js", array("inline" => false));
 $this->Html->css("html-lesson.css", null, array("inline" => false));
 $this->Html->css("exercise-inspector.css", null, array("inline" => false));
 $this->Html->css("bootstro.css", null, array("inline" => false));
 ?>
 
 <div class="container wizard-content navbar-fixed-top">
   <!-- Steps content -->
   <div class="step-content">
     <!-- Isso é um exemplo -->
     <div class="step-pane active" id="step1">
       <h3>Sobre os projetos</h3>
       <p>Mas o que são esses projetos?</p>
       <p>
         Nesta aula, há uma série de projetos para você produzir enquanto
         aprende! Isso mesmo, você irá produzir diferentes tipos de trabalhos
         enquanto aprende os conteúdos que um iniciante em web design deve
         saber. Ao final da produção destes projetos, você terá estudado todas
         as aulas do curso de web design e terá uma série de produções,
         incluindo diferentes tipos de web site. 
       </p>
       <p>
         Antes de começar os projetos, leia a descrição dos itens abaixo que
         sempre aparecerão durante sua produção. Volte aqui quantas vezes for
         necessário ;-). 
       </p>
       <ul>
         <li>
           <span class="label label-inverse">Briefing</span>: é o nome dado ao
           texto que funciona como um guia para a realização do projeto. Nele,
           encontramos o levantamento das necessidades do cliente bem como as
           especificações daquilo que é insdispenável. É a partir dele que, por
           exemplo, faz-se um orçamento. Todo projeto aqui terá seu briefing
           simulando o que um cliente está pedindo. 
         </li>
         <li>
           <span class="label label-inverse">Mockup</span>: são protótipos de
           um produto utilizados para sua apresentação a (possíveis) clientes. 
           No caso do web designer, é comum ser a  
           <a href="#" class="glossario pop" data-placement="top"
              data-content='Esta imagem pode ser representada de diversas
             formas, desde um desenho feito à mão até um projeto simples em
             editores de imagem. Geralmente, ela vem acompanhada de um texto
             descritivo que especifica de maneira breve os itens desenhados.'>
             imagem
           </a> da página a ser produzida, com a representação de seu layout,
           como posicionamentos, botões, cores e fontes. 
         </li>
         <li>Seções de cada projeto:
           <ul>
             <li>
               <strong>O que eu preciso saber?</strong>: nesta seção, há a
               lista de conteúdos que são necessários estudar para completar
               este projeto. Estes conteúdos estão disponíveis em formato de
               aulas na escola Mupi. Assim, leve o tempo que precisar para
               estudar e realizar os exercícios. 
             </li>
             <li>
               <strong>Como fazer</strong>: nesta seção, há uma lista das
               tarefas que precisam ser realizadas para a construção do
               projeto. O passo-a-passo do que você precisa fazer. A partir
               daqui, você aprenderá a organizar-se com projetos de diferentes
               escopos! 
             </li>
             <li>
               <strong>Avaliação</strong>: você poderá enviar a solução de todos
                os projetos para o e-mail contato@mupi.me que os avaliaremos. 
                Não se esqueça de identificar-se no e-mail! 
             </li>
           </ul>
         </li>
       </ul>
     </div>
     <div class="step-pane" id="step2">
       <h3>Projeto: Widget para Rede Social</h3>
       <h4>O que eu preciso saber?</h4>
       <p>
         Aqui está listado o conhecimento mínimo que você precisa para produzir
         este projeto, lembrando que você pode estudá-los na escola Mupi a
         qualquer momento :) 
       </p>
       <ul>
         <li><a href="css" target="_blank">Introdução ao CSS3</a></li>
         <li><a href="html" target="_blank">Introdução ao HTML5</a></li>
       </ul>
       <h4>Dicas: pequeno roteiro de como fazer</h4>
       <ul class="todo-list unstyled">
         <li>
           <p>
             <i class="icon-check"></i>
             Clone (fork) o projeto na sua conta do CodePen (se precisar,
             assista 

             <a href="#codePenModal" role="button"  data-toggle="modal">
               aqui
             </a> 

             o video sobre como fazer isto) para modificar o
             código e salvar suas modificações. 
           </p>
         </li>
       </ul>
       <h4>Briefing</h4>
       <p>
         Descrição do projeto: construir um 
         <a href="#" class="mail-client pop"
            data-placement="top"
            data-original-title="Widget"
            data-content='Um componente de uma interface gráfica.'>
           widget</a> 
         a ser inserido num site de uma rede social com a função de mostrar
         sugestões de amigos para o usuário. Seguem as especificações que o
         designer enviou juntamente com um 
         <a href="#" 
            class="glossario pop" 
            data-placement="top" data-content='Protótipo de um produto
            utilizados para sua apresentação a (possíveis) clientes, como por
            exemplo uma imagem.'>mockup
         </a> 
         da versão final (<span class="atencao">os
         itens <span class="done">riscados</span> já estão prontos</span>): 
       </p>
       <ul>
         <li>
           Cada item de "sugestão de amigo" será separado por uma borda
           inferior cinza (#eee) de espessura de 1px.
         </li>
         <li class="done">
           A imagem do amigo sugerido ficará à esquerda e, o restante do
           texto, à direita, com um espaço de 10px entre eles.
         </li>
         <li>
           O elemento inteiro terá borda cinza (#eee) superior e à direita,
           com a mesma espessura da borda que separa os contatos (1px).
         </li> 
         <li  class="done">
           No cabeçalho, o título ficará posicionado à esquerda
           e o link à direita; o background do cabeçalho será cinza.
         </li> 
         <li>
           O nome do contato sugerido ficará em negrito e sua cor será
           #64522e.
         </li> 
         <li>
           O item que indica amigos em comum será de cor #979590 e sua fonte
           terá tamanho de 12px.
         </li>
         <li>
           O elemento não terá borda a esquerda, de forma que possa parecer
           encaixado no site.
         </li>
         <li class="done">
           Haverá uma margem superior e esquerda de 10px e um padding de 20px
           inferior. 
         </li>
         <li>O widget terá 275px de largura exatamente.</li>
         <li>
           As imagens de perfil devem ter tamanho de 50px, tanto na altura
           quanto na largura.
         </li> 
         <li>
           A fonte utilizada em todo o elemento será 'Arial' e como segunda
           opção será uma fonte sans-serif.
         </li>
       </ul>
       
       <h5>Mockup</h5>
       <?php echo $this->Html->image('css_widget.png'); ?>
       <p>
         Para a realização do projeto, utilize o seguinte 
         código já produzido pelo web designer que lhe 
         enviou o projeto (clique em "Edit on CodePen" no canto direito para
         poder editar o código em tela cheia e salvar na sua conta do CodePen): 
       </p>
       
       <p data-height="268" 
          data-theme-id="0" 
          data-slug-hash="iJvtb" 
          data-user="anarute" 
          data-default-tab="result" 
          class='codepen'>
         See the Pen 
         <a href='http://codepen.io/anon/pen/iJvtb'>Projeto
           Widget</a> by Ana Rute
          (<a href='http://codepen.io/anarute'>@anarute</a>)
           on <a href='http://codepen.io'>CodePen</a>
       </p>
       <script async src="http://codepen.io/assets/embed/ei.js"></script>
       
       <h4>Avaliação</h4>
       <p>Ao finalizar, mande-nos um email para contato@mupi.me que avaliaremos
       a sua solução.</p> 
     </div>
     
     <div class="step-pane" id="step3">
       <h3>Projeto: Criar página de perfil de usuário</h3>
       <h4>O que eu preciso saber?</h4>
       <ul>
         <li><a href="design" target="_blank">Sobre Design</a></li>
         <li><a href="html" target="_blank">Introdução ao HTML5</a></li>
         <li><a href="css" target="_blank">Introdução ao CSS3</a></li>
       </ul>
       
       <h4>Briefing</h4>
       <p>
         O cliente enviou em um documento de texto as informações abaixo que
         devem ser exibidas numa página de perfil de usuário: 
       </p>
       <ul>
         <li>Nome de usuário</li>
         <li>Imagem de perfil</li>
         <li>Site</li>
         <li>Data de cadastro</li>
         <li>Mini biografia</li>
       </ul>
       <p>Defina como será o layout dessa página e a construa utilizando HTML e
       CSS. Obs.: Você pode inventar informações para preencher nos dados do
       usuário.</p> 
       
       <h4>Dicas</h4>
       <ul class="todo-list unstyled">
         <li>
           <p>
             <i class="icon-check"></i>
             Clone (fork) o projeto na sua conta do CodePen (se precisar,
             assista 

             <a href="#codePenModal" role="button"  data-toggle="modal">
               aqui
             </a> 

             o video sobre como fazer isto) para modificar o
             código e salvar suas modificações. 
           </p>
         </li>
         <li>
           <p>
             <i class="icon-check"></i>
             Antes de partir para o código, faça um esboço a mão desenhando
             como você irá estruturar as informações visualmente. 
           </p>
         </li>
         <li>
           <p>
             <i class="icon-check"></i>
             Utilize o seletor de cores da <a href="design#step4"
             target="_blank">aula de design</a> para escolher cores e copiar
             seu código hexadecimal. 
           </p>
         </li>
         <li>
           <p>
             <i class="icon-check"></i>
             Lembre-se que seu projeto deve ter forte base semântica, logo,
             utilize as tags adequadas para cada conteúdo. Uma dica para fazer
             isso é pensar que seu site será lido por um leitor de tela e não
             visualizado diretamente.
           </p>
         </li>
         <li>
           <p>
             <i class="icon-check"></i>
             Nesse projeto,
             recomendamos as seguintes tags: 
             <code>&lt;p&gt;</code>, <code>&lt;h1&gt;</code>, 
             <code>&lt;h3&gt;</code>, <code>&lt;div&gt;</code>,
             <code>&lt;section&gt;</code>
           </p>
         </li>
       </ul>
       
       <h4>Material de apoio</h4>
       <ul>
         <li>
           Você pode utilizar os seguintes links para a imagem de perfil
           (sinta-se livre para pegar outras imagens, contanto que elas estejam
           em algum site, pois não conseguiremos ver as imagens do seu
           computador): http://escola.mupi.me/img/filha-prefeito.jpg ,
           http://escola.mupi.me/img/frank.jpg 
         </li> 
       </ul>
       <ul>
         <li>
           Utilize o <a href='http://codepen.io/anarute/pen/aIwjx'
           target='_blank'>esqueleto abaixo</a> para construir sua página
           (lembre-se de clonar o código na sua conta do CodePen). 
         </li> 
       </ul>
       <p data-height="268" 
          data-theme-id="0" 
          data-slug-hash="aIwjx" 
          data-user="anarute" 
          data-default-tab="html" class='codepen'>See the Pen 
         <a href='http://codepen.io/anon/pen/aIwjx'>Projeto Profile</a> by Ana
         Rute (<a href='http://codepen.io/anarute'>@anarute</a>)
         on <a href='http://codepen.io'>CodePen</a>
       </p> 
       <script async src="http://codepen.io/assets/embed/ei.js"></script>
       
       <h4>Avaliação</h4>
       <p>Ao finalizar, mande-nos um email para contato@mupi.me que avaliaremos
       a sua solução. Serão avaliados os seguintes itens: </p> 
       <ul>
         <li>Estrutura HTML</li>
         <li>Sintaxe CSS</li>
         <li>Semântica: Uso adequado de tags, classes e ids</li>
         <li>Fechamento de tags</li>
         <li>Organização do código</li>
         <li>Uso de seletores CSS</li>
         <li>Uso de propriedades CSS</li>
       </ul>
      
     </div>
     <div class="step-pane" id="step4">
       <h3>Projeto: Manipulando o conteúdo</h3>
       <h4>O que eu preciso saber?</h4>
       <ul>
         <li><a href="html" target="_blank">Introdução ao HTML5</a></li>
         <li><a href="css" target="_blank">Introdução ao CSS3</a></li>
         <li><a href="js-jquery" target="_blank">JavaScript e jQuery</a></li>
       </ul>
       <h4>Briefing</h4>
       <p>
         O projeto abaixo é um pouco diferente dos outros. Ele é inteiramente
         automonitorado e todas as explicações necessárias estão no próprio
         código dentro de comentários, na aba de JavaScript. Abra o
         projeto 
         <a href="http://codepen.io/anarute/pen/LrJFq" target="_blank">
           no CodePen</a> 
         e siga as instruções da aba JS.
       </p>

       <h4>Dicas</h4>
       <ul class="todo-list unstyled">
         <li>
           <p>
             <i class="icon-check"></i>
             Clone (fork) o projeto na sua conta do CodePen (se precisar,
             assista 
             <a href="#codePenModal" role="button"  data-toggle="modal">
               aqui
             </a> 
             o video sobre como fazer isto) para modificar o
             código e salvar suas modificações. 
           </p>
         </li>
       </ul>
       
       <p data-height="468" 
          data-theme-id="776" 
          data-slug-hash="LrJFq"
          data-user="anarute" data-default-tab="js" class='codepen'>
         See the Pen 
         <a href='http://codepen.io/anarute/pen/LrJFq'>Exercício
           JavaScript</a> by Ana Rute
         (<a href='http://codepen.io/anarute'>@anarute</a>)
         on <a href='http://codepen.io'>CodePen</a>
       </p>
       <script async src="http://codepen.io/assets/embed/ei.js"></script>
      
       <h4>Avaliação</h4>
       <p>Este projeto é inteiramente automonitorado, portanto não há
       avaliação. Lembre-se de postar suas dúvidas no fórum.</p> 
     </div>
   </div>
 </div>

 <style>
   div#codePenModal {
       min-width: 800px;
       margin-left: -400px;
   }
   #codePenModal .modal-body {
       min-height: 455px;
   }
 </style>
 
 <div id="codePenModal" class="modal hide fade"  tabindex="-1" 
      aria-labelledby="CodePen" aria-hidden="true">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal"
             aria-hidden="true">×</button>
     <h3 id="myModalLabel">Como clonar um projeto no Codepen</h3>
   </div>
   <div class="modal-body offset1">
     <iframe width="504" height="378" 
             src="//www.youtube.com/embed/gsjbxw1ur-I" 
             frameborder="0" allowfullscreen></iframe>
   </div>
   <div class="modal-footer">
     <a href="#" data-dismiss="modal" class="btn">Fechar</a>
  </div>
</div>
