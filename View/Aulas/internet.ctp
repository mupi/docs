<?php 
  echo $this->element(
    'breadcrumb', 
    array("curso" => "Web Design para iniciantes",
          "aula"  => "Como funciona a Internet",
          "aulas" => array(
            0 => array("Como funciona a internet", "internet", true),
            1 => array("Sobre design", "design"),
            2 => array("Introdução ao HTML5", "html"),
            3 => array("Introdução a CSS3", "css"),
            4 => array("Estrutura básica de projeto", "estrutura-projeto"),
            5 => array("JavaScript e jQuery", "js-jquery"),
            6 => array("Ferramentas externas","ferramentas-basico"),
            7 => array("Projetos","projetos-webdesign"),
          )
    )); 
?> 
<?php 
  echo $this->element('wizard', array(
    "steps" => array(
      "Sobre essa aula", 
      "Arquitetura", 
      "O que é a Internet?", 
      "Protocolos",
      "Juntando tudo",
      "Quiz"
    ))); 
?>
<?php 
  $this->Html->script("main.js", array("inline" => false));
?>

<div class="container wizard-content navbar-fixed-top">
  <div class="row-fluid">
    <!-- Steps content -->
    <div class="step-content">
      <div class="step-pane active" id="step1">
        <h3>Sobre essa aula: como funciona a internet?</h3>
        <p>
          Olá!
        </p>
        <p>
          Você já parou para pensar em como os web sites aparecem na tela de
          seu computador? E os sistemas que você acessa de qualquer lugar,
          bastando ter acesso à internet, você sabe onde eles estão instalados?
          Bem, nesta aula vamos desmitificar estes percursos e trazer a você
          uma visão geral sobre como isso acontece através dos tópicos: 
        </p>
        <ul>
          <li>
            Arquitetura Cliente/Servidor
          </li>
          <li>
            O que é a Internet?
          </li>
          <li>
            Protocolos e jargões
          </li>
        </ul>
        <p>
          No final, ainda há um tópico chamado 
          <a href="#step5" class="link-step">Juntando tudo</a> 
          que traz todos osconceitos desta aula funcionando de maneira conjunta.
        </p>
        <p>
          Estude todos os tópicos, verifique todas as dicas e links que
          acrescentamos e amplie seus conhecimentos com as sugestões do 
          <span class="label label-info">Fica a dica!</span>.
        </p>
        <p>
          Boa aula!
        </p>
      </div>
      
      <div class="step-pane" id="step2">
        <h3>Arquitetura Cliente/Servidor</h3>
        <p>
          Mas, o que é essa arquitetura?
        </p>
        <p>
          A arquitetura Cliente/Servidor é aquela em que o usuário utiliza um
          terminal para acessar sistemas ou dados que estão armazenados em um
          computador conectado à internet, chamado de servidor.
        </p>
        <p>
          <?php 
             echo $this->Html->image('gspqn.png', 
                                     array(
                                       'alt' => 'Tente outra página!', 
                                       'class' => 'pull-right'
                                     )); 
          ?>
          Fica fácil entender esta arquitetura quando pensamos por exemplo em
          um sistema como um 
          <a href="#" 
             class="mail-client pop"
             data-placement="top"
             data-original-title="Site de música"
             data-content="
                           <p> 
                             O <a href='http://www.grooveshark.com' 
                                  target='_blank'>Grooveshark</a> é um exemplo
                             de sistema de comunicação em que músicas transitam
                             como informação em uma arquitetura cliente/
                             servidor. 
                           </p>">
            site de ouvir música
          </a>, em que um terminal pode ser um celular ou um navegador web, os
          dados são as músicas, o sistema é um gerenciador de "play lists" e
          ambos estão armazenados no servidor.
        </p>
        <p> 
          Mas, e a relação com a expressão Cliente/Servidor?
        </p>
        <p>
          Bem, nessa arquitetura, cliente é o terminal de acesso e servidor é o
          computador que contém os arquivos. A conexão entre os dois é realizada
          via internet, sendo que os servidores estão localizados em diversos
          lugares do mundo. A informação que o usuário está acessando de seu
          terminal pode estar armazenada em qualquer continente, inclusive na
          mesma cidade em que ele está, dependendo de onde o sistema tiver sido
          hospedado.
        </p>
        <p>
          Um servidor pode atuar de diversas formas, sendo que seu funcionamento
          básico é o envio de informações pedidas em um dado terminal que está
          conectado a ele, localmente ou não. Um servidor pode
          receber diversos parâmetros enviados pelo cliente por 
          <a href="#" class="mail-client glossario pop"
             data-placement="top"
             data-content='Ações do usuário podem ser por exemplo itens
             escolhidos em uma lista ou os dados de um formulário de cadastro.'>
            ações do usuário
          </a> 
          e a resposta que o servidor retornará ao cliente será baseada no
          processamento dessas informações.
        </p>
        
        <div class="mupi-example">
          <ul id="myTab" class="nav nav-tabs">
            <li class="active">
              <a href="#cliente" data-toggle="tab">Cliente</a>
            </li>
            <li class="">
              <a href="#servidor" data-toggle="tab">Servidor</a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="cliente">
              <h5>Gerenciadores de e-mail</h5>
              <p>
                Gerenciador de e-mails é um programa de instalação local nas
                máquinas utilizado para acessar contas de e-mails. É geralmente
                usado por pessoas com mais de uma conta de e-mail pelo fato
                delas poderem acessar a todas diretamente deste cliente. 
              </p>
              <ul>
                <li>
                  <a href="https://www.mozilla.org/pt-BR/thunderbird/"
                     target="_BLANK">
                    Thunderbird
                  </a>: gerenciador feito pela Mozilla – mesma desenvolvedora
                  do navegador Firefox – e é caracterizado como Software
                  Livre. 
                </li>
                <li>
                  <a href="http://office.microsoft.com/pt-br/outlook/"
                     target="_BLANK">
                    Microsoft Outlook
                  </a>: gerenciador privado integrante do Microsoft Office.
                </li>
              </ul>
              
              <h5>Navegador Web ou browser</h5>
              <p>
                Através deste terminal ou cliente, você acessa os sites que
                estão armazenados em servidores. Veja abaixo alguns exemplos de
                navegadores bastante conhecidos: 
              </p>
              
              <div class="">
                <a class="navegador chrome" title="Google Chrome" 
                   href="http://www.google.com/intl/pt-BR/chrome/browser/"
                   target="_BLANK"></a>
                <a class="navegador opera"  title="Opera" 
                   href="http://www.opera.com/pt/" target="_BLANK"></a>
                <a class="navegador firefox" title="Firefox"
                   href="https://www.mozilla.org/pt-BR/firefox"
                   target="_BLANK"></a>
                <a class="navegador safari" title="Safari" 
                   href="http://www.apple.com/br/safari/" target="_BLANK"></a>
                <a class="navegador ie" title="Internet Explorer" 
                   href="http://windows.microsoft.com/pt-br/internet-explorer/download-ie"
                   target="_BLANK"></a>
                <!-- FIXME Link para o IE ultrapassando os 80 characters -->
              </div>
            </div>
            <div class="tab-pane fade" id="servidor">
              <p>
                Há muitos exemplos de empresas que oferecem serviços
                relacionados a servidores, como por exemplo a hospedagem de web
                sites. As características do servidor serão diferentes
                dependendo do tipo de sistema que você deseja hospedar. Veja
                abaixo duas empresas, uma brasileira e a outra não, que vendem
                este tipo de serviço: 
                <ul>
                  <li>
                    <a href="http://www.locaweb.com.br/" 
                       target="_BLANK">
                      Locaweb
                    </a>: um exemplo de empresa que vende serviço de
                    hospedagem.  
                  </li>
                  <li>
                    <a href="http://www.amazon.com/" target="_BLANK">
                      Amazon
                    </a>: um exemplo de empresa que vende serviço de
                    contratação de máquinas virtuais. 
                  </li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <p>
          <span class="label label-info">Fica a dica!</span>
          <a href="http://www.google.com/about/datacenters/gallery/#/"
             target="_blank"> Onde mora a internet</a> é uma página do próprio
             Google que expõe fotos de seus gigantescos Data Centers, ou seja,
             servidores, permitindo visualizar como é por dentro aquilo que
             denomina-se Internet física. 
        </p>
        <p>
          <span class="label label-info">Fica a
            dica!</span><a href="http://www.20thingsilearned.com/pt-BR"
                           target="_blank"> 20 lições que aprendi sobre
            navegadores e a web</a>  é  um e-book do produzido pelo Google que
            aborda tanto os assuntos desta aula, quanto os outros pontos do
            curso. Ele usa analogias interessantes! 
        </p>
      </div>
      
      <div class="step-pane" id="step3">
        <h3>O que é a Internet, a Web, o DNS e os tipos de conteúdo</h3>
        <p>Vamos esclarecer as diferenças entre cada um desses conceitos.</p>
        <p>
          <span class="label label-inverse">Intenet</span> Primeiramente, temos
          a Internet, uma rede global de 
          <a href="#" class="glossario pop" data-placement="right"
             data-original-title=""
             data-content='Realmente interligados! Através de cabos (inclusive
             pelo oceano), fibras ópticas e satélites!'> computadores
            interligados
          </a>
          que utilizam uma série de regras de comunicação para trocarem
          informações entre si. 
        </p>
        <p>
          Cada computador conectado à internet tem um endereço que o identifica
          na rede chamado de <span class="label label-inverse">IP</span>
          (Internet Protocol). Esse endereço é o ponto fundamental para
          conectar um  
          <a href="#" 
             class="glossario pop" 
             data-placement="right"
             data-original-title="" 
             data-content="Vários dispositivos se conectam à
                           internet, como celulares, roteadores e televisões.">
            dispositivo
          </a> à internet. O IP também é utilizado em redes locais, como por
          exemplo quando você tem um roteador em casa: esse dispositivo tem um
          IP próprio com o qual ele se conecta à internet e o seu computador
          tem um outro IP com o qual ele se conecta ao roteador.  
        </p>
        <p>
          Para trocar informações, todos esses dispositivos utilizam uma série
          de protocolos que nada mais são do que regras de comunicação. Um dos
          protocolos mais comuns é o <span class="label
          label-inverse">TCP</span>, considerado uma das bases da internet
          sendo que várias regras de comunicação dentro desse contexto
          baseiam-se nele. 
        </p>
        <p>
          <span class="label label-inverse">Web</span> Em seguida, temos a Web
          que é a parte da internet que acessamos via um navegador web. Ao
          utilizar um navegador, você está, na prática, fazendo uma série de
          pedidos de informação para servidores na internet. Esses pedidos são
          feitos utilizando regras específicas que permitem que os servidores e
          seu navegador troquem informações. Logo, quando colocamos um endereço
          na barra do navegador, como por
          exemplo <code>http://facebook.com</code>, ele gera um pequeno arquivo
          com informações e envia para a internet. Este arquivo é utilizado
          para encontrar o 
          <a href="#" class="glossario pop"
             data-placement="right"
             data-original-title=""
             data-content="No caso do facebook, centenas de milhares
                           servidores!">servidor</a> do facebook 
          que então envia para seu computador, de usuário, as informações
          pedidas, que aqui é o site da rede social.
        </p>
        <p>
          <span class="label label-inverse">DNS</span> Enviar arquivos para a
          internet quer dizer que estes arquivos estão sendo disponibilizados
          na rede através da placa de rede do seu computador. Ela envia o dado
          que é capturado pelo seu provedor de internet, que em seguida envia
          para servidores que contêm um sistema chamado DNS (Sistema de Nomes
          de Domínios), que, por sua vez, encontram o servidor de informações
          desejado. Estes tais servidores DNS são computadores que possuem o
          endereçamento de vários outros servidores e ajudam a mapear as
          informações da rede.
        </p>
        <p>
          <span class="label label-inverse">Conteúdos</span> Ao receber todas
          as informações do servidor, seu navegador realiza sua leitura e as
          exibe em formato de página web. Essas informações vêm em vários
          formatos, como texto, imagem e vídeos. A informação textual divide-se
          em duas partes: uma que descreve como a página web deve se apresentar
          e se comportar e outra que contém o conteúdo a ser exibido.
        </p>
        <h4>Retomando e acrescentando!</h4>

        <ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#serv" data-toggle="tab">Servidor</a></li>
          <li class=""><a href="#cli" data-toggle="tab">Cliente</a></li>
          <li class=""><a href="#dns" data-toggle="tab">DNS</a></li>
          <li class=""><a href="#dominios" data-toggle="tab">Domínios</a></li>
        </ul>

        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="serv">
            <p>
              A interação entre um cliente e um servidor é sempre dada através de
              pedidos e entregas por pacotes. Porém, isso não quer dizer que o
              servidor seja apenas um entregador de pacotes! Muito pelo contrário,
              na maioria dos casos, o servidor utiliza seu poder computacional
              para executar tarefas específicas relativas ao conteúdo pedido pelo
              cliente. Por exemplo, em sistemas de busca, após o usuário confirmar
              a busca, o navegador envia esse dado para um servidor que processa
              uma busca internamente, devolvendo apenas os resultados esperados. 
            </p> 
          </div>
          <div class="tab-pane fade in" id="cli">
            <p>
              Da mesma forma que os servidores não são simplesmente entregadores de
              informação, o navegaor não é simplesmente um software de pedido e
              apresentação de conteúdo. Ele consegue cumprir
              uma série de tarefas que envolvem desde a 
              <a href="#" class="glossario pop"
                 data-placement="top"
                 data-original-title=""
                 data-content="Por exemplo, quando você inicia um novo chat na
                 sua rede social, abre-se uma janela de chat. Essa janela não
                 foi iniciada utilizando o servidor, mas sim com funções
                 executadas em seu navegador.">interface
              </a> 
              do site acessado até a verificação de dados inseridos pelos
              usuários. O  
              <a href="https://docs.google.com" target="_blank">
                Google Docs
              </a>, por exemplo, é uma aplicação que é executada quase que
              completamente em seu navegador, na qual as trocas de informações
              com o servidor são apenas para salvar os dados dos documentos que
              estão sendo editados. 
           </p>
          </div>
          <div class="tab-pane fade in" id="dns">
            <p>
              Dois pontos interessantes sobre DNS:
            </p>
            <ul>
              <li>
                Quando você registra um nome de 
                <a href="#" class="mail-client pop"
                   data-placement="top"
                   data-original-title="Registro.br"
                   data-content='Veja o site 
                   <a href="http://registro.br" target="a_blank">registro.br</a>
                   para conhecer mais sobre como registrar
                   domínios.'>
                  domínio
                </a>, 
                você tem que especificar um ou mais servidores de DNS que
                conterão as informações da localização do seu site. Essa
                informação é rapidamente propagada por vários outros servidores
                que terão também outras informações. Dessa forma, seu site será
                encontrado por toda a internet através do nome do seu domínio.
              </li>
              <li>
                DNS poisoning é uma prática utilizada para roubar informação de
                usuários. Basicamente, um servidor DNS é invadido e suas
                informações são alteradas. Dessa forma, o usuário é levado a um
                servidor com o endereço diferente do que ele procurava e acaba
                interagindo com um site falso, passando seus dados para esse
                site. 
              </li>
            </ul>
          </div>
          <div class="tab-pane fade in" id="dominios">
            <p>
              Dois pontos interessantes sobre domínios e subdomínios:
            </p>
            <ul>
              <li>
                É interessante notar que muitos sites na internet possuem
                subdomínios. Subdomínios são indicações de partes específicas
                num site. Por exemplo, num portal de notícias, é comum que as
                diferentes áreas sejam referenciadas por subdominios diferentes
                como <code>esporte.portal.com.br</code>, 
                <code>economia.portal.com.br</code>, 
                <code>politica.portal.com.br</code>.   
              </li>
              <li>
                Uma curiosidade é que o próprio <code>www</code> que é
                utilizado em muitos site é um subdomínio. Ele é utilizado para
                indicar a parte web daquele domínio. Outro exemplo de
                subdomínio é o <code>ftp</code>, utilizado para indicar o
                servidor de arquivos de um domínio.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="step-pane" id="step4">
        <h3>Protocolos FTP e HTTP e jargões da internet</h3>
        <p>
          Aqui, colocaremos algumas termos que serão amplamente utilizados em
          todos os nossos cursos. O conhecimento desses conceitos permitirá que
          ao longo das aulas você tenha um entendimento mais aprofundado de
          certas rotinas no desenvolvimento web e pode melhorar, inclusive, seu
          relacionamento em equipes de desenvolvimento Web compostas por
          designers, desenvolvedores e web designers. 
        </p>
        <p>
          <span class="label label-inverse">URL</span> é o endereço do site,
          ou de uma parte específica dele, que você pode visualizar na barra
          de endereços do seu navegador. Esse endereço tem um padrão
          específico: 
          <code>&lt;protocolo://subdominio.dominio/caminho?parametro=valor&amp;parametro1=valor1&gt;</code>
          utilizado em muitos sistemas de comunicação.
        </p>
        <p>
          <span class="label label-inverse">HTTP</span> é um protocolo de
          comunicação. Um protocolo de comunicação é uma série de regras
          necessárias para estabelecer a forma de comunicação entre duas
          máquinas. Os navegadores utilizam mensagens no formato HTTP, ou
          seja, mensagens que seguem esse padrão e o servidor, ao receber
          esses pacotes, "entende" o que está sendo enviado e pode então dar a
          resposta adequada. 
        </p>
        <p>
          <span class="label label-inverse">HTTP Request</span>
          No momento em que você executa uma URL na barra de endereços, o
          navegador organiza os dados necessários para envio, no formato do
          protocolo HTTP, e envia para a internet. Esse processo constitui um
          request HTTP, ou seja, um pedido de informação com protocolo
          HTTP. Esse request "sai" do seu computador e chega em computadores
          chamados Servidores de Nome de Domínio (DNS) os quais, por sua vez,
          descobrem onde está o servidor requerido pela URL e redirecionam 
          os pacotes pra esse servidor. 
        </p>
        <p>
          Você pode enviar dados através de um request HTTP sendo que há mais de
          uma forma de enviá-los. Duas formas bem comuns são: 
          <ul>
            <li>
              Através da <a href="#" class="mail-client pop"
                            data-placement="top"
                            data-original-title="Query String"
                            data-content="Uma tradução livre para query string
                            seria parâmetros do pedido HTTP. Esses parâmetros
                            poderão ser utilizados no processamento da resposta
                            do servidor.">
                query string
              </a> 
              <code>&lt;parametro=valor&amp;parametro1=valor1&gt;</code>
              presente na URL. Por exemplo, na
              URL <code>https://www.google.com.br/search?q=sucesso</code>,
              temos a query string <code>search?q=sucesso</code> em que há o
              pedido de busca para a palavra
              <a href="https://www.google.com.br/search?q=sucesso"
                 target="_blank">
                "sucesso"
              </a>. 
            </li>
            <li>
              Através do próprio pacote HTTP que não é visualizado por quem
              está utilizando o navegador. Essa forma é utilizada, por exemplo,
              no envio de senhas e grandes quantidades de dados. 
            </li>
          </ul>
        </p>
        <p>
          <span class="label label-inverse">Response</span> é a resposta do
          servidor, ou seja, os arquivos que ele envia ao cliente depois de
          processar o request feito. Os formatos mais comuns são 
          HTML <code>.html</code>, Javascript <code>.js</code>,
          CSS <code>.css</code> e imagem <code>.png, .jpg</code>. Os arquivos
          HTML, JavaScript e CSS são todos textuais. Eles são lidos e
          utilizados pelo navegador para montar o site, juntamente com as
          imagens. Outros exemplos de response são:
          <ul>
            <li>
              Alguns arquivos são enviados para o cliente através de downloads.
            </li>
            <li>
              Os navegadores lêem e executam também outros tipos de arquivos
              como video e PDF, mas, em geral, são necessários plugins para
              obter essas funcionalidades. 
            </li>
          </ul>
        </p>
      </div>
      <div class="step-pane" id="step5">
        <h3>Juntando tudo!</h3>
        <p>
          Chegamos ao final desta aula! O infográfico abaixo traz uma visão de
          como os conceitos estudados nos tópicos anteriores trabalham de
          maneira conjunta deixando mais claro o objetivo que trouxemos para
          cá: mostrar como funciona a internet! 
        </p>
        <p>
          Navegue por ele atentando-se a todos os detalhes!
        </p>
        <div id="myCarousel" class="carousel slide internet-infographic">
          <div class="carousel-inner">
            <div class="item active">
              <?php 
                echo $this->Html->image(
                  'infoslide1.jpg', 
                  array(
                    'alt' => 'como funciona a internet - Linguagem'
                  ));
              ?>
            </div>
            <div class="item">
              <?php 
                echo $this->Html->image(
                  'infoslide2.jpg', 
                  array(
                    'alt' => 
                    'como funciona a internet ' 
                    . '- Localiza&ccedil;&atilde;o e endereço'
                  ));
              ?>
           </div>
           <div class="item">
             <?php 
               echo $this->Html->image(
                 'infoslide3.jpg', 
                 array(
                   'alt' => 
                   'como funciona a internet - Como algu&eacute;m ' 
                   . 'recebe um e-mail?'));
             ?>
           </div>
           <div class="item">
             <?php 
               echo $this->Html->image(
                 'infoslide4.jpg', 
                 array('alt' => 'como funciona a internet - Juntando tudo'));
             ?>
           </div>
          </div>
          <a class="left carousel-control" href="#myCarousel"
             data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel"
             data-slide="next">›</a>

        </div>
      </div>

      <div class="step-pane" id="step6">
        <?php 
          echo $this->element(
            'quiz', 
            array('exercicios'=> array(
              0 => array(
                'Questão 1',
                "Uma empresa de contabilidade utiliza um sistema online 
          chamando CTX para gerenciar os dados da empresa de cada mês. Os
          contadores inserem os valores de venda e o sistema compara essas 
          informações com os dados de meses anteriores e disponibiliza 
          relatórios na Web para a análise dos diretores da empresa. 
          Considerando a arquitetura Cliente/Servidor, onde os dados são 
          armazenados para que qualquer usuário que tenha permissão de acesso 
          ao sistema consiga ver em tempo real esses relatórios?",
                array(
                  array('No navegador web do computador de um dos contadores'), 
                  array('Em um servidor remoto' , true),
                  array('Em um outro programa no computador do RH'),
                  array('No computador de um dos diretores')
                ),
                'Como foi dito que o sistema é online, presupõe-se que o 
          programa CTX está sendo executado em um servidor remoto que pode ser
          acessado por diversos computadores e pessoas com funções e 
          necessidades diferentes e dessa maneira não faria sentido que fossem
          guardados no navegador ou em qualquer outro programa no computador de
          apenas uma pessoa.'
              ),

              1 => array('Questão 2',
                  'Considerando a arquitetura Cliente/Servidor, qual das afirmações a seguir é falsa?',
                   array(array('Nos sistemas de redes sociais, os arquivos de fotos residem no servidor.'), 
                         array('A lógica da aplicação (as regras para processar e manusear dados) podem estar tanto servidor quanto no cliente, dependendo do caso.'),
                         array('A interface com o usuário é executada normalmente no servidor.' , true )
                         ),
                   'Toda a interação de usuário e uma parte da lógica da aplicação de um sistema Web é executada no navegador. É bom lembrar que os dados para montagem dessa interface residem no servidor. Por exemplo, ao entrar no site do <a href="http://pixlr.com/" target="_blank">Pixrl</a>,  um editor gratuito online de fotos, as alterações realizadas nas imagens são executadas pelo navegador.'
                 ),

        2 => array('Questão 3',
                 'O site <a href="http://www.whatsmydns.net/" target="_blank"> whatsmydns.net </a> verifica a propagação de um domínio por DNS\'s (Servidores de Nome de Domínio) no mundo. Entre neste site, digite o endereço mupi.me no campo de busca abaixo de DNS Propagation Check e clique no botão Search. O IP 198.199.97.175, que apareceu como resultado da busca, é',
                   array(array('de todos os computadores que estão acessando o mupi neste momento.'), 
                         array('de cada servidor em que o mupi está hospedado, localizados em diferentes lugares.'),
                         array('do servidor em que o mupi está hospedado.' , true )
                         ),
                   '<p>No resultado da busca feita por este site, são mostrados os servidores de DNS de diferentes localizações e o endereço do servidor em que está hospedado o domínio ali colocado, no caso, o mupi. Os servidores de DNS mostrados na lista  (e também no mapa) são os que contêm o endereço de onde aquele IP está hospedado. Assim, toda vez que chega nestes servidores uma request para acessar o domínio mupi.me, eles redirecionam para o servidor cujo IP é 198.199.97.175.</p><p><span class="label label-info">Fica a dica!</span> Ao invés de mupi.me, coloque outros domínios como o do Google.</p><p><span class="label label-info">Fica a dica!</span> Faça o teste: copie o IP e cole no local onde você insere uma URL no navegador!</p>'

                 ),

      3 => array('Questão 4',
                  'A afirmação a seguir é verdadeira ou falsa?
As aplicações web, em sua maioria, são executadas no servidor.',
                   array(array('Verdadeira'), 
                         array('Falsa' , true )                       
                         ),
                   '<p>As aplicações web, em sua maioria, são executadas no navegador que é um exemplo de cliente na arquitetura Cliente/Servidor. Elas usam o servidor para outras funções, como banco de dados.</p> <p>Sugerimos o vídeo do Google a seguir, sobre sua loja de apps, em que o conceito de Aplicação Web é explicado de maneira prática! Obs.: este vídeo contém legenda em português, basta clicar no botão "cc" e escolher a língua.</p>
                   <p class="ytEmbed"><iframe 
        width="640"
        height="360"
        src="http://www.youtube.com/embed/jB5KFJULahs?rel=0&fs=1&modestbranding=1&showinfo=0&iv_load_policy=3&theme=light&cc_load_policy=1&hl=1&cc_lang_pref=pt" 
        frameborder="0" 
        allowfullscreen></iframe></p>'
                 ))    
  )); ?>

           </div>
         </div>
       </div>
     </div>
