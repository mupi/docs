<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Design thinking",
    "url" =>  "design-thinking",
  )); 
?> 
<?php 
 $this->Html->script("bootstro.js", array("inline" => false));
 $this->Html->script("exercise-inspector.js", array("inline" => false));
 $this->Html->script("html-lesson.js", array("inline" => false));
 $this->Html->script("css-lesson.js", array("inline" => false));
 $this->Html->css("css-lesson.css", null, array("inline" => false));
 $this->Html->css("exercise-inspector.css", null, array("inline" => false));
 $this->Html->css("bootstro.css", null, array("inline" => false));
?>

<?php 
  //$this->Html->script("bootstro.js", array("inline" => false));
  //$this->Html->css("bootstro.css", null, array("inline" => false));
  // $this->Html->script("colorpicker.min.js", array("inline" => false));
  $this->Html->css("colorpickershowcase.css", null, array("inline" => false));
  $this->Html->css("colorpickerthemes.css", null, array("inline" => false));
?>

<<div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="design-thinking">

      <h3>O processo de Design Thinking</h3>

      <p class="quote"><i class="icon-quote-left"></i> Ação ou prática de pensar o design. <i class="icon-quote-right"></i>
        <p>
          O Design Thinking engloba todas as etapas envolvidas em um projeto de design: desde a sua concepção à execução. Veja a seguir quais são essas etapas:
        </p>
      <ol class="design-thinking">
        <li><span class="title-designthinking"><i class="icon-screenshot"></i> Definir</span>
          <p>
            É a etapa inicial do projeto, a definição do problema. O que você precisa solucionar? Qual é o escopo do projeto? A quem se destina esse produto/solução? Quanto você tem de <a href="#" class="mail-client pop"
         data-placement="top"
         data-original-title="Recurso"
         data-content='<p>Considere o tempo de dedicação que você dará ao projeto, quantas pessoas estarão envolvidas e qual a verba disponível para a execução.</p>'>recurso</a> para executar?<br/>
            <label class="label label-inverse">Briefing</label> é o termo utilizado para esse tipo de especificação. Quanto mais específico e definido for o briefing melhor e menos problemas você terá.
          </p>
        </li>
        <li>
          <span class="title-designthinking"><i class="icon-search"></i> Pesquisar</span>
          <p>
            Com o projeto definido, você deve coletar o máximo de informações possíveis para ajudar na criação do projeto. Essa solução já existe? Como é o público que vai utilizar esse produto? Do que eles gostam e como são? 
          </p>
        </li>
        <li>
          <span class="title-designthinking"><i class="icon-lightbulb"></i> Gerar ideias</span>
          <p>
            Nesta etapa, começa-se a desenvolver de fato o produto. São produzidos esboços e soluções possíveis. Existem vários métodos que ajudam a gerar ideias. <br/>
            <label class="label label-inverse">Brainstorming</label> é o termo utilizado para o método de geração de ideias no qual coleta-se o máximo de ideias possíveis, sem filtros iniciais, para que depois elas sejam analisadas e desenvolvidas mais profundamente.
          </p>
        </li>
        <li>
          <span class="title-designthinking"><i class="icon-rocket"></i> Testar protótipos</span>
          <p>
            Com um grupo de ideias geradas, nesta etapa, analisa-se quais são possíveis de serem implementadas e quais solucionam de fato o que você está buscando. Com isso definido, criam-se protótipos para começar a colocar em prática a solução.<br/>
            <label class="label label-inverse">Protótipos</label> são uma primeira versão do produto. Não precisa estar bem acabado, mas precisa demonstrar o objetivo pretendido. No caso de Web, os protótipos podem ser páginas ou imagens que simulam o funcionamento do site que está sendo desenvolvido. Estas páginas não estão implementados de fato, mas já conseguem passar ao usuário como será o fluxo e a navegação do sistema.
          </p>
        </li>
        <li>
          <span class="title-designthinking"><i class="icon-hand-up"></i> Selecionar</span>
          <p>
            Qual das propostas de protótipo será desenvolvida? Ela atende a todas as necessidades especificadas no briefing? <br/>
            Se for para um cliente, atende às suas expectativas? Foi já aprovada por ele?
          </p>
        </li>
        <li>
          <span class="title-designthinking"><i class="icon-cog"></i> Implementar</span>
          <p>
            Com a proposta aprovada, implementa-se o produto de fato, com todas as suas funcionalidades e ferramentas.
          </p>
        </li>
        <li>
          <span class="title-designthinking"><i class="icon-asterisk"></i> Aprender</span>
          <p>
            Apenas com o produto finalizado e entregue, você conseguirá saber de fato se atingiu todos os seus objetivos, como se os usuários estão utilizando sua solução como você imaginava ou se faltou ou sobrou algo. <br/>
            <label class="label label-inverse">Feedback</label> é uma das melhores formas para se obter essas respostas. Feedback nada mais é do que o processo de recolher a opinião de alguém sobre o trabalho que você executou ou produziu. Converse sempre com seus usuários e clientes para descobrir a eficácia do seu trabalho.
          </p>
        </li>
        </ol>

</div>
