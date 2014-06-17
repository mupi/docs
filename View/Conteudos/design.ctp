<?php 
    echo $this->element('breadcrumb-content', array(
        "curso" => "Web Design com HTML e CSS",
        "aula" => "Sobre design",
        "url" => "design",
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

<div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="design-definicao">

      <h3>O que é design?</h3>
      <p class="quote">
            <i class="icon-quote-left"></i> Um método para solucionar um 
            problema, seja ele físico ou visual. 
            <i class="icon-quote-right"></i>
      </p>
      <p>
            Design é todo o processo de resolução de problema que vai 
            desde a sua descoberta à implementação da solução. 
            Todo design tem que ser bem estruturado e pensado como um todo, 
            de modo que nada deva ser arbitrário. 
      </p>
      <p>
        <i class="icon-hand-right"></i> Design é diferente de arte. É 
        possível enxergar o design como “deixar algo bonito” porque isso,
        muitas vezes, é consequência de um produto de design bem executado. 
        Mas a principal diferença entre design e arte é que o design tem 
        um objetivo prático desde a sua concepção. Uma obra de arte não 
        precisa ser útil, um produto de design, sim, afinal ele nasceu para 
        solucionar ou aprimorar algo. De todo modo, isso não quer dizer que 
        design não envolva preocupações estéticas, uma vez que ele também 
        interfere em como o usuário lida com o produto.
      </p>
      <div class="mupi-example">
        <div class="clearfix">
            <div class="img-polaroid chaleira pull-left">
                <?php 
                    echo $this->Html->image('chaleira.jpg', 
                        array('alt' => 'Chaleira multi-uso')); ?>
                <label>
                    Exemplo de uma solução de design bem executada
                </label>
            </div>
            <div class="img-polaroid cafeteira pull-left">
                <?php 
                    echo $this->Html->image('cafeteira.jpg', 
                        array('alt' => 'Design de uma cafeteira')); ?>
                <label>Exemplo de projeto bem estruturado de uma cafeteira 
                italiana com todas as partes definidas e especificadas</label>
            </div>
            <div class="img-polaroid canivete pull-left">
                <?php 
                    echo $this->Html->image('canivete.jpg', 
                        array('alt' => 'Canivete suíço')); 
                ?>
                <label>
                    O canivete suíço consegue reunir várias 
                    funcionalidades em um objeto que seja pequeno e 
                    caiba na palma da mão
                </label>
            </div>
          </div>
        </div>
     
        <h4>A função do Web Designer</h4>
        <p>
            <label class="label label-inverse">Web Design</label> é o 
            design específico pra web.
        </p>
        <p>
            <label class="label label-inverse">Web designer</label> é o 
            profissional de Web Design. É a pessoa responsável por pensar 
            em como os usuários vão interagir com o site, quais 
            informações devem ter ali, onde cada elemento deve estar 
            posicionado, quais cores e fontes tipográficas utilizar, etc.
        </p>
        <p>
            Existem algumas formas de pensar o trabalho de Web Design. A 
            que vamos trabalhar aqui é o Design centrado no usuário. Deste 
            modo, durante o processo de design, temos que levar em conta 
            as necessidades, desejos e limitações do ser humano durante 
            todas as etapas de realização do projeto.
        </p>
        <h3>Termos do desenvolvimento web</h3>
        <p>
            <label class="label label-inverse">Back-End</label><br/>
            O acesso a sites utiliza a arquitetura cliente/servidor.
            A parte do projeto que é executada no servidor chama-se 
            Back-End e utiliza linguagens de programação como PHP, 
            Java e Ruby.
        </p>
      <p>
        <label class="label label-inverse">Front-End</label><br/>
            Chamamos de desenvolvimento Front-End a criação do layout e a
            manipulação dos elementos visuais em um web site. Para esta 
            parte do projeto, usamos as linguagens HTML, CSS e Javascript, 
            sendo esse trabalho executado no navegador (cliente).
      </p>
      <p>Assim, o Web Designer trabalha com o desenvolvimento Front-End.</p>
      
      <h4>Referências, referências, referências</h4>
      <p>
        Durante a criação de trabalhos e projetos, coletar o máximo de 
        referências possíveis para inspirar-se é algo que facilita muito. 
        Busque tudo o que achar pertinente, explorando diferentes formatos 
        de mídia: procure imagens, vídeos, músicas, entre muitos outros. 
        Para web, existem vários sites e ferramentas que facilitam esse 
        trabalho.
      </p>
      <p>
        Seguem bons exemplos para inspirar (salvem nos seus favoritos! 
        :) ). Apesar de alguns serem em inglês, são todos bastante 
        intuitivos. Manteremos esta lista sempre atualizada para sua consulta!
      </p>
      <ul>
        <li>
            <a href="http://abduzeedo.com.br/" target="blank">Abduzeedo</a> - 
            contém muitas referências boas tanto para Web quanto para design
             gráfico e possui alguns tutoriais também.
        </li>
        <li>
            <a href="http://chocoladesign.com/category/design/webdesign" 
                target="blank">Choco la Design (seção de Web Design)</a> - 
            ótimo site sobre design em geral. Este link vai para a seção de 
            web design que possui artigos e sites para inspiração.
        </li>
        <li>
            <a href="http://onepagelove.com/" target="blank">One Page Love</a> - 
            este é em inglês, mas é bastante intuitivo. Ele é ótimo para se ver 
            antes de criar <a href="#" class="mail-client glossario pop"
         data-placement="top"
         data-content='Página de apresentação rápida de alguma proposta. Utilizada
          geralmente para pré-lançamento ou campanha de marketing digital.'>
         landing pages</a> e <a href="#" class="mail-client glossario pop"
         data-placement="top"
         data-content='Hotsites são sites pequenos com objetivos bem definidos e 
                        prazo de uso.'>
         hotsites</a>.</li>
        <li>
            <a href="http://www.awwwards.com/" target="blank">Awwwards</a> - 
            (em inglês) premia e avalia sites do mundo inteiro. Os usuários 
            também podem avaliar as páginas que estão sendo julgadas!
        </li>
      </ul>
    </div>
  </div>
</div>
