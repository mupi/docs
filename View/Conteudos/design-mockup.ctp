<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Wireframes, protótipos e mockups",
    "url" =>  "design-mockup",
  )); 
?> 
    <?php 
    $this->Html->script("main.js", array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="mockup">
          <h3>Wireframes, protótipos e mockups</h3>
          <p>
            Uma das etapas mais fundamentais durante o processo de desenvolvimento 
            de um produto, no nosso caso de web designer, web sites ou aplicativos, 
            é a geração de ideias e protótipos. Após compreender o problema que 
            temos que resolver, independentemente de sua  complexidade, é necessário 
            gerar ideias de como será sua solução para então poder implementá-la. 
          </p>
          <p>
            Há várias formas de representar uma ideia e projetar sua solução. 
            Explicaremos a seguir a diferença entre mockups, wireframes e protótipos.
          </p>
          <p>
            <span class="label label-inverse">Wireframe</span> é uma representação 
            de <em>baixa fidelidade</em> de um projeto. Ele precisa trazer claramente 
            os principais grupos de conteúdo, a estrutura de informação e a descrição 
            básica de como vai ser a visualização do usuário. Considere os wireframes 
            como o esqueleto do seu projeto. Você pode fazê-lo digitalmente ou até 
            mesmo com papel e lápis. 
          </p>
          <p>
            <span class="label label-warning">Importante</span> Mesmo fazendo à mão, 
            não se esqueça das proporções: tente sempre trabalhar com desenhos de 
            tamanho real do seu produto final. Por exemplo, se for fazer um aplicativo 
            para celular, tenha um molde no papel com tamanho real da tela do celular. 
            Isso ajuda bastante a organizar os elementos sem se perder nos tamanhos!
          </p>
          <p>
            <span class="label label-inverse">Mockups</span> são representações 
            estáticas de <em>média/alta fidelidade</em> que já conseguem inclusive 
            passar para o usuário final como será a identidade e interface do produto 
            final. Pode ser um rascunho do design final ou até mesmo o design final do 
            produto. Um mockup bem feito deve representar a estrutura de informação, 
            permitir a visualização do conteúdo e demonstrar a principais funcionalidades 
            de uma forma estática.
          </p>
          <p>
            <span class="label label-inverse">Protótipo</span> é uma representação 
            de <em>média/alta fidelidade</em> do produto final que simula a 
            interação com o usuário. Ele deve permitir que o usuário tenha 
            experiência de conteúdo e interação com a interface e consiga 
            testar as principais interações que deverão conter no produto final.
          </p>
          <p>
            Os protótipos são muito utilizados para testar novas interfaces e 
            produtos antes de desenvolvê-los por completo, evitando desenvolver 
            um produto com falhas de usabilidade ou até uma solução que não está 
            resolvendo o problema incial que levou ao desenvolvimento do projeto.
          </p>
          <p>
            <span class="label label-info">Fica a dica!</span> Seguem alguns sites
             para você testar e usar =)
          </p>
          <p>
            Pra fazer protótipos para aplicativos para celular:
          </p>
          <ul>
            <li>
              <a href="http://proto.io/"target="_blank">Proto.io</a>: ferramenta 
              freemium.
            </li>
            <li>
              <a href="https://popapp.in"target="_blank">Popapp.io</a>: ferramenta 
              gratuita.
            </li>
          </ul>
          <p>
            Pra fazer protótipos para web e mobile (ambas são pagas, mas vale a 
            pena ao menos conhecer):
          </p>
          <ul>
            <li>
              <a href="http://uxpin.com/"target="_blank">UXPin</a>
            </li>
            <li>
              <a href="http://www.axure.com/"target="_blank">Axure</a>
            </li>
            <li>
               <a href="http://www.inpreso.com/"target="_blank">Inpreso</a>: ferramenta 
               freemium.              
            </li>
            <li>
              <a href="http://www.invisionapp.com/"target="_blank">InVision</a>: ferramenta 
              freemium.
            </li>
          </ul>
          <p>
            E para wireframes, mas também paga:
          </p>
          <ul>
            <li>
              <a href="http://balsamiq.com/"target="_blank">Balsamiq</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
