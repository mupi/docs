<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Footer",
    "url"   => "tag-footer"
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
        <div class="step-pane in" id="footer">
         <h3>Footer</h3>
         <p>
          O elemento <code>footer</code>, conforme sua tradução, informa ao navegador
          que ali temos um <strong>rodapé</strong>. Assim como para o 
          <code>header</code>, não estamos falando necessariamente do rodapé da página,
          mas também de outros, como do rodapé de seções.
        </p>
        <p>
          <span class="label label-warning">Importante</span> Os comentários 
          (representados com os símbolos &lt;!-- --&gt;) podem por exemplo 
          ser utilizados para distinguir essas diferenças, informando que 
          tal rodapé pertencem a uma determinada seção.
        </p>
        <div class="two-columns-example row-fluid">
          <header>
            <h1>Caipora</h1>
          </header>
          <!-- início da seção de lista de gatos -->
          <section>
            <ul>
              <li>Gato 1</li>
              <li>Gato 2</li>
            </ul>
          </section>
          <!-- início da seção de tabela de alimentação -->
          <section>
            <p>Espaço para tabela;</p>
          </section>
          <!-- início do rodapé da página -->
          <footer>
            <h1> Contatos </h1>
            <p>Telefone</p>
            <p>Email</p>
          </footer>
        </div>
        <p>
          <span class="label label-warning">Importante</span> Note que utilizamos um
          elemento <code>h1</code> dentro deste section. Isto não significa que ele é o
          título mais importante da página, mas sim deste elemento. Este é um dos
          conceitos importantes inseridos pelo HTML5 em relação ao HTML4.
        </p>
      </div>
    </div>
  </div>
