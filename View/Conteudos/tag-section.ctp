<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Section",
    "url"   => "tag-section"
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
        <div class="step-pane in" id="section">
            <h3>Section</h3>
            <p>
              O elemento <code>section</code>, que traduzido temos "seção", indica ao
              navegador que o trecho englobado pelas tags <code>&lt;section&gt; 
              &lt;/section&gt;</code> representa a seção de algo. Podemos compará-lo 
              a uma seção de livro, por exemplo, uma vez que ele agrupa conteúdos 
              que se relacionam. 
            </p>      
            <p>
              <span class="label label-warning">Importante</span> Visualmente,
              no navegador, não haverá diferença quando utilizarmos essa tag. Mas 
              por que devemos usar, então? Isso é semântica, garantindo a melhor 
              organização de seu conteúdo em HTML5. 
            </p>
            <p>
              <span class="label label-warning">Importante</span> Lembre-se que
              adicionamos bordas da cor preta para facilitar a visualização da 
              tabela. No entanto, esta tabela está sem bordas pelo código que 
              ali está uma vez que quem cuida da parte visual de um site é a
              linguagem CSS.
            </p>

            <div class="two-columns-example row-fluid">
              <section>
                <ul>
                  <li>
                    <img src="http://escola.mupi.me/img/fotoGato1.png" alt="Foto do gato 1" title="Gato Otto Zepelin" />
                    <ul>
                      <li>Nome: Otto Zepelin</li>
                      <li>Idade: 40 dias</li>
                      <li>Peso: 400g</li>
                    </ul>
                  </li>
                  <li>
                    <p>Espaço para o Gato 2</p>
                  </li>
                </ul>
              </section>
              <section>
                <table>
                  <tbody>
                    <!-- Colunas -->
                    <tr>
                      <th> Idade (em meses) </th> 
                      <th> Peso do gato (em Kg) </th>
                      <th> Alimento (g/dia) </th>
                    </tr>
                    <!-- Linha 1 -->
                    <tr>
                      <td> 4 </td>
                      <td> 1,8 - 2,8 </td>
                      <td> 55 - 75 </td>
                    </tr>
                    <!-- Linha 2 -->
                    <tr>
                      <td> 6 </td>
                      <td> 2,4 - 3,9 </td>
                      <td> 60 - 80 </td>
                    </tr>
                    <!-- Linha 3 -->
                    <tr>
                      <td> 9 </td>
                      <td> 2,9 - 4,8 </td>
                      <td> 60 - 80 </td>
                    </tr>
                    <!-- Linha 4 -->
                    <tr>
                      <td> 12 </td>
                      <td> 3 - 5 </td>
                      <td> 60 - 80 </td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
