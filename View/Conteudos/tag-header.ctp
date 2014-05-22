
<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Header",
    "url"   => "tag-header"
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
        <div class="step-pane in" id="header">
          <h3>Header</h3>
          <p>
            O elemento <code>header</code>, conforme sua tradução, informa ao 
            navegador que ali temos um <strong>cabeçalho</strong>. Não 
            necessariamente precisa representar o cabeçalho da página, 
            podendo ser o cabeçalho de uma seção, por exemplo. 
            <!--Costuma-se colocá-lo como primeiro elemento do elemento pai.-->
          </p>

          <p>
            Por exemplo, no caso abaixo, onde você inseriria 
            as tags <code>&lt;header&gt; &lt;/header&gt;</code> 
            contendo o título da página: "Caipora"?
          </p>

          <?php echo $this->element('exercise-editor', array(
            "exClass" => "html1"
            , "lang"    => "html"
            , "exTitle" => "Insira um cabeçalho na página abaixo com o título: \"Caipora\":"
            , "exRenderBtn" => "Mostrar"
            , "showRespBtn" => "Mostrar nossa solução"
            , "initialContent" => "&lt;!-- Página do projeto --&gt;
            &lt;section&gt;
            &lt;p&gt;Aqui teremos a lista de gatos&lt;/p&gt;
            &lt;ul&gt;
            &lt;li&gt;Gato 1&lt;/li&gt;
            &lt;li&gt;Gato 2&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/section&gt;
            &lt;section&gt;
            &lt;p&gt;Aqui teremos a tabela&lt;/p&gt;
            &lt;/section&gt;"
            , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
            , "respTitle" => "Nossa solução"
            , "respRenderTitle" => "Fica assim:"
            , "respContent" => "&lt;!-- Página do projeto --&gt;
            &lt;header&gt;
            &lt;h1&gt;Caipora&lt;/h1&gt;
            &lt;/header&gt;
            &lt;section&gt;
            &lt;p&gt;Aqui teremos a lista de gatos&lt;/p&gt;
            &lt;ul&gt;
            &lt;li&gt;Gato 1&lt;/li&gt;
            &lt;li&gt;Gato 2&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/section&gt;
            &lt;section&gt;
            &lt;p&gt;Aqui teremos a tabela&lt;/p&gt;
            &lt;/section&gt;"
            , "respComment" => "<p>Veja que as tags de cabeçalho foram inseridas no início do arquivo, antes dos outros elementos 
            que representam o corpo do site. É este o lugar onde elas devem ficar uma vez que não alteram, na visualização da página, 
            o posicionamento do conteúdo que estão englobando na página. Assim, fica mais fácil entender que a importância de ter um elemento chamado
            <strong>header</strong> está relacionada à semântica do código.</p><p>Veja também que como era necessário inserirmos um título, utilizamos 
            o elemento <code>h1</code> para envolver a palavra \"Caipora\".</p>"
            ));?>

          </div>
        </div>
      </div>
    </div>




