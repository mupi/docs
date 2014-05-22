<?php 
  $this->Html->script("exercise-editor.js", array("inline" => false));
  $this->Html->script("ace/ace.js", array("inline" => false));
  $this->Html->css("exercise-editor.css", null, array("inline" => false));

  $exClass        = isset($exClass) ? $exClass : "";
  $lang           = isset($lang) ? strtolower($lang) : "html";

  $exTitle        = isset($exTitle) ? $exTitle : "Exercício:";
  $exRenderBtn    = isset($exRenderBtn) ? $exRenderBtn : "Mostrar"; 

  $initialContent = isset($initialContent) ? $initialContent : $this->Element->getInitialContent($lang);
  $initialRenderText = isset($initialRenderText) ? $initialRenderText : "Clique em " . $btnRenderTxt . " para mostrar o resultado";

  $showRespBtn    = isset($showRespBtn) ? $showRespBtn : "Mostrar nossa solução"; 

  $respTitle        = isset($respTitle) ? $respTitle : "Nossa solução";
  $respRenderTitle  = isset($respRenderTitle) ? $respRenderTitle : ""; 

  $respContent      = isset($respContent) ? $respContent : "";
  $respRenderText   = isset($respRenderText) ? $respRenderText : "Ooops, tivemos algum problema para mostrar nosso resultado @_@!";
  $respComment   = isset($respComment) ? $respComment : "";
?>


<div 
  class="editEx <?php echo $exClass; ?>" data-lang="<?php echo $lang; ?>">
  <div class="mupi-exercise exercise">
    <div class="header row-fluid">
      <div class="query-title span6">
        <?php echo $exTitle; ?> 
      </div> 
      <div class="render-title span6">
        <button class="render_btn btn" type="run">
          <?php echo $exRenderBtn; ?> 
          <i class="icon-play-sign"></i>
        </button>
        <button class="show-answer-btn btn hide">
          <?php echo $showRespBtn; ?> 
          <i class="icon-unlock"></i>
        </button>
      </div> 
    </div>
    <div class="body row-fluid">
      <div class="query editor span6"><?php echo $initialContent; ?></div> 
      <div class="render span6">
        <?php echo $initialRenderText; ?> 
      </div> 
    </div>
  </div>
  <div class="mupi-exercise-answer answer hide">
    <div class="header row-fluid">
      <div class="query-title span6">
        <?php echo $respTitle; ?>
      </div> 
      <div class="render-title span6">
        <?php echo $respRenderTitle; ?>
      </div> 
    </div>
    <div class="body row-fluid">
      <div class="query editor span6"><?php echo $respContent; ?></div> 
      <div class="render span6">
        <?php echo $respRenderText; ?>
      </div> 
    </div>
    <p>
      <?php echo $respComment; ?>
    </p>
  </div>
</div>  



<?php
  // function getInitialContent($lang="html"){
  //   $initialContent = "<!-- Redija sua resposta -->";
  //   if($lang == "js" || $lang = "javascript")  $initialContent = "// Redija sua resposta";
  //   if($lang == "css")  $initialContent = "\/* Redija sua resposta *\/";
  // }
?>