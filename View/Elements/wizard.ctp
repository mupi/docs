<div class="container fuelux navbar-fixed-top wizard-header"> 
  <div class="row-fluid">
    <div id="lesson-steps" class="wizard ">
      <!-- Steps header -->
      <ul class="steps">
        <?php
foreach($steps as $key => $step){
   echo '<li data-target="#step' . ($key + 1) . '" >';
   echo '  <span class="badge">' . ($key + 1) . '</span>';
   echo '    ' . $step . '';
   echo '  <span class="chevron"></span>';
   echo '</li>';
 }
        ?>
      </ul>
    </div>
  </div>
</div>
