<?php echo $this->element('breadcrumb', array(
 "curso" => "Web Design para iniciantes",
 "aula"  => "Introdução ao HTML5",
 "aulas" => array(
  0 => array("Como funciona a internet", "internet"),
  1 => array("Sobre design", "design"),
  2 => array("Introdução ao HTML5", "html", true),
  3 => array("Introdução a CSS3", "css"),
  4 => array("JavaScript e jQuery", "js-jquery"),
  5 => array("Ferramentas externas",
    "ferramentas-basico"),
  )
 )); 
?> 
<?php echo $this->element('wizard', array(
  "steps" => array(
   "Pratique"
 ))); 
?>
<?php 
  $this->Html->script("bootstro.js", array("inline" => false));
  $this->Html->script("exercise-inspector.js", array("inline" => false));
  $this->Html->script("html-lesson.js", array("inline" => false));
  $this->Html->css("html-lesson.css", null, array("inline" => false));
  $this->Html->css("exercise-inspector.css", null, array("inline" => false));
  $this->Html->css("bootstro.css", null, array("inline" => false));
?>
<div class="container wizard-content navbar-fixed-top">
  <div class="step-content">
    
    <div class="step-pane active" id="step1">
      <h3>Exercício para praticar!</h3>
      <p>
        Nesse exercício, nós iremos montar uma parte de um site de uma rede
        social. Será um widget <popover "Um componente de uma interface
                                         gráfica" /> desse site que mostrará sugestões de amigos para o usuário. O
          designer enviou as especificações, que podem ser visualizadas abaixo
          juntamente com uma imagem da versão final e você pode utilizar o editor
          de código para colocar os estilos. Os itens já foram feitos estão marcados
      </p>
      <ul>
        <li>Cada item de sugestão será separado por uma borda cinza</li>
        <li class="done">A imagem do contato sugerido ficará a esquerda e o restante do
          texto a direita com um espaço de 10px entre eles</li>
        <li>O elemento inteiro terá borda cinza a direita da mesma espessura da
          borda que separa os contatos</li>
        <li  class="done">No cabeçalho, o título ficará posicionado à esquerda e o link à
          direita; o background do cabeçalho será cinza</li>
        <li>O nome do contato sugerido ficará em negrito e sua cor será #64522e</li>
        <li>O item que indica amigos em comum será #979590 e sua fonte terá
          tamanho de 12px</li>
        <li>O elemento não terá borda a esquerda, de forma que possa parecer
          encaixado no site</li>
        <li  class="done">Haverá uma margem superior e esquerda de 10px e um
          padding de 20px inferior</li>
        <li>O elemeno terá 275px de largura exatamente</li>
      </ul>
      
      <?php echo $this->Html->image('css_widget.png'); ?>

      <p>
        Atenção para o fato de que cada elemento a ser modificado está com o
        atributo <code>class</code> e o CSS a ser colocado para cada um deles está
        associado a essas classes. Veja que dessa forma, você não precisa
        colocar propriedades CSS para cada um dos elementos, mas sim para
        uma classe inteira dele.
      </p>
      
      <div id="exercicio-css" class="tab-content">
        <!--aba 1 lista-->
        <div class="tab-pane active in" id="pratica">
          
          <?php echo $this->element('exercise-editor-full', array(
          "exClass" => "exPratic1"
          , "lang"    => "html"
          , "exTitle" => ""
          , "exRenderBtn" => "Mostrar"
          , "showRespBtn" => "Mostrar nossa solução"
          , "initialContent" => "
&lt;style type=&quot;text/css&quot;&gt;
  div.sugestoes-r {
		
		margin: 0 auto;
	}

	div.cabecalho-r {
		
		background-color: #f3f1f1;
	}

	h6.cabecalho_titulo-r {
		float: left;
		padding-left: 2px;
	}
  
	a.cabecalho_link-r {
		float: right;
		margin: 10px 2px;          
	}

	div.sugestao-r{
		
		margin-left: 10px;
		margin-top: 10px;
		padding-bottom: 20px;
	}

	div.sugestao_imagem-r {
		float: left;
		margin-right: 10px;
	}

	.sugestao_nome-r a {
		
		
	}

	.sugestao_info-r a {
		
	}

	a.sugestao_adicionar-r {
		
	}        
&lt;/style&gt;

&lt;div class=&quot;sugestoes-r&quot;&gt;
	&lt;div class=&quot;cabecalho-r clearfix&quot;&gt;
		&lt;h6 class=&quot;cabecalho_titulo-r&quot;&gt;Pessoas que voc&#234; talvez conhe&#231;a&lt;/h6&gt;
		&lt;a href=&quot;#&quot; class=&quot;cabecalho_link-r&quot;&gt;Ver todas&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;sugestoes_container-r&quot;&gt;
		&lt;div class=&quot;sugestao-r&quot;&gt;
		  &lt;div class=&quot;sugestao_imagem-r clearfix&quot;&gt;
		    &lt;img src=&quot;http://escola.mupi.me/img/marina.jpg&quot;&gt;
		  &lt;/div&gt;
		  &lt;div class=&quot;sugestao_dados-r&quot;&gt;
		    &lt;div class=&quot;sugestao_nome-r&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;Marina Mendez&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;div class=&quot;sugestao_info-r&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;7 amigos em comum&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar-r&quot;&gt;Adicionar aos amigos&lt;/a&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;sugestao&quot;&gt;
		  &lt;div class=&quot;sugestao_imagem-r clearfix&quot;&gt;
		    &lt;img src=&quot;http://escola.mupi.me/img/luisa.jpg&quot;&gt;              
		  &lt;/div&gt;
		  &lt;div class=&quot;sugestao_dados-r&quot;&gt;
		    &lt;div class=&quot;sugestao_nome-r&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;Luisa Bandeira&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;div class=&quot;sugestao_info-r&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;25 amigos em comum&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar-r&quot;&gt;Adicionar aos amigos&lt;/a&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;sugestao-r&quot;&gt;
		  &lt;div class=&quot;sugestao_imagem-r clearfix&quot;&gt;
		    &lt;img src=&quot;http://escola.mupi.me/img/joao.jpg&quot;&gt;
		  &lt;/div&gt;
		  &lt;div class=&quot;sugestao_dados-r&quot;&gt;
		    &lt;div class=&quot;sugestao_nome-r&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;Jo&#227;o Maria Carvalho&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;div class=&quot;sugestao_info-r&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;1 amigos em comum&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar-r&quot;&gt;Adicionar aos amigos&lt;/a&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;"
          , "initialRenderText" => "Clique em 'Mostrar' para mostrar o resultado"
          , "respTitle" => "Nossa solução"
          , "respRenderTitle" => "Fica assim:"
          , "respComment" => ""
          , "respContent" => "
&lt;style type=&quot;text/css&quot;&gt;
	div.sugestoes {
		width: 275px;
		margin: 0 auto;
		border-right: 1px solid #eee;
		font-family: &#39;Arial&#39; sans-serif;
	}

	div.cabecalho {
		border-top: 1px solid #eee;
		background-color: #f3f1f1;
	}

	h6.cabecalho_titulo {
		float: left;
		padding-left: 2px;
	}
	a.cabecalho_link {
		float: right;
		margin: 10px 2px;          
	}

	div.sugestao{
		border-bottom: 1px solid #eee;
		margin-left: 10px;
		margin-top: 10px;
		padding-bottom: 20px;
	}

	div.sugestao_imagem {
		float: left;
		margin-right: 10px;
	}

	.sugestao_nome a {
		color: #64522e;
		font-weight: bold;
	}

	.sugestao_info a {
		color: #979590;
		font-size: 12px;
	}

	a.sugestao_adicionar {
		color: #64522e;
	}        
&lt;/style&gt;

&lt;div class=&quot;sugestoes&quot;&gt;
	&lt;div class=&quot;cabecalho clearfix&quot;&gt;
		&lt;h6 class=&quot;cabecalho_titulo&quot;&gt;Pessoas que voc&#234; talvez conhe&#231;a&lt;/h6&gt;
		&lt;a href=&quot;#&quot; class=&quot;cabecalho_link&quot;&gt;Ver todas&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;sugestoes_container&quot;&gt;
		&lt;div class=&quot;sugestao&quot;&gt;
		  &lt;div class=&quot;sugestao_imagem  clearfix&quot;&gt;
		    &lt;img src=&quot;http://escola.mupi.me/img/marina.jpg&quot;&gt;
		  &lt;/div&gt;
		  &lt;div class=&quot;sugestao_dados&quot;&gt;
		    &lt;div class=&quot;sugestao_nome&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;Marina Mendez&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;div class=&quot;sugestao_info&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;7 amigos em comum&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar&quot;&gt;Adicionar aos amigos&lt;/a&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;sugestao&quot;&gt;
		  &lt;div class=&quot;sugestao_imagem  clearfix&quot;&gt;
		    &lt;img src=&quot;http://escola.mupi.me/img/luisa.jpg&quot;&gt;              
		  &lt;/div&gt;
		  &lt;div class=&quot;sugestao_dados&quot;&gt;
		    &lt;div class=&quot;sugestao_nome&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;Luisa Bandeira&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;div class=&quot;sugestao_info&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;25 amigos em comum&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar&quot;&gt;Adicionar aos amigos&lt;/a&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;sugestao&quot;&gt;
		  &lt;div class=&quot;sugestao_imagem  clearfix&quot;&gt;
		    &lt;img src=&quot;http://escola.mupi.me/img/joao.jpg&quot;&gt;
		  &lt;/div&gt;
		  &lt;div class=&quot;sugestao_dados&quot;&gt;
		    &lt;div class=&quot;sugestao_nome&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;Jo&#227;o Maria Carvalho&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;div class=&quot;sugestao_info&quot;&gt;
		      &lt;a href=&quot;#&quot;&gt;1 amigos em comum&lt;/a&gt;
		    &lt;/div&gt;
		    &lt;a href=&quot;#&quot; class=&quot;sugestao_adicionar&quot;&gt;Adicionar aos amigos&lt;/a&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;"
          ));?>
        </div>
      </div>
    </div>
  </div>
</div>
