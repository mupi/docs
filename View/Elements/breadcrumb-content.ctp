<?php
  $aulas = array(
       "Como funciona a Internet" =>  array(
            array("Arquitetura Cliente/Servidor", "internet-arquitetura"),
            array("Internet, web e DNS", "internet-dns"),
            array("Protocolos e Jargões", "internet-protocolos"),
            array("Infográfico: internet", "internet-infografico"),
        ),
        "Design na Web" => array(
            array("Cores na Web", "design-cores"),
            array("O que é design", "design"),
            array("Design thinking", "design-thinking"),
            array("Wireframes e Mockups", "design-mockup"),
        ),
        "Tópicos sobre HTML" => array(
            array("O que é HTML", "html-definicao"),
            array("Imagem", "tag-img"),
            array("Links", "tag-a"),
            array("Elementos textuais", "tag-textuais"),
            array("Listas", "tag-listas"),
            array("Tabelas", "tag-tabela"),
            array("Div e span", "tag-div-span"),
            array("Section", "tag-section"),
            array("Header", "tag-header"),
            array("Footer", "tag-footer"),
            array("Aside", "tag-aside"),
            array("Nav", "tag-nav"),
            array("Estrutura HTML", "estrutura-html"),
        ),
        "Tópicos sobre CSS3" => array(
            array("Sobre CSS", "css-sobre"),
            array("Formas de utilizar CSS", "css-como-usar"),
            array("Propriedades CSS", "css-propriedades"),
            array("Propriedade CSS color", "css-color"),
            array("Propriedade CSS font", "css-font"),
            array("Modelo de caixa", "modelo-de-caixa"),
            array("Propriedade CSS border", "css-border"),
            array("Propriedade CSS width, height", "css-width-height"),
            array("Posicionando Elementos com CSS", "css-posicionamento"),
        ),
        "Projetos" => array(
            array("Estrutura de Diretórios", "estrutura-diretorios"),
        )
  );

  $link = urlencode(Router::url( $this->here, true));

?>
<div class="container navbar-fixed-top breadcumb-container">
  <div class="row-fluid">
    <div class="span12">
      <ul class="breadcrumb">
        <li class="dropdown">
          <?php
            echo $this->Html->link(isset($curso) ? $curso : "",
                                   array('controller' => 'conteudos'));
          ?>
          <!--<a href="#"><?php echo isset($curso) ? $curso : ""; ?></a>-->
          <span class="divider">/</span>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo isset($aula) ? $aula : ""; ?>
            <i class="icon-sort-down"></i></a>
            <ul class="dropdown-menu">
        <?php
            foreach ($aulas as $topico => $aaulas){
        ?>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#"><?php echo $topico; ?></a>
                <ul class="dropdown-menu">
        <?php
                foreach($aaulas as $a) {
                    echo '<li '
                    . (isset($a[1]) && $a[1] == $url ? 'class="disabled"' : '')
                    . '><a href="' . $a[1] . '">'
                    . $a[0]
                    . '</a></li>';

                    if(isset($a[1]) && $a[1] == $url){
                        $this->assign('title', $topico . " - " . $a[0]);
                    }
                }
        ?>
                </ul>
            </li>
        <?php
            }
        ?>
          </ul>
        </li>
        <li class="pull-right visible-desktop">
          <iframe
             class="pull-right"
             src="//www.facebook.com/plugins/like.php?href=<?php echo $link; ?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=trebuchet+ms&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=292772274170801"
             scrolling="no"
             frameborder="0"
             style="border:none; overflow:hidden; width:400px; height:30px;
             margin-top: 5px;"
             allowtransparency="true">
          </iframe>
        </li>
      </ul>
      <iframe
         class="hidden-desktop"
         src="//www.facebook.com/plugins/like.php?href=<?php echo $link; ?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=trebuchet+ms&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=292772274170801"
         scrolling="no"
         frameborder="0"
         style="border:none; overflow:hidden; width:400px; height:30px;
                margin-top: 5px;"
         allowtransparency="true">
      </iframe>
    </div>
  </div>
</div>

<!-- Variables for mixpanel tracking -->
<script type="text/javascript">
  var course = "<?php echo isset($curso) ? $curso : ""; ?>";
  var lesson = "<?php echo isset($aula) ? $aula : ""; ?>";
</script>
