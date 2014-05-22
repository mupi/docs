<div class=" container navbar-fixed-top breadcumb-container">
  <div class="row-fluid">
    <div class="span12">
      <ul class="breadcrumb">
        <li class="dropdown">
          <a href="#"><?php echo isset($curso) ? $curso : ""; ?></a>
          <span class="divider">/</span>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo isset($aula) ? $aula : ""; ?>
            <i class="icon-sort-down"></i></a>
          <ul class="dropdown-menu">
            <?php
               foreach ($aulas as $a){
                 echo '<li ' . (isset($a[2]) ? 'class="disabled"' : '') . '><a href="' . $a[1] . '">' . $a[0] . '</a></li>';
               }
               ?>
          </ul>
        </li>
      </ul>
    </div>  
    <!-- <div class="switch switch-four span5 clearfix well">
      <label for="lesson" onclick="">Aula completa</label>
      <label for="exercices" onclick="">Exercícios</label>
      <label for="challenges" onclick="">Desafios</label>
      <label for="projects" onclick="">Projetos</label>
      <span class="slide-button btn disabled btn-warning"></span>
    </div> -->
  </div>
</div>

<!-- Variables for mixpanel tracking -->
<script type="text/javascript">
var course = "<?php echo isset($curso) ? $curso : ""; ?>";
var lesson = "<?php echo isset($aula) ? $aula : ""; ?>";
</script>
