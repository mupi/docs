<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Internet, Web e DNS",
    "url"   => "internet-dns"
    )); 
    ?> 
    <?php 
    $this->Html->script("main.js", array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="dns">
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
</div>
</div>

