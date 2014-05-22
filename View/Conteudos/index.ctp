<?php 
  $menus = array();

  $menus['internet'] = array(
    'INTERNET', 
    'Como funciona a Internet',
    'items' => array(
      'Arquitetura Cliente/Servidor' => 
      array('internet-arquitetura', 
            'A arquitetura Cliente/Servidor é aquela em que o ' 
            . 'usuário utiliza um terminal para acessar sistemas'),
      'O que é internet, web e DNS' => 
      array('internet-dns', 
            'A internet é uma rede global de computadores ' 
            . 'interligados que utilizam uma série de regras'),
      'Protocolos e Jargões' => 
      array('internet-protocolos', 
            'URL é o endereço do site, ou de uma parte específica dele, ' 
            . 'que você pode visualizar na barra de endereços do seu navegador'),
      'Como funciona a Internet - Infográfico' => 
      array('internet-infografico', 
            'O infográfico abaixo traz um resumo de como funciona a internet'),      
  ));

  $menus['design'] = array(
    'DESIGN', 
    'Design na Web',
    'items' => array(
      'Como funcionam as cores na Web' => 
      array('design-cores', 
            'Nossos computadores e monitores utilizam o sistema RGB ' 
            . '(Red Green Blue) para imprimir as cores na tela. Combinação'
            . ' de cores e formação de um pixel'),
      'O que é design' => 
      array('design', 
            'Introdução a conceitos de design'),
      'Design Thinking' => 
      array('design-thinking', 
            'O método design thinking é utilizado para se estruturar ' 
            . 'um projeto de design'),
      'Wireframes, protótipos e mockups' => 
      array('design-mockup', 
            'Uma das etapas mais fundamentais durante o processo de desenvolvimento ' 
            . 'de um produto é a geração de ideias'),
    ));

  
  $menus['html'] = array(
    'HTML', 
    'Tópicos sobre HTML',
    'items' => array(
      'O que é HTML' => array('html-definicao', 
                         'HTML é a linguagem utilizada para dar estrutura '
                         . 'e semântica aos conteúdos'),
      'Imagens' => array('tag-img', 
                         'Como inserir imagens no HTML? Fotos, '
                         . 'infográficos e imagens...'),
      'Links' => array('tag-a', 
                       'Criação de links para páginas externas '
                       . ' que ajudam a enriquecer sua página e melhorar a'
                       . ' navegabilidade'),
      'Elementos Textuais' => array('tag-textuais', 
                                    'Há muitos elementos HTML que lidam com'
                                    . ' o texto em si. Aqui, falaremos sobre 3'
                                    . ' que são importantes para iniciar um '
                                    . 'trabalho em desenvolvimento web'),
      'Listas' => array('tag-listas', 
                        'Para montar uma lista, precisamos de dois elementos '
                        . 'HTML: um elemento indicando que determinado trecho '
                        . 'será uma lista e um elemento separando e '
                        . 'identificando cada item desta lista'),
      'Tabelas' => array('tag-tabela', 
                        'As tabelas no HTML são compostas por diversos '
                        . 'elementos organizados de maneira hierárquica'),
      'Div e span' => array('tag-div-span', 
                        'Div e span são elementos genéricos utilizados para '
                        .'organizar o conteúdo e modificar o layout'),
      'Section' => array('tag-section', 
                        'O elemento section indica ao navegador que o trecho '
                        .'englobado por suas tags representa a seção de algo'),
      'Header' => array('tag-header', 
                        'O elemento header informa ao navegador '
                        .'que ali temos um cabeçalho'),
      'Footer' => array('tag-footer', 
                        'O elemento footer indica ao navegador que o trecho '
                        .'englobado por suas tags representa o rodapé'),
      'Aside' => array('tag-aside', 
                        'O elemento aside vem da própria palavra inglesa aside,'
                        .'que traduzida fica "ao lado" '),
      'Nav' => array('tag-nav', 
                        'O elemento nav, conforme o próprio nome sugere, '
                        .'envolve uma seção de navegação'),
      'Estrutura HTML' => array('estrutura-html', 
                                'A estrutura e a organização de um arquivo ' 
                                . 'HTML'),
    ));

  

  $menus['css'] = array(
    'CSS', 
    'Tópicos sobre CSS3',
    'items' => array(
      'O que é CSS?' => array('css-sobre', 
			      'Nos estudos de HTML, é dito algumas vezes ' 
             . 'que quem controla a aparência e o estilo ' 
             . 'da página é a linguagem CSS'),
      'Formas de de Utilizar CSS' => array('css-como-usar',
					   'Existem 3 formas básicas de '
					   . 'aplicar CSS em uma página: '
					   . 'inline, através da tag style e '
					   . 'utilizando um arquivo externo'),
      'As propriedades CSS' => array('css-propriedades',
             'Como declarar propriedades CSS no ' 
             . 'código HTML'),
      'Propriedade color' => array('css-color', 
             'Como mudar cores de fontes do seu texto'),
      'Propriedade font' => array('css-font', 
            'A alteração das fontes utilizadas no HTML'),
      'Modelo de caixa' => array('modelo-de-caixa', 
          	' Todos os elementos HTML visualmente possuem uma forma retangular '
          	.'e esse é o modelo de caixa'),
      'Propriedade border' => array('css-border', 
            'Com as propriedades <code>border-*</code> conseguimos modificar o '
            .'estilo das bordas dos elementos HTML'),    
      'Largura e Altura dos elementos (width e height)' => array('css-width-height', 
            'Todo elemento HTML tem um formato retangular. Levando '
            . 'em consideração o formato do retângulo, todos os'),    
      'Posicionamento dos elementos' => array(
          	'css-posicionamento',
          	'Depois de entender como funciona o modelo de caixa '
          	. 'e como alterar suas propriedades, vamos aprender'),
              ));

  $menus['projetos'] = array(
    'PROJETOS', 
    'Projetos',
    'items' => array(
      'Estrutura de diretórios' => 
      array('estrutura-diretorios', 
            'Para criar um site simples é preciso criar uma estrutura local '
	    . 'para que você consiga trabalhar')
    ));

?>

<div class="container-fluid summary-content table-of-contents">
  <div class="row-fluid">
    <?php 
      /**
       * FIXME: Make me a Helper, please? Thank you! =D
       */
    ?>
    <div class="span3 bs-docs-sidebar">
      <ul class="nav nav-list bs-docs-sidenav affix">  
        <h2>Sumário</h2>
        <?php
          foreach($menus as $menu){
          echo '<li><a href="#' . $menu[0] . '">';
          echo '<i class="icon-chevron-right"></i>' . $menu['1'] . '</a></li>';
          }
        ?>
      </ul>
    </div>          
    <?php 
        /**
         * End of Helper
         */
    ?>
    <div class="span9">
      <!-- hack to skip first child margin (bootstrap)-->
      <section style="display: none;"></section>
      <?php 
        foreach ($menus as $menu){
          echo '<section class="span12" id="' . $menu[0] . '">';
          echo '<h3>' . $menu[1] . '</h3>';
          foreach($menu['items'] as $title => $item){
            echo '<h4>' . $title . '</h4>'; 
            echo '<p>' . $item['1'];
            echo '... ';
            echo $this->Html->link('<i class="icon-circle-arrow-right"></i>',
                                   array('controller' => '',
                                         'action' => $item[0]), 
                                   array('escape' => false));
            echo '</p>';
          }
          echo '</section>';
        }
      ?>
    </div>
  </div>
</div>
