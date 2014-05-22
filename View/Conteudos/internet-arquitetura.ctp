<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Arquitetura Cliente/Servidor",
    "url"   => "internet-arquitetura"
    )); 
    ?> 
    <?php 
    $this->Html->script("main.js", array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="arquitetura">
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
</div>
</div>

