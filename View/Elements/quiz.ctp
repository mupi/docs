<?php 
  $this->Html->script("jquiz.js", array("inline" => false));
  $this->Html->css("jquiz.css", null, array("inline" => false));
?>

<h4>Responda as questões abaixo sobre o conteúdo desta aula.</h4>
<div class="row-fluid">
  <div class="span8 tabbable">
    <ul class="nav nav-tabs">
      <?php 
        foreach ($exercicios as $key => $value) {
          echo '<li><a href="#exerc' . $key . '" data-toggle="tab">' 
            . $value[0] . '</a></li>';
        } 
      ?>
    </ul>
    <ol id="jquiz" class="tab-content">
      <?php 
        foreach ($exercicios as $k => $v) {
          echo "<li class='tab-pane fade in' id='exerc" . $k . "'>";
          echo '<p>'. $v[1] .'</p>';
          echo '<ul>';
          foreach ($v[2] as $k1 => $v1) {
            echo '<li' . (isset($v1[1]) ? ' class="correct"' : '') . '>' 
              . $v1[0] . '</li>';
          }
          echo '</ul>';
          echo '<div class="explanation">';
          echo  '<p>'. $v[3] .'</p>';
          echo '</div>';
          echo '</li>';
        } 
      ?>      
    </ol>
   
  </div>
  <div class="span4">
    <label>Total respondido:</label>
    <div class="progress">
      <div id="quiz-total" class="bar"></div>
    </div>

    <div id="jquizremarks">
      <p id="jquiztotal">&nbsp;</p>
    </div>

    <div class="btn-group">
      <button class="btn" id="prevtab" type="button">Anterior</button>
      <button class="btn" id="nexttab" type="button">Próximo</button>
    </div>
  </div>
</div>
