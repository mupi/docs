<?php 
  $this->Html->script("jquery-ui-1.10.3.custom.min.js", array("inline" => false));
  $this->Html->script("jquery.mjs.nestedSortable.js", array("inline" => false));
  $this->Html->script("exercise-tree.js", array("inline" => false));
  $this->Html->css("exercise-tree.css", null, array("inline" => false));

  $exTitle        = isset($exTitle) ? $exTitle : "Exercício:";
  $showRespBtn = isset($showRespBtn) ? $showRespBtn : "Mostrar nossa solução"; 

if(!$elements){
    echo "<span class='error'> Erro ao carregar exercício </span>";
  }

   echo '<div class="treeEx container-fluid">'
        . '<div class="mupi-exercise">'
          . '<div class="header row-fluid">'
            . '<div class="query-title span6">'
              . $exTitle
            . '</div> '
            . '<div class="render-title span6">'
              . '<button class="show-answer-btn btn">'
                . $showRespBtn
                . '<i class="icon-unlock"></i>'
              . '</button>'
            . '</div> '
          . '</div>'
          . '<div class="quest row-fluid">'
            . '<ol class="tree span6">'
              . $this->Element->buildTree($this->Element->flattenNShuffle($elements))
            . '</ol>'
            . '<div class="html span6">'
              . '<pre class="prettyprint linenums">'
              .   $html
              . '</pre>'
            . '</div>'
          . '</div>'
        . '</div>'
        . '<div class="mupi-exercise-answer">'
          . '<div class="resp row-fluid">'
            . '<div class="html explanation span6">'
              . $explanation
            . '</div>'
            . '<ol class="tree span6">'
              . $this->Element->buildTree($elements)
            . '</ol>'
          . '</div>'
        . '</div>'
      . '</div>';
?>
