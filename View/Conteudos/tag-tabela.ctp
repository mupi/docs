<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Tabelas",
    "url"   => "tag-tabela"
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
        <div class="step-pane in" id="tabela">
          <h3>Tabela</h3>
          <p>
            As tabelas no HTML são compostas por diversos elementos organizados 
            de maneira hierárquica e a seguir mostraremos uma forma simples 
            de montá-las com as tags <code>table</code>, <code>tbody</code>, 
            <code>tr</code>, <code>th</code> e <code>td</code>.
          </p>

          <div class="row-fluid">
            <div class="inspector-container  span5">
              <div class="toinspect">
                <table>
                  <tbody>
                    <tr>
                      <th> Coluna 1 </th>
                      <th> Coluna 2 </th>
                    </tr>
                    <tr>
                      <td> Linha 1 - Coluna 1 </td>
                      <td> Linha 1 - Coluna 2 </td>
                    </tr>
                    <tr>
                      <td> Linha 2 - Coluna 1 </td>
                      <td> Linha 2 - Coluna 2 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <pre class="code-clicked prettyprint">
              </pre>
            </div>
            <div class="span7">
              <p>
                Cada parte desta tabela representa uma célula envolvida pelo elemento 
                que a define. Observe que ela não possui bordas separando cada célula, 
                seja coluna ou linha. Para lidar com estas características visuais 
                temos que utilizar a linguagem 
                <a href="http://escola.mupi.me/conteudos/css-sobre" 
                target="blank">CSS</a>.
              </p>
              <p>
                Agora, veja a tabela a seguir como exemplo. Ela possui 3 colunas e 4 linhas. 
                Observe a hierarquia dos elementos, em que alguns estão contidos em outros. 
                Para facilitar o entendimento, adicionamos comentários no código e 
                bordas da cor preta na visualização da tabela:
              </p>
            </div>
            <div class="two-columns-example row-fluid">
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
            </div>
            <p>
              <span class="label label-warning">Importante</span> É importante pensar na 
              semântica de uma tabela. Por algum tempo, alguns web designers utilizaram 
              tabelas como uma maneira de construir layouts de páginas. Isto é 
              <strong>errado</strong> do ponto de vista semântico! As tabelas devem ser 
              utilizadas nas mesmas situações em que a utilizaríamos em um documento de texto. 
            </p>
            <p>
              Leia com atenção a explicação de cada elemento que utilizamos para construir 
              uma tabela:
            </p>
            <h5>table - tabela</h5>
            <ul>
              <li>
                Sintaxe: <code>&lt;table&gt; &lt;/table&gt;</code>
              </li>
              <li>
                Descrição: Representa uma tabela, é dentro dela que serão representados 
                cabeçalhos, linhas, colunas, etc..
              </li>
            </ul>
            <h5>Table body - corpo de tabela</h5>
            <ul>
              <li>
                Sintaxe: 
                <code>&lt;tbody&gt; &lt;/tbody&gt;</code>
              </li>
              <li>
                Descrição: representa o corpo de uma tabela, onde ficam os dados. 
                Em tabelas mais avançadas, existe um elemento separado para o 
                cabeçalho (<code>thead</code>).
              </li>
            </ul>
          </div>
          <div class="row-fluid">

              <div class="span4">
                <h5>Table row - linha de tabela</h5>
                <ul>
                  <li>
                    Sintaxe: 
                    <code>&lt;tr&gt; &lt;/tr&gt;</code>
                  </li>
                  <li>
                    Descrição: representa uma linha de uma tabela. É dentro deste elemento que 
                    representaremos cada dado (coluna) da tabela.
                  </li>
                </ul>
              </div>
              <div class="span4">
                <h5>Table header - cabeçalho</h5>
                <ul>
                  <li>
                    Sintaxe: 
                    <code>&lt;th&gt; &lt;/th&gt;</code>
                  </li>
                  <li>
                    Descrição: representa um dado de cabeçalho para uma coluna da tabela.
                  </li>
                </ul>
              </div>
              <div class="span4">
                <h5>Table data - dado de tabela</h5>
                <ul>
                  <li>
                    Sintaxe: 
                    <code>&lt;td&gt; &lt;/td&gt;</code>
                  </li>
                  <li>
                    Descrição: representa um dado de uma coluna da tabela.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>