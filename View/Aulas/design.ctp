<?php echo $this->element('breadcrumb', array(
                 "curso" => "Web Design para iniciantes",
                 "aula"  => "Sobre design",
                 "aulas" => array(
                                  0 => array("Como funciona a internet", "internet"),
                                  1 => array("Sobre design", "design", true),
                                  2 => array("Introdução ao HTML5", "html"),
                                  3 => array("Introdução a CSS3", "css"),
                                  4 => array("Estrutura básica de projeto", "estrutura-projeto"),
                                  5 => array("JavaScript e jQuery", "js-jquery"),
                                  6 => array("Ferramentas externas","ferramentas-basico"),
                                  7 => array("Projetos","projetos-webdesign"),
                                  )
           )); 
?> 
<?php echo $this->element('wizard', array(
                          "steps" => array(
                                           "Sobre design",
                                           "Design thinking",
                                           "O Web Design",
                                           "Cores na web",
                                           "Referências",
                                           "Quiz"
                                           ))); ?>

<?php 
  //$this->Html->script("bootstro.js", array("inline" => false));
  //$this->Html->css("bootstro.css", null, array("inline" => false));
  // $this->Html->script("colorpicker.min.js", array("inline" => false));
  $this->Html->css("colorpickershowcase.css", null, array("inline" => false));
  $this->Html->css("colorpickerthemes.css", null, array("inline" => false));
?>

<div class="container wizard-content navbar-fixed-top">
  <!-- Steps content -->
  <div class="step-content">
    <!-- Isso é um exemplo -->
    <div class="step-pane active" id="step1">
      <h2>O que é design?</h2>
      <p class="quote"><i class="icon-quote-left"></i> Um método para solucionar um problema, seja ele físico ou visual. <i class="icon-quote-right"></i>
      </p>
      <p>Design é todo o processo de resolução de problema que vai desde a sua descoberta à implementação da solução. 
        Todo design tem que ser bem estruturado e pensado como um todo, de modo que nada deva ser arbitrário. 
      </p>
      <p>
        <i class="icon-hand-right"></i> Design é diferente de arte. É possível enxergar o design como “deixar algo bonito” porque isso, muitas vezes, é consequência de um produto de design bem executado. Mas a principal diferença entre design e arte é que o design tem um objetivo prático desde a sua concepção. Uma obra de arte não precisa ser útil, um produto de design, sim, afinal ele nasceu para solucionar ou aprimorar algo. Porém, isso não quer dizer que design não envolva preocupações estéticas, uma vez que ele também interfere em como o usuário lida com o produto.
      </p>
      <div class="mupi-example">
        <div class="clearfix">
            <div class="img-polaroid chaleira pull-left">
              <?php echo $this->Html->image('chaleira.jpg', array('alt' => 'Chaleira multi-uso')); ?>
              <label>Exemplo de uma solução de design bem executada</label>
            </div>
            <div class="img-polaroid cafeteira pull-left">
              <?php echo $this->Html->image('cafeteira.jpg', array('alt' => 'Design de uma cafeteira')); ?>
              <label>Exemplo de projeto bem estruturado de uma cafeteira italiana com todas as partes definidas e especificadas</label>
            </div>
            <div class="img-polaroid canivete pull-left">
              <?php echo $this->Html->image('canivete.jpg', array('alt' => 'Canivete suíço')); ?>
              <label>O canivete suíço consegue reunir várias funcionalidades em um objeto que seja pequeno e caiba na palma da mão</label>
            </div>
         </div>
       </div>
    </div>
    <div class="step-pane active" id="step2">
      <h2>O processo de Design Thinking</h2>
      <p class="quote"><i class="icon-quote-left"></i> Ação ou prática de pensar o design. <i class="icon-quote-right"></i>
        <p>
          O Design Thinking engloba todas as etapas envolvidas em um projeto de design: desde a sua concepção à execução. Veja a seguir quais são essas etapas:
        </p>
      <ol>
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
    <div class="step-pane active" id="step3">
      <h4>A função do Web Designer</h4>
      <p>
        <label class="label label-inverse">Web Design</label> é o design específico pra web.
      </p>
      <p>
        <label class="label label-inverse">Web designer</label> é o profissional de Web Design. É a pessoa responsável por pensar em como os usuários vão interagir com o site, quais informações devem ter ali, onde cada elemento deve estar posicionado, quais cores e fontes tipográficas utilizar, etc.
      </p>
      <p>
        Existem algumas formas de pensar o trabalho de Web Design. A que vamos trabalhar aqui é o Design centrado no usuário. Deste modo, durante o processo de design, temos que levar em conta as necessidades, desejos e limitações do ser humano durante todas as etapas de realização do projeto.
      </p>
      <p>
        <h3>Termos do desenvolvimento web</h3>
          <p>
            <label class="label label-inverse">Back-End</label><br/>
            Como falamos na aula sobre como funciona a internet, o acesso a sites utiliza a arquitetura cliente/servidor.
            A parte do projeto que é executada no servidor chama-se Back-End e utiliza linguagens de programação como PHP, Java e Ruby. 
          </p>
          <p>
            <label class="label label-inverse">Front-End</label><br/>
           Chamamos de desenvolvimento Front-End a criação do layout e a
           manipulação dos elementos visuais em um web site. Para esta parte do
           projeto, usamos as linguagens HTML, CSS e Javascript, sendo esse
           trabalho executado no navegador (cliente).
          </p>
          <p>Neste curso, abordaremos o desenvolvimento Front-End.</p>
      </p>
    </div>
    <div class="step-pane active" id="step4">
      <h4>Como funcionam as cores na Web</h4>
      <p>
        Nossos computadores e monitores utilizam o sistema RGB (Red Green Blue) para imprimir as cores na tela.
      </p>
      <p>
        <label class="label label-inverse">RGB</label><br/>
        RGB é um modelo aditivo de luz. Modelos aditivos de luz funcionam com a adição e combinação de cores-base para reprodução de outras cores. No caso do RGB, temos três cores de luz: Red - Vermelho, Green - Verde e Blue - Azul.  
      </p>
      <div class="img-polaroid cafeteira pull-right">
              <?php echo $this->Html->image('pixels.jpg', array('alt' => 'Pixels em um monitor')); ?>
              <label>Exemplo de pixels acesos em um monitor</label>
      </div>
      <p><label class="label label-inverse">Pixel</label><br/>
        Os monitores são formados por milhares de pontos de luz muito pequenos,
        que emitem as três cores primárias em intensidades diversas. Essas cores
        combinadas conseguem reproduzir todas as cores que vemos na
        tela e cada ponto desses é chamado de pixel. 
      </p>
      <p>
        Para o monitor conseguir mostrar uma tela, cada pixel recebe uma das três cores com um valor de intensidade. Cada cor pode ter um valor entre 0 e 255, sendo 0 apagada e 255 na maior intensidade. Por exemplo, para o monitor exibir a cor branca, nós escrevemos RGB(256,256,256), no qual todas as cores estão acesas com intensidade máxima. Para exibir preto é o contrário, RGB(0,0,0), que significa que todas as cores estão apagadas. Mesclando esses valores, conseguimos exibir uma gama imensa de cores.
      </p>
      <p>
        Outra forma bastante utilizada para notação de cores é o sistema numérico hexadecimal. Esse sistema vai de 0 a F, sendo F igual a 16. A notação em hexadecimal tem 3 pares de números, sendo que cada par equivale a uma das três cores. Por exemplo, a cor vermelha RGB(255,0,0) é representada por #FF0000.
      </p>
      <p>
        O seletor de cores abaixo mostra o valor da cor no formato RGB e em
        Hexadecimal. Deslize o mouse pela paleta para selecionar cores!
      </p>
      <div class="cpicker container-fluid">
        <div class="row-fluid">
          <div class="span4 offset2">
            <div id="default" class="cp cp-default clearfix"></div>
          </div>
          <div class="cTool span4">
            <div class="row">
              <div class="squareColor"></div>
              <p class="text-color">Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="rgb-labels row-fluid">
              <label>HEX</label>
              <input class="hex" type="text" value=""/>
            </div>
              
              
            <div class="rgb-labels row-fluid">
              <label>R:</label>
              <input class="rgb_r" type="number" value="" />
              <label>G:</label>
              <input class="rgb_g" type="number" value="" />
              <label>B:</label>
              <input class="rgb_b" type="number" value="" />
            </div>                
              
            <div class="rgb-labels row-fluid">
              <label>H:</label>
              <input class="hsv_h" type="text" value="" />
              <label>S:</label>
              <input class="hsv_s" type="text" value="" />
              <label>V:</label>
              <input class="hsv_v" type="text" value="" />
            </div> 
            <span class="rgb_css"></span><br/>
            <span class="hsv_css"></span>
          </div>
        </div>
      </div>
  
      <?php 
        $this->Html->script("colorpicker.js", array("inline" => false)); 
        $this->Html->script("showcase.js", array("inline" => false)); 
      ?>
      
      <p><span class="label label-info">Fica a dica!</span> Veja algumas ferramentas interessantes e gratuitas que auxiliam a utilizar cores:</p>
      <ul>
        <li><a href="https://kuler.adobe.com/" target="blank">Kuler</a> - ferramenta da Adobe que permite a criação de paletas de cores e mostra algumas relações entre elas.</li>
        <li><a href="http://colorschemedesigner.com/" target="blank">Color Scheme Designer</a> - ferramenta super completa para escolha de cores e combinações.</li>
      </ul>
    </div>
    <div class="step-pane active" id="step5">
      <h4>Referências, referências, referências</h4>
      <p>Durante a criação de trabalhos e projetos, coletar o máximo de referências possíveis para inspirar-se é algo que facilita muito. Busque tudo o que achar pertinente, explorando diferentes formatos de mídia: procure imagens, vídeos, músicas, entre muitos outros. Para web, existem vários sites e ferramentas que facilitam esse trabalho.
      </p>
      <p>
        Seguem bons exemplos para inspirar (salvem nos seus favoritos! :) ). Apesar de alguns serem em inglês, são todos bastante intuitivos. Manteremos esta lista sempre atualizada para sua consulta!
      </p>
      <ul>
        <li><a href="http://abduzeedo.com.br/" target="blank">Abduzeedo</a> - contém muitas referências boas tanto para Web quanto para design gráfico e possui alguns tutoriais também.</li>
        <li><a href="http://chocoladesign.com/category/design/webdesign" target="blank">Choco la Design (seção de Web Design)</a> - ótimo site sobre design em geral. Este link vai para a seção de web design que possui artigos e sites para inspiração.</li>
        <li><a href="http://onepagelove.com/" target="blank">One Page Love</a> - este é em inglês, mas é bastante intuitivo. Ele é ótimo para se ver antes de criar <a href="#" class="mail-client glossario pop"
         data-placement="top"
         data-content='Página de apresentação rápida de alguma proposta. Utilizada
          geralmente para pré-lançamento ou campanha de marketing digital.'>
         landing pages</a> e <a href="#" class="mail-client glossario pop"
         data-placement="top"
         data-content='Hotsites são sites pequenos com objetivos bem definidos e prazo de uso.'>
         hotsites</a>.</li>
        <li><a href="http://www.awwwards.com/" target="blank">Awwwards</a> - (em inglês) premia e avalia sites do mundo inteiro. Os usuários também podem avaliar as páginas que estão sendo julgadas!</li>
      </ul>
    </div>
    <div class="step-pane active" id="step6">
      <?php echo $this->element('quiz', 
  array('exercicios'=> array(
      0 => array('Questão 1',
                  'Qual é o papel do briefing na execução de um projeto?',
                   array(
                    array('É uma das etapas do método de Design Thinking. É um documento com todas as referências e inspirações coletadas para a execução do projeto.'),
                    array('É um dos documentos base para o desenvolvimento de um trabalho. Descreve todas as especificidades do projeto, objetivos, público-alvo e necessidades do cliente.', true),
                    array('Descrever a função de todos os profissionais envolvidos no projeto, assim como as etapas que cada um deve seguir.')
                         ),
                   
                   'O briefing é um documento que deve ser feito no início do desenvolvimento de um projeto, não necessariamente de design. Deve conter todas as informações que mapeiam o problema: os objetivos a serem alcançados, o público-alvo, a verba disponível, o prazo, os anexos, etc.'
                 ),

      1 => array('Questão 2',
                  'Como se chama o tipo de desenvolvimento que é executado no navegador?',
                   array(array('Front-Client'), 
                         array('Back-End'),
                         array('Front-End', true),
                         array('Front-server')
                         ),
                   'Front-End é a área que lida com manipulação do código no lado do cliente. Lembrando que o cliente é o terminal de acesso ao conteúdo, na maior parte das vezes é o nosso navegador (ou browser). As linguagens usadas para isso são HTML, CSS e JavaScript.'
                 ),

        2 => array('Questão 3',
                 'Qual cor está representada corretamente no sistema de cores RGB?',
                   array(array('Cinza - rgb(255, 255, 0)'), 
                         array('Verde - rgb(0, 255, 0)', true),
                         array('Amarelo - rgb(0, 255, 255)'),
                         array('Vermelho - rgb(280,0,0)')
                         ),
                   'Se RGB significa Vermelho Verde Azul (Red Green Blue em inglês), para ter a cor verde, basta que apenas ela, na notação, tenha algum valor. Considerando 0, apagada, e 255, a mais intensa, a representação do verde é RGB(0, 255, 0). Obs: com esse tipo de notação, podemos obter vários tipos de verde, basta brincar com esses valores. Volte no tópico 4 dessa aula e veja as possibilidades no seletor =)'

                 ),

      3 => array('Questão 4',
                  'Qual cor está representada corretamente no sistema numérico hexadecimal?',
                   array( 
                         array('Azul - #0000FH'),
                         array('Rosa - #00FFF6'),
                         array('Cinza - #CCCCCC', true),
                         array('Branco - #FFFF33')                  
                         ),
                   'Para pensar a cor em hexadecimal é sempre interessante separar os pares: #xx xx xx. O primeiro é o valor de vermelho, o segundo de verde e o último de azul. A diferença para a notação de rgb é que ao invés de ir de 0 a 255, o valor é de 00 a FF. Na pergunta acima, cinza é igual a #CCCCCC, pois todas as cores estão acesas na mesma intensidade, gerando um tom de cinza. Qualquer valor hexadecimal que os três pares forem iguais representam um tom de cinza, como por exemplo as cores #C5C5C5, #333333, #555555.'
                 ))    
  )); ?>
    </div>
  </div>
</div>
