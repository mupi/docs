<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Nav",
    "url"   => "tag-nav"
    )); 
    ?> 

    <?php 
    $this->Html->script("bootstro.js", array("inline" => false));
    $this->Html->script("exercise-inspector.js", array("inline" => false));
    $this->Html->script("html-lesson.js", array("inline" => false));
    $this->Html->css("html-lesson.css", null, array("inline" => false));
    $this->Html->css("exercise-inspector.css", null, array("inline" => false));
    $this->Html->css("bootstro.css", null, array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="nav">
          <h3>Nav</h3>
          <p>
            O elemento <code>nav</code> vem da palavra inglesa "navigation", 
            que traduzida temos "navegação". As tags <code>&lt;nav&gt; &lt;/nav&gt;</code>, 
            conforme o próprio nome sugere, envolvem uma seção de navegação do 
            site, ou seja, um grupo de links que representam áreas 
            (em diferentes páginas ou não) de um mesmo web site. Resumindo, 
            estas tags funcionam como um contêiner de links para navegação, ou, menu.
          </p>
          <p>
            Por exemplo, no exemplo a seguir, foram reagrupados os gatos por algum 
            critério comum, como a cidade em que estão localizados. Para isso, 
            fazemos um menu lateral com o nome das cidades e inserimos links 
            internos entre páginas ou seções do site:
          </p>

          <div class="two-columns-example row-fluid">
            <nav>
              <ul>
                <li>
                  <a href="#gatos-campinas">Campinas</a>
                </li>
                <li>
                  <a href="#gatos-saopaulo">São Paulo</a>
                </li>
                <li>
                  <a href="#gatos-salvador">Salvador</a>
                </li>
                <li>
                  <a href="#gatos-bhorizonte">Belo Horizonte</a>
                </li>
              </ul>
            </nav>
            <section>
              <ul>
                <li id="gatos-campinas"> 
                  Gatos em Campinas
                  <ul>
                    <li>Gato 1</li>
                  </ul>
                  <li id="gatos-saopaulo">
                    Gatos em São Paulo
                    <ul>
                      <li>Gato 1</li>
                      <li>Gato 2</li>
                    </ul>
                  </li>
                  <li id="gatos-salvador">
                    Gatos em Salvador
                    <ul>
                      <li>Gato 1</li>
                    </ul>
                  </li>
                  <li id="gatos-bhorizonte">
                    Gatos em Belo Horizonte
                    <ul>
                      <li>Gato 1</li>
                    </ul>
                  </ul>
                </section>
              </div>

              <p>
                <span class="label label-warning">Importante</span> Note que para 
                o valor do atributo <code>href</code> dos links do exemplo 
                acima, utilizamos um tipo diferente de valor como link. Este 
                valor leva o usuário ao elemento que tiver um outro atributo, 
                chamado <code>id</code>, com o mesmo valor. O atributo <code>id</code> 
                é representado sempre por um <code>#</code> e um nome relacionado 
                ao que ele identifica.
              </p>
              <p>
                Por exemplo, No caso acima, onde estão os gatos de Salvador, 
                foi colocado o id <code>id="gatos-salvador"</code>. Assim, 
                no menu, o link para ele será <code>#gatos-salvador</code>.
              </p>
              <p>
                O atributo <code>id</code> (de identificação) é um atributo 
                muito importante pois é utilizado no HTML como identificador 
                único de um elemento da na página. Isto significa que um 
                <code>id</code> <strong>nunca</strong> deve ser repetido
                dentro da mesma página.
              </p>
            </div>
          </div>
        </div>
      </div>