<?php echo $this->element('breadcrumb', array(
                 "curso" => "Web Design para iniciantes",
                 "aula"  => "Ferramentas externas",
                 "aulas" => array(
                                  0 => array("Como funciona a internet", "internet"),
                                  1 => array("Sobre design", "design"),
                                  2 => array("Introdução ao HTML5", "html"),
                                  3 => array("Introdução a CSS3", "css"),
                                  4 => array("Estrutura básica de projeto", "estrutura-projeto"),
                                  5 => array("JavaScript e jQuery", "js-jquery"),
                                  6 => array("Ferramentas externas","ferramentas-basico", true),
                                  7 => array("Projetos","projetos-webdesign"),
                                  )
           )); 
?> 
<?php echo $this->element('wizard', array(
                          "steps" => array(
                                           "Sobre embed",
                                           "Dicas de ferramentas"
                                           ))); ?>

<?php 
  //$this->Html->script("bootstro.js", array("inline" => false));
  //$this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container wizard-content navbar-fixed-top">
  <!-- Steps content -->
  <div class="step-content">
    <div class="step-pane active" id="step1">
      <p>Assista ao video abaixo para aprender como incorporar(embed) conteúdo de outros sites ao seu.</p>
      <iframe width="940" height="480" src="//www.youtube.com/embed/Jg8ER0S7SkY" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="step-pane active" id="step2">
      <p>O video abaixo foi uma aula dada ao vivo que traz vários exemplos de ferramentas externas que podem ser agregadas ao seu site.</p>
      <iframe width="853" height="480" src="//www.youtube.com/embed/7SvO6Bt7SDI" frameborder="0" allowfullscreen></iframe>
      <h2>Temas abordados</h2>
      <ul>
        <li>Porque utilizar ferramentas externas</li>
        <li>Exemplo de ferramentas disponíveis livremente que podem ser utilizadas no desenvolvimento de um site: <a href="http://twitter.github.io/" target="_blank">http://twitter.github.io/</a></li>
        <li>O que é embed/incorporar e exemplos</li>
        <li>O que são APIs e exemplos de uso:</li>
          <ul>
            <li><a href="https://developers.facebook.com/docs/reference/plugins/like-box/" target="_blank">Ferramenta de like do Facebook</a></li>
            <li><a href="https://dev.twitter.com/" target="_blank">Ferramentas para desenvolvedores do Twitter</a></li>
            <li><a href="http://app.bg" target="_blank">App.bg - exemplo de site que utiliza APIs</a></li>
            <li><a href="http://api.flickr.com/services/feeds/photos_public.gne?tags=mupi&tagmode=any&format=xml" target="_target">Exemplo sobre como requisitar dados da API do Flickr</a> - (você pode modificar os valores depois de 'tags=' para qualquer palavra-chave que queira buscar fotos e observar os dados que ele mostra na tela)</li>
          </ul>
        <li>Software de gerência de projeto com controle de versão: <a href="https://github.com/" target="_blank">GitHub</a></li>
    </ul>
    </div>
  </div>
</div>
