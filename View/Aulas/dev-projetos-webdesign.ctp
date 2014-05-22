

<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "Projetos",
 "aulas" => array(
  0 => array("Como funciona a internet", "internet"),
  1 => array("Sobre design", "design"),
  2 => array("Introdução ao HTML5", "html"),
  3 => array("Introdução a CSS3", "css"),
  4 => array("JavaScript e jQuery", "js-jquery"),
  5 => array("Ferramentas externas",
    "ferramentas-basico"),
  6 => array("Projetos",
    "projetos-webdesign", true),
  )
 ));  
 ?> 
 <?php echo $this->element('wizard', array(
  "steps" => array(
   "Importante!",
   "Projeto 1",
   "Projeto 2",
   "Projeto 3",
   "Projeto 4",
   "Projeto 5"
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
        Nesta aula, há uma série de projetos para você produzir enquanto aprende! Isso mesmo, 
        você irá produzir diferentes tipos de trabalhos enquanto aprende os conteúdos que um 
        iniciante em web design deve saber. Ao final da produção destes projetos, você terá 
        estudado todas as aulas do curso de web design e terá uma série de produções, 
        incluindo diferentes tipos de web site. 
      </p>
      <p>
        Antes de começar os projetos, leia a descrição dos itens abaixo que sempre aparecerão 
        durante sua produção. Volte aqui quantas vezes for necessário ;-).
      </p>
      <ul>
        <li>
         <span class="label label-inverse">Briefing</span>: é o nome dado ao texto que 
         funciona como um guia para a realização do projeto. Nele, encontramos o 
         levantamento das necessidades do cliente bem como as especificações daquilo 
         que é insdispenável. É a partir dele que, por exemplo, faz-se um orçamento. 
         Todo projeto aqui terá seu briefing simulando o que um cliente está pedindo.
       </li>
       <li>
         <span class="label label-inverse">Mockup</span>: são protótipos de
         um produto utilizados para sua apresentação a (possíveis) clientes. 
         No caso do web designer, é comum ser uma  
         <a href="#" class="glossario pop" data-placement="top"
         data-content='Esta imagem pode ser representada de diversas formas, desde um 
         desenho feito à mão até um projeto simples em editores de imagem. Geralmente, 
         ela vem acompanhada de um texto descritivo que especifica de maneira 
         breve os itens desenhados.'>
         imagem
       </a> da página a ser produzida, com a representação de seu layout, contendo 
       posicionamento de conteúdo, botões, cores e fontes.
     </li>
     <li>Seções de cada projeto:
      <ul>
       <li>
        <strong>O que eu preciso saber?</strong>: nesta seção, há a lista de 
        conteúdos que são necessários estudar para completar este projeto. Estes conteúdos 
        estão disponíveis em formato de aulas na escola Mupi. Assim, leve o tempo que precisar 
        para estudar e realizar os exercícios.
      </li>
      <li>
        <strong>Como fazer</strong>: nesta seção, há uma lista das tarefas que precisam ser 
        realizadas para a construção do projeto. O passo-a-passo do que você precisa fazer. 
        A partir daqui, você aprenderá a organizar-se com projetos de diferentes escopos!
      </li>
      <li>
        <strong>Avaliação</strong>: o projeto denominado "final" é o que utilizaremos para 
        avaliar você. Todos os outros terão uma solução resolvida que você pode comparar com a 
        que você fez. Mas como será o processo na avaliação? Bem, você nos enviará o projeto final 
        pronto em um arquivo compactado</a>, no formato zip, para o e-mail contato@mupi.me. 
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
      Aqui está listado o conhecimento mínimo que você precisa para produzir este projeto, lembrando que você pode estudá-los na escola Mupi a qualquer momento :)
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
        Clone (fork) o projeto na sua conta do CodePen (se precisar, assista aqui o video sobre como fazer isto) para modificar o código e salvar suas modificações.
      </p>
    </li>
  </ul>
<h4>Briefing</h4>
        <p>
          Descrição do projeto: construir um <a href="#" class="mail-client pop"
             data-placement="top"
             data-original-title="Widget"
             data-content='Um componente de uma interface gráfica.'>
          widget</a> a ser inserido num site de uma rede social com a função de mostrar sugestões de amigos para 
          o usuário. Seguem as especificações que o designer enviou juntamente com um 
          <a href="#" class="glossario pop" data-placement="top"data-content='Protótipo de um produto utilizados para sua apresentação a (possíveis) clientes, como por exemplo uma imagem.'>mockup</a> da versão final (<span class="atencao">os itens <span class="done">riscados</span> já estão prontos</span>):
        </p>
        <ul>
          <li>Cada item de "sugestão de amigo" será separado por uma borda inferior cinza
          (#eee) de espessura de 1px.</li>
          <li class="done">A imagem do amigo sugerido ficará à esquerda e, o restante do
            texto, à direita, com um espaço de 10px entre eles.</li>
          <li>O elemento inteiro terá borda cinza (#eee) superior e à direita, com a mesma espessura da borda que separa os contatos (1px).</li>
          <li  class="done">No cabeçalho, o título ficará posicionado à esquerda e o link à
            direita; o background do cabeçalho será cinza.</li>
          <li>O nome do contato sugerido ficará em negrito e sua cor será #64522e.</li>
          <li>O item que indica amigos em comum será de cor #979590 e sua fonte terá
            tamanho de 12px.</li>
          <li>O elemento não terá borda a esquerda, de forma que possa parecer
            encaixado no site.</li>
          <li class="done">Haverá uma margem superior e esquerda de 10px e um
            padding de 20px inferior.</li>
          <li>O widget terá 275px de largura exatamente.</li>
          <li>As imagens de perfil devem ter tamanho de 50px, tanto na altura
          quanto na largura.</li>
          <li>A fonte utilizada em todo o elemento será 'Arial' e como segunda
          opção será uma fonte sans-serif.</li>
        </ul>

        <h5>Mockup</h5>
        
        <?php echo $this->Html->image('css_widget.png'); ?>

        <p>
          Para a realização do projeto, utilize o seguinte 
          código já produzido pelo web designer que lhe 
          enviou o projeto (clique em "Edit on CodePen" no canto direito para poder editar o código em tela cheia e salvar na sua conta do CodePen):
        </p>
  
       <p data-height="268" data-theme-id="0" data-slug-hash="iJvtb" data-user="anarute" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/anon/pen/iJvtb'>Projeto Widget</a> by Ana Rute (<a href='http://codepen.io/anarute'>@anarute</a>) on <a href='http://codepen.io'>CodePen</a></p>
       <script async src="http://codepen.io/assets/embed/ei.js"></script>

       <h4>Avaliação</h4>
       <p>Ao finalizar, mande-nos um email para contato@mupi.me que avaliaremos a sua solução.</p>
    
        
</div>
<div class="step-pane" id="step3">
 <h3>Projeto: Criar página de perfil de usuário</h3>
  <h4>O que eu preciso saber?</h4>
    <p>
      Aqui está listado o conhecimento mínimo que você precisa para produzir este projeto, lembrando que você pode estudá-los na escola Mupi a qualquer momento :)
    </p>
    <ul>
      <li><a href="design" target="_blank">Sobre Design</a></li>
      <li><a href="html" target="_blank">Introdução ao HTML5</a></li>
      <li><a href="css" target="_blank">Introdução ao CSS3</a></li>
    </ul>
    
  <h4>Briefing</h4>
  <p>
    O cliente enviou em um documento de texto as informações abaixo que devem ser exibidas numa página de perfil de usuário:
  </p>
  <ul>
    <li>Nome de usuário</li>
    <li>Imagem de perfil</li>
    <li>Site</li>
    <li>Data de cadastro</li>
    <li>Mini biografia</li>
  </ul>
  <p>Defina como será o layout dessa página e a construa utilizando HTML e CSS. Obs.: Você pode inventar informações para preencher nos dados do usuário.</p>

  <h4>Dicas</h4>
  <ul class="todo-list unstyled">
    <li>
      <p>
        <i class="icon-check"></i>
        Antes de partir para o código, faça um esboço a mão desenhando como você irá estruturar as informações visualmente.
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Utilize o seletor de cores da <a href="design" target="_blank">aula de design</a> para escolher cores e copiar seu código hexadecimal.
      </p>
    </li>
  </ul>

  <h4>Material de apoio</h4>
  <ul>
    <li>Você pode utilizar os seguintes links para a imagem de perfil (sinta-se livre para pegar outras imagens, contando que elas estejam em algum site, pois não conseguiremos ver as imagens do seu computador): http://escola.mupi.me/img/filha-prefeito.jpg , http://escola.mupi.me/img/frank.jpg</li>
  </ul>
  <ul>
    <li>Utilize o <a href='http://codepen.io/anarute/pen/aIwjx'>esqueleto abaixo</a> para construir sua página (lembre-se de clonar o código na sua conta do CodePen).</li>
  </ul>
  <p data-height="268" data-theme-id="0" data-slug-hash="aIwjx" data-user="anarute" data-default-tab="html" class='codepen'>See the Pen <a href='http://codepen.io/anon/pen/aIwjx'>Projeto Profile</a> by Ana Rute (<a href='http://codepen.io/anarute'>@anarute</a>) on <a href='http://codepen.io'>CodePen</a></p>
<script async src="http://codepen.io/assets/embed/ei.js"></script>

 <h4>Avaliação</h4>
 <p>Ao finalizar, mande-nos um email para contato@mupi.me que avaliaremos a sua solução.</p>

</div>

<div class="step-pane" id="step4">
 <h3>Projeto: Inserir botão like do Facebook</h3>
</div>

<div class="step-pane" id="step5">
   <h3>Projeto: Home Page de um evento</h3>
  <div class="row-fluid">
   <div class="span12">
    <div class="span8">
     <div class="row-fluid">
      <h5>Briefing</h5>
      <p>
        Descrição do projeto: criação de uma home page de 
        inscrição para a divulgação de um evento.
      </p>
      <p>A página deve conter <strong>todos</strong> os itens a seguir:</p>
      <ul>
        <li>Logo do evento</li>
        <li>Título do evento</li>
        <li>Descrição do evento</li>
        <li>Descrição dos organizadores</li>
        <li>Agenda do evento</li>
        <li>Botão Like - compartilhamento no Facebook</li>
        <li>E-mail para inscrever-se</li>
        <li>Imagem de fundo ou textura</li>
      </ul>

      <p>
        Para a realização do projeto, faça o dowload do seguinte <a href="#">arquivo</a>
        que contém o que você precisa para produzir os itens descritos acima, 
        como imagens e textos.
      </p>
      <!--Fazer zip com itens para o projeto-->
      <!--Final do briefing -->
    </div>
    <div class="row-fluid">
     <h5>O que eu preciso saber?</h5>
     <p>Aqui está listado o conhecimento mínimo que você precisa para produzir este projeto, 
      lembrando que você pode estudá-los na escola Mupi a qualquer momento :).</p>
     <ul>
      <li>Como funciona a internet</li>
      <li>Estrutura de projeto</li>
      <li>Introdução ao HTML5</li>
      <li>Introdução ao CSS3</li>
      <li>Uso de ferramentas externas</li>
    </ul>
    <p>Ferramentas externas a serem usadas:</p>
    <ul>
      <li>Facebook developers</li>
    </ul>
  </div>
  <div class="row-fluid">
   <h5>Avaliação</h5>
 </div>
</div>
<div class="span4">
  <div class="row-fluid">
   <h5>Dicas: pequeno roteiro de como fazer</h5>
   <ul class="todo-list unstyled">
    <li>
      <p>
        <i class="icon-check"></i>
        Preparar o ambiente de desenvolvimento criando uma estrutura de diretórios.
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Criar um mockup para definir o layout da página a ser criada. Use sua criatividade
        para escolher o posicionamento geral dos itens necessários de acordo com os requisitos do 
        briefing mas não se esqueça de atentar-se para critérios de 
        <a href="#" title="Usabilidade em Websites">usabibilidade</a>.
      </p>
      <p>
        Abaixo você encontra exemplos de sugestões de mockup.
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Criar a página utilizando HTML observando apenas os critérios semânticos e de
        estrutura de layout que escolheu. Ou seja, ao final dessa tarefa, você terá uma página 
        HTML que ao ser exibida no navegador, apresentará os conteúdos de forma padrão sem o layout 
        criado.
      </p>
      <p>
        <span class="label label-warning">Atenção</span> Reserve os espaços nos quais serão 
        colocados os componentes externos como botão 'Like' do Facebook e formulário do MailChimp.
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Criar o CSS da página de maneira a torná-la compatível com o layout pensado no mockup. Terminado esse item, você terá a página quase completa e poderá rodar testes em diferentes navegadores.
      </p>
    </li>
  </ul>
</div>
</div>
</div>
</div>
</div>

<div class="step-pane" id="step6">
    <h3>Projeto: Landing page</h3>
  <div class="row-fluid">
   <div class="span12">
    <div class="span8">
     <div class="row-fluid">
      <h5>Briefing</h5>
      <p>
        Descrição do projeto: criação de uma 
        <a href="#" class="glossario pop" data-placement="top"
        data-original-title="Landing page"
        data-content='É o nome dado às páginas de apresentação rápida de alguma proposta. Utilizada
        geralmente para pré-lançamento ou campanha de marketing digital.'>landing page</a>
        para o pré-lançamento de uma nova marca de energético.
      </p>
      <p>A página deve conter <strong>todos</strong> os itens a seguir:</p>
      <ul>
        <li>Logo da empresa</li>
        <li>Descrição do produto</li>
        <li>Descrição da empresa (Sobre)</li>
        <li>Descrição da equipe (Quem somos)</li>
        <li>Botão Like - compartilhamento no Facebook</li>
        <li>E-mail para contato</li>
        <li>Formulário para pré-inscrição com campos de nome e de e-mail</li>
        <li>Imagem de fundo ou textura</li>
      </ul>

      <p>
        Para a realização do projeto, faça o dowload do seguinte <a href="#">arquivo</a>
        que contém o que você precisa para produzir os itens descritos acima, 
        como imagens e textos.
      </p>
      <!--Fazer zip com itens para o projeto-->
      <!--Final do briefing -->
    </div>
    <div class="row-fluid">
     <h5>O que eu preciso saber?</h5>
     <p>Aqui está listado o conhecimento mínimo que você precisa para produzir este projeto, 
      lembrando que você pode estudá-los na escola Mupi a qualquer momento :).</p>
     <ul>
      <li>Como funciona a internet</li>
      <li>Editores</li>
      <li>HTML básico</li>
      <li>Construção de páginas web</li>
      <li>CSS básico</li>
      <li>Uso de ferramentas externas</li>
    </ul>
    <p>Ferramentas externas a serem usadas:</p>
    <ul>
      <li>MailChimp</li>
      <li>Facebook developers</li>
    </ul>
  </div>
  <div class="row-fluid">
   <h5>Avaliação</h5>
 </div>
</div>
<div class="span4">
  <div class="row-fluid">
   <h5>Dicas: pequeno roteiro de como fazer</h5>
   <ul class="todo-list unstyled">
    <li>
      <p>
        <i class="icon-check"></i>
        Preparar o ambiente de desenvolvimento criando uma estrutura de diretorios para 
        <a href="#" title="Estrutura de projeto">Projeto HTML simples</a>
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Criar um mockup para definir o layout da página a ser criada. Use sua criatividade
        para escolher o posicionamento geral dos itens necessários de acordo com os requisitos do 
        briefing mas não se esqueça de atentar-se para critérios de 
        <a href="#" title="Usabilidade em Websites">usabibilidade</a>.
      </p>
      <p>
        Abaixo você encontra exemplos de sugestões de mockup.
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Criar a página utilizando HTML observando apenas os critérios semânticos e de
        estrutura de layout que escolheu. Ou seja, ao final dessa tarefa, você terá uma página 
        HTML que ao ser exibida no navegador, apresentará os conteúdos de forma padrão sem o layout 
        criado.
      </p>
      <p>
        <span class="label label-warning">Atenção</span> Reserve os espaços nos quais serão 
        colocados os componentes externos como botão 'Like' do Facebook e formulário do MailChimp.
      </p>
    </li>
    <li>
      <p>
        <i class="icon-check"></i>
        Criar o CSS da página de maneira a torná-la compatível com o layout pensado no mockup. Terminado esse item, você terá a página quase completa e poderá rodar testes em diferentes navegadores.
      </p>
    </li>
  </ul>
</div>
<div class="row-fluid">
  <h2>Mockups</h2>
  <img class="img-polaroid" src="../img/mockup_1.jpg"/>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
