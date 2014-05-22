<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Protocolos e Jargões",
    "url"   => "internet-protocolos"
    )); 
    ?> 
    <?php 
    $this->Html->script("main.js", array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="protocolos">
          <h3>Protocolos FTP e HTTP e jargões da internet</h3>
          <p>
            Seguem alguns termos que são amplamente utilizados no desenvolvimento web. 
            O conhecimento destes termos, inclusive, pode melhorar, o relacionamento 
            em equipes de desenvolvimento Web compostas por designers, desenvolvedores 
            e web designers. 
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
  </div>
</div>
</div>
